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
      $state=$_GET['state'];
      $city=$_GET['city'];
    ?>

    <div id="wrapper">
      <div id="content-wrapper">
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Airport: <?php print $city.", ".$state; ?></li>
          </ol>
        </div>
        <script>
            function check(){
                var airport=document.getElementById("input1").value;
                if(airport==""){
                  alert("Empty Modification is not permitted!");
                  return false;
                }
                if(airport.length>60){
                  alert("Name shouldn't be greater than 60!");
                  return false;
                }
                return true;
            }
        </script>
        <form action="handler/update_city_airport.php" method="post" onsubmit="return check()">
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-tachometer-alt"></i>
              Update or add airport  <button type="submit" class="btn-sm btn-outline-secondary" type="submit">Change</button></div>
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
                    <th>Airport:</th>
                    <td><input id="input1" name="airport"></td>
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