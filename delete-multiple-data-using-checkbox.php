<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, How to Delete Multiple Data or record usind Checkbox in php mySQL !</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row justify-content-center">
           <div class="col-md-12">
              <div class="card mt-5">
                 <div class="card-herder">
                    <h4>How to Delete Multiple Data or record usind Checkbox in php mySQL</h4>
                 </div>
                 </div>
              </div>

              <div class="col-md-12">

              <?php
           if(isset($_SESSION['status']))
           {
             echo "<h4>".$_SESSION['status']."</h4>";
             unset($_SESSION['status']);
           }
           ?>

              <div class="card mt-4">
              <div class="card-body">
              
              <form action="deleteCode2.php" method="POST">
                <table class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <th>
                    <button type="submit" name="stud_delete_multiple_btn" class="btn btn-danger">Delete</button>
                    </th>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone No</th>
                </tr>
                </tbody>

                <tbody>
                <?php
                $con = mysqli_connect("localhost","root","","myclothes");

                $query = "SELECT * FROM customer ";
                $query_run = mysqli_query($con, $query);

                if(mysqli_num_rows($query_run) > 0)
                {
                    foreach($query_run as $row)
                    {
                    ?>
                   <tr>
                    <td style="width:10px ; text-align: center;">
                    <input type="checkbox" name="stud_delete_id[]" value="<?= $row['id'];?>">
                    </td>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['id'];?></td>
                    <td><?= $row['email'];?></td>
                    <td><?= $row['phone'];?></td>
                    
                   </tr>
                    <?php  
                }

            }
                else
                {
                    ?>
                    <tr>
                    <td colspan="5">No Record Found</td>
                     </tr>
                    <?php
                }

                ?>
                   
                </tbody>
                </table>
             </form>
              
              </div>
              </div>
              
              </div>

          </div>
     </div>
   


   
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>