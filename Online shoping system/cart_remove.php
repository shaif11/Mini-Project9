<?php
require 'connection.php';
//require 'header.php';
$item_id=$_GET['id'];
$user_id=$_SESSION['id'];
$delete_query="delete from user_item where user_id='$user_id' and item_id='$item_id'";
$delete_query_result=mysqli_query($con,$delete_query) or die(mysqli_error($con));
header('location: cart.php');
?>