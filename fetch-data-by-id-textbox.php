<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, How to Fetch Data by ID in Textbox using php mySQL!</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row justify-content-center">
           <div class="col-md-7">

          
              <div class="card mt-5">
                 <div class="card-herder text-center">
                    <h4>How to Fetch Data by ID in Textbox using php mySQL</h4>
                 </div>
                 <div class="card-body">

                  <form action="" method="GET">
                  <div class="row">
                  <div class="col-md-8">
                  <input type="text" name="stud_id"  value="<?php if(isset($_GET['stud_id'])){echo $_GET['stud_id'];}?>" class="form-control">

                  </div>

                  <div class="col-md-4">
                  <button type="submit" class="btn btn-primary">Search</button>
                  </div>
                  </div>

                  </form>

                  <div class="row">
                  <div class="col-md-12">
                  <hr>
                  <?php
                    $con = mysqli_connect("localhost","root","","myclothes");

                    if(isset($_GET['stud_id']))
                    {
                      $stud_id = $_GET['stud_id'];

                      $query = "SELECT * FROM customer WHERE id='$stud_id' ";
                      $query_run = mysqli_query($con, $query);
                      
                      if(mysqli_num_rows($query_run)>0)
                      {
                          foreach($query_run as $row)
                          {
                            ?>
                  <div class="form-group mb-3">
                  <label for="">Name</label>
                  <input type="text" value="<?= $row['id']?>" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                  <label for="">Email</label>
                  <input type="text" value="<?= $row['email']?>" class="form-control">
                  </div>

                  <div class="form-group mb-3">
                  <label for="">Phone</label>
                  <input type="text" value="<?= $row['phone']?>" class="form-control">
                  </div>
                            <?php
                          }
                      }
                    
                    else
                     {
                          echo "Not Record Found";
                       
                      }
                    }
                  ?>

                 

                  </div>
                  
                  </div>

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