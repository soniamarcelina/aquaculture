
    <!-- memanggil data antares -->
    <?php
    error_reporting(0);

      include('antares-php.php');
      $antares = new antares_php();
      $antares->set_key('89992da001a0228b:e5bd085df2cd162d');

      // $datetime = $_POST["datetime"];
      // $subs = $_POST["subs"];
      // $newSubs = $_POST["newSubs"];

      // $yourdata = $antares->get('Wifi_DO_SUHU', 'Aquaculture');
      // $yourdata2 = $antares->get('Wifi_DO', 'Aquaculture');
      $limit = 2;
      $yourlimit = $antares->get_limit($limit, 'Wifi_DO_SUHU', 'Aquaculture');

      // $antares->send($datasend,'Wifi', 'Aquaculture'); 

      if(array_key_exists('limit', $_POST)) { 
        $limit = $_POST["limit"];
        $yourlimit = $antares->get_limit($limit,'Wifi','Aquaculture');
      }
      else if (array_key_exists('limit2', $_POST)) { 
        $limit2 = $_POST["limit2"];
        $dscAllDataIDLimit = $antares->dscAllDataIDLimit($limit2,'Wifi','Aquaculture');
      }
      ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>ARTEMIS</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <!-- memanggil data grafik -->
    <script type="text/javascript">
      var refreshid= setInterval(function(){
        $('#responsecontainer').load('data.php');
      }, 1000);
    </script>

  </head>
  <body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
      <!-- Sidebar -->
      <ul class="navbar-nav bg-gradient-info sidebar sidebar-dark accordion" id="accordionSidebar">
        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
          <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
          </div>
          <div class="sidebar-brand-text mx-3">ARTEMIS</div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0" />

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
          <a class="nav-link" href="dashboard.php">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider" />

        <!-- Heading -->
        <div class="sidebar-heading">Interface</div>

        <!-- Nav Item - Pages Collapse Menu -->
        <!-- <li class="nav-item">
          <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
          </a>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
              <h6 class="collapse-header">Custom Components:</h6>
              <a class="collapse-item" href="buttons.html">Buttons</a>
              <a class="collapse-item" href="cards.html">Cards</a>
            </div>
          </div>
        </li> -->


        <!-- Divider -->
        <hr class="sidebar-divider" />   
        

        <!-- Nav Item - Charts -->
        <li class="nav-item">
          <a class="nav-link" href="../grafiksensor/index.php">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Grafik</span></a
          >
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="setpoin.php">
            <i class="fas fa-fw fa-table"></i>
            <span>Set Poin</span></a
          >
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block" />

        <!-- Sidebar Toggler (Sidebar) -->
        <div class="text-center d-none d-md-inline">
          <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div>
   
      </ul>
      <!-- End of Sidebar -->

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
            <!-- Sidebar Toggle (Topbar) -->
            <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <div class="topbar-divider d-none d-sm-block">
              </div>

              <!-- Nav Item - User Information --> 
              <li class="nav-item dropdown no-arrow">
                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <span class="mr-2 d-none d-lg-inline text-gray-600 small">Johanes</span>
                  <img class="img-profile rounded-circle" src="img/undraw_profile.svg" />
                </a>
                <!-- Dropdown - User Information -->
                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                    Profile
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- Begin Page Content -->
          <div class="container-fluid">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
              <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
              <h6>Tanggal : <?php
                          foreach ($yourlimit as $key => $value) {
                            echo $value["formatDate"];
                          }
                        ?> </h6> 
                        <h6> Waktu : <?php
                          foreach ($yourlimit as $key => $value) {
                            echo $value["formatTime"];
                          }
                        ?> </h6>

              <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
            </div> 

            <!-- Content Row -->
            <div class="row">
              <!-- Card Suhu -->
              <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-primary text-uppercase text-center mb-3">Suhu Kolam Artificial</div>
                        <hr>
                        <div class="row row-col-auto ">
                          <div class="col-8 col-sm-6 font-weight-bold text-danger">Ruangan</div>
                          <div class="col-8 col-sm-6 font-weight-bold text-danger">Air Kolam</div>
                          <br>
                          <br>
                          <div class="col-8 col-sm-6 font-weight-bold text-gray-800">
                          <?php
                          foreach ($yourlimit as $key => $value) {
                            echo $value["Suhu B Luar"];
                          }
                        ?> 
                          </div>
                          <div class="col-8 col-sm-6 font-weight-bold text-gray-800">
                          <?php
                          foreach ($yourlimit as $key => $value) {
                            echo $value["Suhu B Air 1"];
                          }
                        ?>
                          </div>
                        </div>
                        
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Card DO -->
              <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                        <div class="text-xl font-weight-bold text-success text-uppercase text-center mb-3">Dissolve Oxygen (Mg/L)</div>
                        <hr>
                        <div class="h5 mb-0 font-weight-bold text-gray-800 text-center">
                        <?php
                          foreach ($yourlimit as $key => $value) {
                            echo $value["DO (Mg/L)"];
                          }
                        ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!--  Card pH -->
              <div class="col-xl-4 col-md-8 mb-4">
                <div class="card border-left-info shadow h-100 py-2">
                  <div class="card-body">
                    <div class="row no-gutters align-items-center">
                      <div class="col mr-2">
                      <div class="text-xl font-weight-bold text-info text-uppercase text-center mb-3">Suhu Kolam Alami</div>
                        <hr>
                        <div class="row row-col-auto ">
                        <div class="col-8 col-sm-6 font-weight-bold text-warning">Luar</div>
                        <div class="col-8 col-sm-6 font-weight-bold text-warning">Air Kolam</div>
                        <div class="row row-center ">
                        <div class="col-8 col-sm-6 font-weight-bold text-gray-800">
                          <?php
                          foreach ($yourlimit as $key => $value) {
                            echo $value["Suhu Alami Luar"];
                          }
                        ?> 
                          </div>
                          <div class="col-8 col-sm-6 font-weight-bold text-gray-800">
                          <?php
                          foreach ($yourlimit as $key => $value) {
                            echo $value["Suhu Alami Air"];
                          }
                        ?>
                          </div>
                        </div>
                        </div>
                        
                          </div>
                        </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Content Grafik -->
              <!-- <div>
                <div class="container" id="responsecontainer" style="width: 80%; text-align: center">
                </div>
              </div> -->

              <div class="text-center">
                <img src="desain.jpg" class="rounded" alt="desain">
              </div>
              <br>

              <!-- Grafik bootstrap -->
              <div class="container">
              <!-- Area Chart -->
              <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                  <!-- Card Header - Dropdown -->
                  <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Grafik Sensor</h6>
                    <div class="dropdown no-arrow">
                      <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                      </a>
                      <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                      <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                        <div class="dropdown-header">Dropdown Header:</div>
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                      </div>
                    </div>
                  </div>

                  <!-- Body Grafik -->
                  <div class="card-body">
                    <div class="chart-area">
                      <canvas id="myAreaChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>

              <div class="container">
              <!-- Content Set Up -->
              <div class="row">
                <!-- Content Column -->
                <div class="col-lg-4 mb-7">
                  <!-- Set Up Suhu -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Set Up Suhu</h6>
                    </div>
                    <div class="card-body">
                    <div class="text-center">
                        <input type="text"></input>
                        <input type="submit" value="SET UP"></input>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 mb-4">
                  <!-- SEt Up DO -->
                  <div class="card shadow mb-4">
                    <div class="card-header py-3">
                      <h6 class="m-0 font-weight-bold text-primary">Set Up DO</h6>
                    </div>
                    <div class="card-body">
                      <div class="text-center">
                        <input type="text"></input>
                        <input type="submit" value="SET UP"></input>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
                        </div>
          <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->

        <!-- Footer -->
        <footer class="sticky-footer bg-white">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright &copy; Smart Aquaculture 2021</span>
            </div>
          </div>
        </footer>
        <!-- End of Footer -->
      </div>
      <!-- End of Content Wrapper -->
    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.php"></script>
    <script src="js/demo/chart-pie-demo.js"></script>
  </body>
</html>
