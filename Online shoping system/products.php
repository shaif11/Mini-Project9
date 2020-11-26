<?php
session_start();
require 'check_if_added.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Online Shop</title>
    <link rel="stylesheet" href="style/style.css">
    <link href='https://fonts.googleapis.com/css?family=Arizonia' rel='stylesheet'>
    <link rel="stylesheet" href="bootstrap-4.0.0-dist/css/bootstrap.min.css">
</head>
<body>
<div class="main_wrapper">
    <div class="header">
        <table border="0" width="100%" bgcolor="#ffb6c1">
            <tr>

                <td align="right"><h4 style="font-family:'Arizonia',serif;font-size:30px; margin:0;" ;><a style="text-decoration: none;color: black" href="index.php"> Online Shop</a></h4></td>
                <td><label>
                <td align="right"><h4 style="font-family:'Arizonia',serif;font-size:30px; margin:0;" ;>Online Shop</h4></td>
                <td>
                    <form method="get" action="products.php" enctype="multipart/form-data">

                        <input type="text" placeholder="Search for products, brand and more" name="user_query" style="width:550px; height:35px;">
                        <input type="button" name="search" value="Search" style="width:60px;height:35px;"></form></td>
                <?php
                if(isset($_SESSION['email'])){
                    ?>
                    <th><a href="cart.php" style="text-decoration:none;"><font color="black">Cart</font></a></th>
                    <th><a href="settings.php" style="text-decoration:none;"><font color="black">Settings</font></a></th>
                    <th><a href="logout.php" style="text-decoration:none;"><font color="black">Logout</font></a></th>
                    <?php
                }else{
                    ?>
                    <th><a href="login.php" style="text-decoration:none;"><font color="black">Login</font></a></th>
                    <th><a href="signup.php" style="text-decoration:none;"><font color="black">Sign up</font></a></th>
                    <th><a href="#" style="text-decoration:none;"><font color="black">More</font></a></th>
                    <?php
                }
                ?>
            </tr>
        </table>
    </div>
    <div class="container"><br>
        <div class="jumbotron">
            <h1>Welcome to our Online Shop Store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/cannon_eos.jpg" alt="Cannon" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Cannon EOS</h3>
                            <p>Price: Rs. 36000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                            <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                        <?php
                                        }
                            else{
                                if(check_if_added_to_cart(1)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=1" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a><br>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/sony_dslr.jpeg" alt="Sony DSLR" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 40000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(2)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=2" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/sony_dslr2.jpeg" alt="Sony DSLR" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Sony DSLR</h3>
                            <p>Price: Rs. 50000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(3)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=3" class="btn btn-block btn-primary" name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/olympus.jpg" alt="Olympus" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Olympus DSLR</h3>
                            <p>Price: Rs. 80000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(4)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=4" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
    </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/titan301.jpg" alt="Titan 301" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Titan Model #301</h3>
                            <p>Price: Rs. 13000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(5)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=5" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a><br>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/titan201.jpg" alt="Titan 201" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Titan Model #201</h3>
                            <p>Price: Rs. 3000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(6)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=6" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/hmt.JPG" alt="htm milan" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>HMT Milan</h3>
                            <p>Price: Rs. 8000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(7)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=7" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/favreleuba.jpg" alt="Favre Leuba" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Favre Leuba #111</h3>
                            <p>Price: Rs. 18000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(8)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=8" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/raymond.jpg" alt="Raymond shirt" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Raymond</h3>
                            <p>Price: Rs. 1500.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(9)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=9" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/charles.jpg" alt="Charles shirt" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>Charles</h3>
                            <p>Price: Rs. 1000.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(10)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=10" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/HXR.jpg" alt="HXR" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>HXR</h3>
                            <p>Price: Rs. 900.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(11)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=11" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <a href="cart.php">
                        <img src="image/pink.jpg" alt="PINK" width="100%" height="100%">
                    </a>
                    <center>
                        <div class="caption">
                            <h3>PINK</h3>
                            <p>Price: Rs. 1200.00</p>
                            <?php if(!isset($_SESSION['email'])){  ?>
                                <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                                <?php
                            }
                            else{
                                if(check_if_added_to_cart(12)){
                                    echo '<a href="#" class=btn btn-block btn-success disabled>Added to cart</a>';
                                }else{
                                    ?>
                                    <a href="cart_add.php?id=12" class="btn btn-block btn-primary " name="add" value="add" class="btn btn-block btr-primary">Add to cart</a>
                                    <?php
                                }
                            }
                            ?>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br>
    <div id="footer">
        <table border="0" width="100%" bgcolor="lightgrey">
            <tr>
                <td width="25%" bgcolor="purple"><b>Quick Links</b></td>
                <td width="25%" bgcolor="purple"><b>Follow Us</b></td>
                <td width="25%" bgcolor="purple"><b>Contact</b></td>
                <td width="25%" bgcolor="purple"><b>Search</b></td>
            </tr>
            <tr>
                <td>
                    <ul id="link">
                        <li><a href="products.php">Cameras</a></li>
                        <li><a href="products.php">Watches</a></li>
                        <li><a href="products.php">Shirts</a></li>
                    </ul>
                </td>
                <td>
                    <ul id="link">
                        <li><a href="https://www.facebook.com/">Facebook</a></li>
                        <li><a href="https://twitter.com/">Twitter</a></li>
                        <li><a href="https://www.instagram.com/">instagram</a></li>
                        <li><a href="https://www.youtube.com/">Youtube</a></li>
                    </ul>
                </td>
                <td>
                    <ul id="link">
                        <li><a href="#">Number</a></li>
                        <li><a href="#">Address</a></li>
                        <li><a href="#">Email</a></li>
                        <li><a href="#">Pincode</a></li>
                    </ul>
                </td>
                <td><input type="text" placeholder="search">
                    <input type="button" value="Search">
                </td>
            </tr>
        </table>
    </div>
</div>
</body>
</html>