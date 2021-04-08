<?php 
include("header.php") ;
//session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Cart Section </title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center border rounded bg-light my-5">
                <h2>My Cart Section </h2>
            </div>
            <div class="col-lg-10">
                <table class="table" style="float=center">
                    <thead class="text-center">
                        <tr>
                        
                        <th scope="col">Item Name </th>
                        <th scope="col">Item Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Remove</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">

                        <?php
                            $total = 0;
                            if(isset($_SESSION['cart'])){
                                foreach($_SESSION['cart'] as $key => $value){
                                    $total+=$value['Price'];
                                    echo"
                                        <tr>
                                            
                                            <td>$value[Item_name]</td>
                                            <td>$value[Price]</td>
                                            <td><input type = 'number' value='$value[Quantity]' min = '0' max = '18'></td>
                                            <td>
                                            <form action = 'manage_cart.php' method='POST'>
                                            <button name = 'Remove_Item' class='btn btn-outline-danger'><b>Item Remove</b></button></td>
                                            <input type='hidden' name= 'Item_name' value='$value[Item_name]'></form>
                                        </tr>
                                    ";
                                }
                            }
                        ?>
        
                    </tbody>
                    </table>
            </div>
            <div class="col-lg-2">
                <h5>Total Price </h5>
                <h6 class="text-right"><?php   echo $total                         ?></h6>
            </div>
        </div>
    </div>
</body>
</html>