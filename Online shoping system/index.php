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
                <th><a href="login.php" style="text-decoration:none;"><font color="black">Login</font></a></th>
                <th><a href="signup.php" style="text-decoration:none;"><font color="black">Sign up</font></a></th>
                <th><a href="#" style="text-decoration:none;"><font color="black">More</font></a></th>
                <th><a href="#" style="text-decoration:none;"><font color="black">Cart</font></a></th>
            </tr>
        </table>
    </div>
    <div id="navbar">
        <ul id="menu">
            <li><a href="index.php">Home</a></li>
            <li><a href="all_products.php">All Products</a></li>
            <li><a href="my_account.php">My Account</a></li>
            <li><a href="cart.php">Shopping Cart</a></li>
            <li><a href="contact.php">Contact Us</a></li>
        </ul>
    </div>
    <div id="bannerImage">
        <div class="container">
            <center>
                <div id="bannerContent">
                    <h1>We sell .</h1>
                    <p>Flat 40% OFF on all premium brands.</p>
                    <a href="products.php" class="btn btn-danger">Shop Now</a>
                </div>
            </center>
        </div>
    </div>
    <br><br>
    <div id="product_box">
        <table border="0" width="100%" bgcolor="" height="7%">
            <tr><td colspan="5"></td></tr>
            <tr>
                <th><h2>Cameras</h2></th>
                <th><h2>Watches</h2></th>
                <th><h2>Shirts</h2></th>
            </tr>
            <tr>
                <td colspan="3"></td>
            </tr>
            <tr>
                <th width="20%"><img src="image/camera.jpg" width="75%"></th>
                <th width="20%"><img src="image/watch.jpg" width="75%"></th>
                <th width="20%"><img src="image/shirt.jpg" width="75%"></th>
            </tr>
        </table>
    </div>&nbsp;
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
            </tr>
        </table>
    </div>
    </div>
</body>
</html>
