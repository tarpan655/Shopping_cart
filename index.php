<?php include("header.php") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index page Welcome to my Shopping Cart</title>
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-3">
                <form action="manage_cart.php" method = "POST">
                    <div class="card" style="">
                        <img src="img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center" >
                            <h5 class="card-title">Oppo V5</h5>
                            <p class="card-text">Price : 18000/-</p>
                            <button type = "submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
                            <input type="hidden" name="Item_name" value = "Oppo V5"></input>
                            <input type="hidden" name="Price" value = "18000"></input>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method = "POST">
                    <div class="card" style="">
                        <img src="img2.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center" >
                            <h5 class="card-title">IPhone6</h5>
                            <p class="card-text">Price : 58000/-</p>
                            <button type = "submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
                            <input type="hidden" name="Item_name" value = "Iphone6"></input>
                            <input type="hidden" name="Price" value = "58000"></input>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method = "POST">
                    <div class="card" style="">
                        <img src="img3.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center" >
                            <h5 class="card-title">Laptop</h5>
                            <p class="card-text">Price : 48000/-</p>
                            <button type = "submit" class="btn btn-info"  name="Add_To_Cart">Add to Cart</button>
                            <input type="hidden" name="Item_name" value = "Laptop"></input>
                            <input type="hidden" name="Price" value = "48000"></input>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-3">
                <form action="manage_cart.php" method = "POST">
                    <div class="card" style="">
                        <img src="img4.jpg" class="card-img-top" alt="...">
                        <div class="card-body text-center" >
                            <h5 class="card-title">Digital Watch</h5>
                            <p class="card-text">Price : 1200/-</p>
                            <button type = "submit" class="btn btn-info" name="Add_To_Cart">Add to Cart</button>
                            <input type="hidden" name="Item_name" value = "Digital Watch"></input>
                            <input type="hidden" name="Price" value = "1200"></input>
                        </div>
                    </div>
                </form>
            </div>
        </div>  
    </div>
</body>
</html>