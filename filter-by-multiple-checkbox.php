
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello,How to Filter or Find or Search data using Multiple Checkbox in php!</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row">
           <div class="col-md-12">

          
              <div class="card mt-3">
                 <div class="card-herder">
                    <h4>How to Filter or Find or Search data using Multiple Checkbox in php</h4>
                 </div>
                
              </div>
 
    </div>


    <div class="col-md-3">
      <form action="" method="GET">
    
   
     <div class="card shadow mt-3">
     <div class="card-header">
     <h5>Filter
     <button type="submit" class="btn btn-primary btn-sm float-end">Search</button>
     </h5>
     </div>

      <div class="card-body">
      <h6>Brand List</h6>
       <?php
         $con = mysqli_connect("localhost","root","","grabcar");

         $brand_query = "SELECT * FROM demo4";
         $brand_query_run = mysqli_query($con, $brand_query);

         if(mysqli_num_rows($brand_query_run)>0)
         {
             foreach($brand_query_run as $brandlist)
             {
               $checked=[];
               if(isset($_GET['brands']))
               {
                $checked=$_GET['brands'];
               }
              
               ?>
               <div>
               <input type="checkbox" name="brands[]" value="<?= $brandlist['id']; ?>"
               
               <?php if(in_array($brandlist['id'],$checked)){echo "checked" ;} ?>
               /> 
               <?= $brandlist['brands']; ?>
               </div>
               <?php  
             }
         }
             else
             {
                 echo "No brands Found";
             }
     ?>
      <hr>
       </div>
      </div>

      </form>
    </div>

      <!-- Brand Item -Product-->
      <div class="col-md-9 mt-3">
      <div class="card">
      <div class="card-body row">
      <?php 

      if(isset($_GET['brands']))
      {
        $branchecked = [];
        $branchecked = $_GET['brands'];
        foreach($branchecked as $rowbrand)
        {
          // echo $rowbrand;
          $product = "SELECT * FROM demo4_pd WHERE brand_id IN ($rowbrand)";
          $products_run = mysqli_query($con,$product);
          if(mysqli_num_rows($products_run)>0)
             {
             foreach($products_run as $proditems):
              ?>
              <div class="col-md-4  mt-3">
             <div class="border p-2">
             <h6><?=$proditems['name']; ?></h6>
             </div>
              </div>
              <?php
    
             endforeach;
            }
           
        }
      }
      else
      {

      $product = "SELECT * FROM demo4_pd";
      $products_run = mysqli_query($con,$product);
      if(mysqli_num_rows($products_run)>0)
         {
         foreach($products_run as $proditems):
          ?>
          <div class="col-md-4  mt-3">
         <div class="border p-2">
         <h6><?=$proditems['name']; ?></h6>
         </div>
          </div>
          <?php

         endforeach;
        }
        else
        {
            echo "No brands Found";
        }
      }
      ?>
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