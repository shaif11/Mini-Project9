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
    <br>
    <div class="container">
        <div class="row">
            <div class="col-xs-6">
                <div class="panel panel-primary">
                    <div class="panel-heading"></div>
                    <div class="panel-body">
                        <p>You have been logged out. <a href="login.php">Login again.</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
