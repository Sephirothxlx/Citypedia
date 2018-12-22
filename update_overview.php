<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Citypedia</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <link href="css/index.css" rel="stylesheet">
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.html">Citypedia</a>
    </nav>
    
    <?php
      //database
      $host='mpcs53001.cs.uchicago.edu';
      $username='linxuan';
      $password='1234';
      $database=$username.'DB';
      $con=mysqli_connect($host, $username, $password, $database) or die('Could not connect: ' . mysqli_connect_error().' Click Citypedia to return!');
      
      $state=$_GET['state'];
      $city=$_GET['city'];
      $query="SELECT * FROM City WHERE statename='$state' AND cityname='$city'";
      $result=mysqli_query($con, $query) or die('Query failed, please check if you input a wrong name: '.mysqli_error($con).' Click Citypedia to return!');
      $tuple = mysqli_fetch_array($result) or die("No matched record! Please check if you input correctly." .mysqli_error($dbcon).' Click Citypedia to return!');
    ?>

    <div id="wrapper">
      <div id="content-wrapper">
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Overview: <?php print $city.", ".$state; ?></li>
          </ol>
        </div>
        <script>
            function check(){
                var latitude=document.getElementById("input1").value;
                var longitude=document.getElementById("input2").value;
                var abstract=document.getElementById("input3").value;
                if(latitude==""||longitude==""||abstract==""){
                  alert("Empty Modification is not permitted!");
                  return false;
                }
                if(longitude.length>20||latitude.length>20){
                  alert("Longitude and latitude shouldn't be greater than 20!");
                  return false;
                }
                return true;
            }
        </script>
        <form action="handler/update_city_overview.php" method="post" onsubmit="return check()">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-tachometer-alt"></i>
              Basic Information Modification  <button type="submit" class="btn-sm btn-outline-secondary" type="submit">Update</button></div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <tr>
                    <th>City:</th>
                    <input type="hidden" name="state" value=<?php echo $state;?>>
                    <td><?php echo $city;?></td>
                  </tr>
                  <tr>
                    <th>State:</th>
                    <input type="hidden" name="city" value=<?php echo $city;?>>
                    <td><?php echo $state;?></td>
                  </tr>
                  <tr>
                    <th>Latitude:</th>
                    <td><input id="input1" name="latitude" placeholder="eg: 123.4567N"></td>
                  </tr>
                  <tr>
                    <th>Longitude:</th>
                    <td><input id="input2" name="longitude" placeholder="eg: 123.4567W"></td>
                  </tr>
                  <tr>
                    <th>Abstract:</th>
                    <td><input id="input3" name="abstract" placeholder=""></td>
                  </tr>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Powered by MySQL</div>
          </div>
        </form>
      </div>
    </div>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/main.js"></script>
  </body>
  <footer>
    Citypedia by Linxuan Xu
  </footer>
</html>