
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello,How to Filter Date by PRICE in php MySQL |(Filter Product by PRICE)!</title>
  </head>
  <body>
    
<div class="container">

    <div class="row">
        <div class="col-md-12">

           <div class="card mt-4">

            <div class="card-herder">
                    <h4>How to Filter Date by PRICE in php MySQL |(Filter Product by PRICE)</h4>
             </div>
                <div class="card-body">

                <form action="" method="GET">

                <div class="row">

                <div class="col-md-4">
                <label for="">Start Price</label>
                <input type="text" name="start_price" value="<?php if(isset($_GET['start_price'])){echo $_GET['start_price']; }else{echo "100";}?>" class="from-control">
                </div>

                <div class="col-md-4">
                <label for="">End Price</label>
                <input type="text" name="end_price" value="<?php if(isset($_GET['end_price'])){echo $_GET['end_price']; }else{echo "100";}?>" class="from-control">
                </div>

                <div class="col-md-4">
                <label for="">Click Me</label><br>
                <button type="submit" class="btn btn-primary">Filter</button>
                </div>

                </div>

                </form>

                </div>
             </div>
        </div>

        <div class="col-md-12">
        <div class="card">
        <div class="card-header">
        <h5>Product Detail</h5>
        </div>
        <div class="card-body">
        <div class="row">
        <?php 
         $con = mysqli_connect("localhost","root","","grabcar");
        
         if(isset($_GET['start_price']) && isset($_GET['end_price']))
         {
            $startprice =$_GET['start_price'];
            $endprice =$_GET['end_price'];

            $query = "SELECT * FROM demo4_pd WHERE price BETWEEN $startprice AND $endprice";
         }
         else
         {
            $query = "SELECT * FROM demo4_pd";
         }

        
         $query_run = mysqli_query($con, $query);

         if(mysqli_num_rows($query_run)>0)
         {
             foreach($query_run as $items)
             {
                ?>
              <div class="col-md-4 mb-3">
              <div class="border p-2">
              <h5><?php echo $items['name']; ?></h5>
              <h6>PRICE: <?php echo $items['price']; ?></h6>

              </div>
              </div>

              <?php
            }
         }
            else
             {
                 echo "No Record Found";
             }
        ?>
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