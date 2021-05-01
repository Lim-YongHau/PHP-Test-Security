<?php
session_start();
$con = mysqli_connect("localhost","root","","myclothes");

if(isset($_POST['stud_delete_btn']))
{
 $name = $_POST['name'];


 $query = "DELETE FROM customer WHERE id='$name' ";
    $query_run = mysqli_query($con, $query);

 

    if($query_run)
    {
     $_SESSION['status'] = "Data Deleted Successful";
     header("Location: delete-data-by-id.php");
   
    }
    else
    {
       $_SESSION['status'] = "Data Not Deleted ";
       header("Location: delete-data-by-id.php");
    }
 }

 ?>



 