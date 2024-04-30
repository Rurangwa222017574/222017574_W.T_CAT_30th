<?php
session_start();
  if(!isset($_SESSION['user_id'])){
    header("Location: login.html");
  }
  include 'db.php';
  $id = $_GET['id'];
  $getLoan = mysqli_query($con, "DELETE FROM loan_applications WHERE id = $id");
 
  if($getLoan){
    header("Location: myloans.php");
  }
  ?>