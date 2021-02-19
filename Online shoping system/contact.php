<?php
    require 'connection.php';
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	<br><br><br><br><br>
	<div class="container">
        <div class="row">
	<div class="col-md-12"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <div class="box-header"><!-- box-header Begin -->
                       
                       <center><!-- center Begin -->
                           
                           <h2> Feel free to Contact Us</h2>
                           
                           <p class="text-muted"><!-- text-muted Begin -->
                               
                               If you have any questions, feel free to contact us. Our Customer Service work <strong>24/7</strong>
                               
                           </p><!-- text-muted Finish -->
                           
                       </center><!-- center Finish -->
                       
                       <form action="contact.php" method="post"><!-- form Begin -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Name</label>
                               
                               <input type="text" class="form-control" name="name" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Email</label>
                               
                               <input type="text" class="form-control" name="email" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Subject</label>
                               
                               <input type="text" class="form-control" name="subject" required>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="form-group"><!-- form-group Begin -->
                               
                               <label>Message</label>
                               
                               <textarea name="message" class="form-control"></textarea>
                               
                           </div><!-- form-group Finish -->
                           
                           <div class="text-center"><!-- text-center Begin -->
                               
                               <button type="submit" name="submit" class="btn btn-primary">
                               
                               <i class="fa fa-user-md"></i>Send Message
                               
                               </button>
                               
                           </div><!-- text-center Finish -->
                           
                       </form><!-- form Finish -->
					   <?php
					   if(isset($_POST['submit'])){
						   include_once 'function.php';
						   $obj = new Contact();
						   $res = $obj->contact_us($_POST);
						   if($res==true){
							   echo "<script>alert('Query successfully submitted.Thank you')</script>";
						   }
						   else{
							   echo "<script>alert('Something went wrong!!')</script>";
						   }
						   
					   }
					   ?>
                       
                   </div><!-- box-header Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-9 Finish -->
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
		   
		