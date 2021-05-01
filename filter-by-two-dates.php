
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, How to Filter or Find or Get data (records) between TWO DATEs in php!</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row justify-content-center">
           <div class="col-md-8">

          
              <div class="card mt-5">
                 <div class="card-herder">
                    <h4>How to Filter or Find or Get data (records) between TWO DATEs in php</h4>
                 </div>
                 <div class="card-body">
                 
                 <form action="" method="GET">
                   <div class="row">

                   <div class="col-md-4">
                   <div class="form-group">
                 <label for="">From Date </label>
                 <input type="date" name="from_date" value="<?php if(isset($_GET['from_date'])){echo $_GET['from_date'];} ?>" class="form-control"/>
                 </div>
                 </div>

                 <div class="col-md-4">
                 <div class="form-group">
                 <label for="">To Date</label>
                 <input type="date" name="to_date" value="<?php if(isset($_GET['to_date'])){echo $_GET['to_date'];} ?>" class="form-control"/>
                 </div>
                 </div>

                 <div class="col-md-4">
                 <div class="form-group">
                 <label for="">Click to Filter</label>
                 <button type="submit" class="btn btn-primary">Filter</button>
                 </div>
                 </div>
                   </div>
                    
                

                 </form>
                 </div>
              </div>

              <div class="card">
              <div class="card-body">
              <table class="table table-borderd">
              <thead>
              <tr>
              <th>ID</th>
              <th>First Name</th>
              <th>Lat Name</th>
              </tr>
              </thead>
              <tbody>
              
              <?php
             $con = mysqli_connect("localhost","root","","grabcar");

             if(isset($_GET['from_date']) && isset($_GET['to_date']))
             {
                 $from_date=$_GET['from_date'];
                 $to_date=$_GET['to_date'];

                 $query = "SELECT * FROM employees WHERE created_at BETWEEN '$from_date' AND '$to_date' ";
                 $query_run = mysqli_query($con, $query);

                 if(mysqli_num_rows($query_run)>0)
                 {
                     foreach($query_run as $row)
                     {
                        //  echo $row['name'];
                        ?>
                       <tr>
                         <td><?= $row['id'] ; ?></td>
                          <td><?= $row['name'] ; ?></td>
                          <td><?= $row['id'] ; ?></td>
                       </tr>
                        <?php
                     }
                 
                  }
                    else
                    {
                        echo "No Record Found";
                     }
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