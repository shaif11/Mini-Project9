<?php
session_start();
require 'connection.php';
if(!isset($_SESSION['email'])){
    header('location:index.php');
}
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
                <td align="right"><h4 style="font-family:'Arizonia',serif;font-size:30px; margin:0;" ;>Online Shop</h4></td>
                <td><label>
                        <input type="text" placeholder="Search for products, brand and more" name="user_query" style="width:550px; height:35px;">
                    </label>
                    <input type="button" name="search" value="Search" style="width:60px;height:35px;"></td>
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
    <div id="navbar">
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="products.php">All Products</a></li>
            <li><a href="my_account.php">My Account</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-xs-4 col-xs-offset-4">
                <h1>Change Password</h1>
                <form method="post" action="setting_script.php">
                    <div class="form-group">
                        <input type="password" class="form-control" name="oldPassword" placeholder="Old Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="newPassword" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="retype" placeholder="Re-type new password">
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" value="Change">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br>
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
