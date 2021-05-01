<?php
session_start();
$con = mysqli_connect("localhost","root","","grabcar");

if(isset($_POST['save_select'])){
 
$name = $_POST['name'];
$gender = $_POST['gender'];

$query="INSERT INTO demo3 (name,gender) VALUES ('$name','$gender')";
$query_run = mysqli_query($con, $query);

if($query_run)
 {
  $_SESSION['status'] = "Inserted Successful";
  header("Location: selectbox.php");

 }
 else
 {
    $_SESSION['status'] = "Data not Inserted ";
    header("Location: selectbox.php");
 }

}
?>