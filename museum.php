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
  </head>

  <body id="page-top">
    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.html">Citypedia</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
    </nav>

    <?php
      //database
      $host='mpcs53001.cs.uchicago.edu';
      $username='linxuan';
      $password='1234';
      $database=$username.'DB';
      $con=mysqli_connect($host, $username, $password, $database) or die('Could not connect: ' . mysqli_connect_error());
      
      $state=$_GET['state'];
      $city=$_GET['city'];
      $query="SELECT * FROM Museum WHERE statename='$state' AND cityname='$city'";
      $result=mysqli_query($con, $query) or die('Query failed: '.mysqli_error($con));
    ?>

    <div id="wrapper">
      <ul class="sidebar navbar-nav">
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="overview.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Overview</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="airport.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-table"></i>
            <span>Airport</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="college.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-table"></i>
            <span>College</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" <?php echo 'href="museum.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-table"></i>
            <span>Museum</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="viewpoint.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-table"></i>
            <span>View Point</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="sportteam.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-table"></i>
            <span>Sport Team</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="climate.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-table"></i>
            <span>Climate</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="economics.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Economics</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" <?php echo 'href="population.php?state='.$state.'&'.'city='.$city.'">';?>
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Population</span></a>
        </li>
      </ul>

      <div id="content-wrapper">
        <div class="container-fluid">
          <ol class="breadcrumb">
            <li class="breadcrumb-item active">Museum: <?php print $city.", ".$state; ?></li>
          </ol>
          <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-tachometer-alt"></i>
            Museum Information
            <button type="button" class="btn-sm btn-secondary" onclick=<?php echo '\'location.href="update_museum.php?state='.$state.'&'.'city='.$city.'"\'';?>>Update</button>
            <button type="button" class="btn-sm btn-secondary" onclick=<?php echo '\'location.href="delete_museum.php?state='.$state.'&'.'city='.$city.'"\'';?>>Delete</button>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>City</th>
                    <th>State</th>
                    <th>Museum</th>
                    <th>Type</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    while($row=mysqli_fetch_array($result)){
                        echo "<tr>";
                        echo "<td>".$city."</td>";
                        echo "<td>".$state."</td>";
                        echo "<td>".$row['museumname']."</td>";
                        echo "<td>".$row['type']."</td>";
                        echo "</tr>";
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Powered by MySQL</div>
        </div>
      </div>
     
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Citypedia by Linxuan Xu</span>
            </div>
          </div>
        </footer>
      </div>
    </div>

    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/main.js"></script>
    <script src="js/datatables.js"></script>
  </body>
</html>