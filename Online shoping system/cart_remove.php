<?php
require 'connection.php';
//require 'header.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$add_to_cart_query="insert into user_item(user_id,item_id,status) values ('$user_id','$item_id','Added to cart')";
$add_to_cart_result=mysqli_query($con,$add_to_cart_query) or die(mysqli_error($con));