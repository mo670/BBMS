<?php include_once('./config.php'); 

  include_once('guard.php');
?>
<!DOCTYPE html>
<html lang="en">
  <?php
  include_once('./elements/head.php');
  ?>


    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"> -->
    <!-- <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">  --> 
    <link rel="stylesheet" href="dashboard.css">

    <title>Patient dashboard </title>
  </head>
  <body>
    <?php
    include_once('./elements/p_sidebar.php');
    ?>


<div class= "container" style="padding: 40px;display:flex ">
                    <div class="card-body">
                        <h5 class="card-title"> Request Made</h5>
                        <p class="card-text">The list of people who are requested for blood</p>
                        <a href="#" class="btn btn-primary">View List</a>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Pending Request</h5>
                        <p class="card-text">The list of people whose requests are pending</p>
                        <a href="#" class="btn btn-primary">View List</a>
                    </div>
   
                    <div class="card-body">
                        <h5 class="card-title">Approved Request</h5>
                        <p class="card-text">The list of people who are approved getting blood</p>
                        <a href="#" class="btn btn-primary">View List</a>
                    </div>

                    <div class="card-body">
                        <h5 class="card-title">Rejected Request</h5>
                        <p class="card-text">The list of people whose requests are rejected</p>
                        <a href="#" class="btn btn-primary">View List</a>
                      </div>
        
                    </div>
                    <hr>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  <?php
  include_once('./elements/footer.php');
  ?>

  </body>
</html>