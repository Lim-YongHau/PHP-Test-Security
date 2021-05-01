<?php
session_start();
$con = mysqli_connect("localhost","root","","grabcar");

if(isset($_POST['save_checkbox'])){
 
$name = $_POST['name'];
$agree = $_POST['agree'];

$query="INSERT INTO demo2 (name,agree) VALUES ('$name','$agree')";
$query_run = mysqli_query($con, $query);

if($query_run)
 {
  $_SESSION['status'] = "Inserted Successful";
  header("Location: checkbox.php");

 }
 else
 {
    $_SESSION['status'] = "Data not Inserted ";
    header("Location: checkbox.php");
 }

}
?>