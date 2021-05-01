<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, How to Fetch Data from Database in php mySQL!</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row justify-content-center">
           <div class="col-md-12">

          
              <div class="card mt-4">
                 <div class="card-herder">
                    <h4>How to Fetch Data from Database in php mySQL</h4>
                 </div>
                 <div class="card-body">

                
                 
                 <table class="table table-bordered">
                 <thead>
                 <tr>
                     <th>Name</th>
                    <th>Email</th>
                    <th>phone</th>
                 </tr>
                 </thead>
                 <tbody>

                 <?php
                    $con = mysqli_connect("localhost","root","","myclothes");

                    $query = "SELECT * FROM customer";
                     $query_run = mysqli_query($con, $query);

                     if(mysqli_num_rows($query_run)>0)
                      {
                      foreach($query_run as $row)
                      {
                        // echo $row['id'];
                        ?>
                        <tr>
                        <td><?= $row['id'];?></td>
                        <td><?= $row['email'];?></td>
                        <td><?= $row['phone'];?></td>
                       
                     </tr>
                     <?php
                      }
                    }
                    else
                     {
                        //  echo "Not Record Found";
                        ?>
                        <tr>
                        <td colspan="4">No Record Found</td>
                        
                       
                     </tr>
                     <?php
                      }
                 ?>
                
                 </tbody>
                 </table>

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