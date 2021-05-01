<?php
session_start();
$con = mysqli_connect("localhost","root","","myclothes");

if(isset($_POST['update_stud_data']))
{
 $name = $_POST['name'];

 $email = $_POST['email'];
 $phone = $_POST['phone'];


 $query = "UPDATE customer SET email='$email', phone='$phone' WHERE id='$name' ";
    $query_run = mysqli_query($con, $query);

 

    if($query_run)
    {
     $_SESSION['status'] = "Data Updated Successful";
     header("Location: update-data-by-id.php");
   
    }
    else
    {
       $_SESSION['status'] = "Not Updated ";
       header("Location: update-data-by-id.php");
    }
 }







?>