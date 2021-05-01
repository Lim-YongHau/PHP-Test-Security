<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, SeachBox!</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row justify-content-center">
           <div class="col-md-12">

          
              <div class="card mt-4">
                 <div class="card-herder">
                    <h4>How to make Search box & filter data in HTML Table from Database in php mySQL</h4>
                 </div>
                 <div class="card-body">
                 
                 <div class="row">
                 <div class="col-md-7">
                 
                 <form action="" method="GET">
                 <div class="input-group mb-3">
                 <input type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search'];}?>" class="form-control" placeholder="Seach Data" >
                   <button type="submit" class="btn btn-primary">Search</button>
                </div>
                </form>

                </div>

                 </div>
                 </div>
                
                 </div>
              </div>

              <div class="col-md-12">
              <div class="card mt-4">
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
        
         if(isset($_GET['search']))
         {
            $filtervalues =$_GET['search'];
           
            $query = "SELECT * FROM customer WHERE CONCAT(id,email,phone) LIKE '%$filtervalues%' ";
            $query_run = mysqli_query($con, $query);
       

         if(mysqli_num_rows($query_run)>0)
         {
            foreach($query_run as $items)
             {
                ?>
              <tr>
                    <td><?=$items['id'];?></td>
                    <td><?=$items['email'];?></td>
                    <td><?=$items['phone'];?></td>
                </tr>


              <?php
            }
         }
            else
             {
               ?>
                <tr>
                    <td colspan="4">No Record Found</td>
                </tr>

               <?php 
             }

            }
        ?>
                    <tr>
                    <td></td>
                    </tr>
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