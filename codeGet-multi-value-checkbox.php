<?php
session_start();
$con = mysqli_connect("localhost","root","","grabcar");


if(isset($_POST['save_multicheckbox']))
{
 $brandslist = $_POST['brandslist'];
 foreach ($brandslist as $branditems)
 {
    //  echo $branditems."<br>";

    $query = "INSERT INTO demo5 (brands) VALUES ('$branditems') ";
    $query_run = mysqli_query($con, $query);
 }
 
    if($query_run)
    {
     $_SESSION['status'] = "Inserted Successful";
     header("Location: get-multi-value-checkbox.php");
   }
    else
    {
       $_SESSION['status'] = "Data not Inserted ";
       header("Location: get-multi-value-checkbox.php");
    }
 }








?>