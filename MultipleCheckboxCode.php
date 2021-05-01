<?php
session_start();
$con = mysqli_connect("localhost","root","","grabcar");

if(isset($_POST['save_multiple_checkbox'])){
 $brands = $_POST['brands'];
 
 foreach ($brands as $item)

 {
    //  echo $item . "<br>";

    $query = "INSERT INTO demo4 (brands) VALUES ('$item') ";
    $query_run = mysqli_query($con, $query);
   
    if($query_run)
    {
     $_SESSION['status'] = "Inserted Successful";
     header("Location: multiple-checkbox-ins.php");
   
    }
    else
    {
       $_SESSION['status'] = "Data not Inserted ";
       header("Location: multiple-checkbox-ins.php");
    }
 }




}


?>