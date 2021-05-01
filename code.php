<?php
session_start();
$con = mysqli_connect("localhost","root","","grabcar");

if(isset($_POST['insert_data'])){
 $name = $_POST['name'];
 $phone = $_POST['phone'];
 $email = $_POST['email'];
 $designation = $_POST['designation'];
 $dateofbirth = date('Y-m-d',strtotime($_POST['dateofbirth']));
 $time = $_POST['time'];
 $event_dt = $_POST['event_dt'];
 


 $query = "INSERT INTO employees (name,phone,email,designation,dateofbirth,time,event_dt) VALUES ('$name','$phone','$email','$designation','$dateofbirth','$time','$event_dt') ";
 $query_run = mysqli_query($con, $query);

 if($query_run)
 {
  $_SESSION['status'] = "Inserted Successful";
  header("Location: insert-data.php");

 }
 else
 {
    $_SESSION['status'] = "Data not Inserted ";
    header("Location: insert-data.php");
 }

}


?>