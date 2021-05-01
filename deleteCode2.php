<?php
session_start();
$con = mysqli_connect("localhost","root","","myclothes");

if(isset($_POST['stud_delete_multiple_btn']))
{
 $all_id = $_POST['stud_delete_id'];
 $extract_id = implode(',', $all_id);
//  echo $extract_id;
 

 $query = "DELETE FROM customer WHERE id IN($extract_id) ";
  $query_run = mysqli_query($con, $query);


//  if($query_run)
//     {
//      $_SESSION['status'] = "Data Deleted Successful 2";
//      header("Location: delete-multiple-data-using-checkbox.php");
   
//     }
//     else
//     {
//        $_SESSION['status'] = "Data Not Deleted 2";
//        header("Location: delete-multiple-data-using-checkbox.php");
//     }
 }







?>