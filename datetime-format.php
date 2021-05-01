<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row">
           <div class="col-md-12">

            <?php
            if(isset($_SESSION['status']))
            {
                
                ?>

          <div class="alert alert-warning alert-dismissible fade show" role="alert">
             <strong>Hey!</strong> <?php echo $_SESSION['status']; ?>
             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
                <?php
                 unset($_SESSION['status']);
            }
           
               
            ?>

              <div class="card mt-4">
                 <div class="card-herder">
                    <h4>How to insert to database in php</h4>
                 </div>
                 <div class="card-body">

                   <?php date_default_timezone_set('Asia/Kuala_Lumpur'); ?> 
                 <h4>Current Date: <?= date ('Y-m-d') ?></h4>
                 <h5>C-year: <?= date ('Y') ?></h5>
                 <h5>C-Month: <?= date ('m') ?></h5>
                 <h5>C-Date: <?= date ('d') ?></h5>

                 <hr>

                 <h4>Current Time: <?= date ('h:i:s') ?></h4>
                 <h5>C-Hour: <?= date ('h') ?></h5>
                 <h5>C-Minute: <?= date ('i') ?></h5>
                 <h5>C-second: <?= date ('s') ?></h5>
                 <h5>C-AN/PM: <?= date ('a') ?></h5>

                 <hr>

                 <?php
                 $date="2021-03-25"

                 ?>

                 <h4>Date formet for:<?= $date;?></h4>
                 <h5><?= date('d-m-Y',strtotime($date))?></h5>
                 <h5><?= date('d/m/Y',strtotime($date))?></h5>

                <hr>
                 <?php
                 $time="01:10 PM";
                 ?>

                <h4>Time formet for:<?= $time;?></h4>

                <h5><?= date('h:i:s A',strtotime($time))?></h5>
                <h5><?= date('h:i:s A',time());?></h5>

                <h5>Time for 24 Hour Format:<?= date ('H:i ',) ?></h5>

                
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