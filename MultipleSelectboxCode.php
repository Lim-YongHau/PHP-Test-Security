<?php
session_start();
$con = mysqli_connect("localhost","root","","grabcar");


if(isset($_POST['save_multi_select']))
{
 $brands = $_POST['brandlist'];
 foreach ($brands as $items)
 {
    //   echo $items."<br>";

    $query = "INSERT INTO demo6 (brands) VALUES ('$items') ";
    $query_run = mysqli_query($con, $query);
 }
 
    if($query_run)
    {
     $_SESSION['status'] = "Inserted Successful";
     header("Location: multiple-selectbox.php");
   }
    else
    {
       $_SESSION['status'] = "Data not Inserted ";
       header("Location: multiple-selectbox.php");
    }
 }









?>