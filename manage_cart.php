<?php
session_start();
if ($_SERVER['REQUEST_METHOD']=='POST'){
    if(isset($_POST["Add_To_Cart"])){
        if(isset($_SESSION["cart"])){

            $myItems = array_column($_SESSION['cart'],"Item_name");
            if(in_array($_POST["Item_name"],$myItems)){
                echo"<script>
                alert('Item Already Added to the cart');
                window.location.href = 'index.php';
                </script>";
            }

            $count = count($_SESSION["cart"]);
            $_SESSION["cart"][$count]=array("Item_name"=>$_POST["Item_name"],"Price"=>$_POST['Price'],'Quantity'=>1);
            print_r($_SESSION["cart"]);

        }
        else{
            $_SESSION["cart"][0]=array("Item_name"=>$_POST["Item_name"],"Price"=>$_POST['Price'],'Quantity'=>1);
            print_r($_SESSION["cart"]);
           
        }
    }
    if (isset($_POST["Remove_Item"])){
        foreach($_SESSION['cart'] as $key => $value){
            print_r($key);
            if($value['Item_name']==$_POST['Item_name']){
                unset($_SESSION['cart'][$key]);
                $_SESSION['cart'] = array_values($_SESSION['cart']);
                echo"<script>
                    alert('Item removed Successfully');
                    window.location.href = 'mycart.php';
                </script>";
            }
        }
    }
}

?>