<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Statistique Travail</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
        </div>
        <img src="img/logo.jpg" style="width: 12%; position: absolute; top: 1.6%; left: 2.5%;">
      </a>
      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
  <a class="nav-link" href="index.php">
    <i class="fas fa-fw fa-tachometer-alt"></i>
    <span>Dashboard</span></a>
</li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      
<li class="nav-item">
  <a class="nav-link" href="register.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span>Tout les employer</span></a>
</li>

<li class="nav-item">
  <a class="nav-link" href="register.php">
    <i class="fas fa-fw fa-chart-area"></i>
    <span> Profile Administrateur</span></a>
</li>
      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
  <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
    <i class="fas fa-fw fa-cog"></i>
    <span>Statistiqes</span>
  </a>
  <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    <div class="bg-danger py-2 collapse-inner rounded">
      <h6 class="collapse-header">Statistiques selon:</h6>
      <a class="collapse-item" href="travail1.php">Le service</a>
      <a class="collapse-item" href="semaine1.php">Le Semaine</a>
      <a class="collapse-item" href="annee1.php">L'annee</a>
      <a class="collapse-item" href="mois1.php">Le mois</a>
      <a class="collapse-item" href="eai.php">Site</a>
      <a class="collapse-item" href="tranche1.php">Le la tranche d'age</a>
      <a class="collapse-item" href="tranche1.php">Le la tranche d'age et service</a>
    </div>
  </div>
</li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item active">
        <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse show" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-danger py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item active" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>


      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

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

          <!-- Topbar Search -->
          <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form>

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
            <li class="nav-item dropdown no-arrow d-sm-none">
              <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-search fa-fw"></i>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                <form class="form-inline mr-auto w-100 navbar-search">
                  <div class="input-group">
                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                      <button class="btn btn-primary" type="button">
                        <i class="fas fa-search fa-sm"></i>
                      </button>
                    </div>
                  </div>
                </form>
              </div>
            </li>

            <!-- Nav Item - Alerts -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
              </a>
              <!-- Dropdown - Alerts -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                  Alerts Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-primary">
                      <i class="fas fa-file-alt text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 12, 2019</div>
                    <span class="font-weight-bold">A new monthly report is ready to download!</span>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-success">
                      <i class="fas fa-donate text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 7, 2019</div>
                    $290.29 has been deposited into your account!
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="mr-3">
                    <div class="icon-circle bg-warning">
                      <i class="fas fa-exclamation-triangle text-white"></i>
                    </div>
                  </div>
                  <div>
                    <div class="small text-gray-500">December 2, 2019</div>
                    Spending Alert: We've noticed unusually high spending for your account.
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
              </div>
            </li>

            <!-- Nav Item - Messages -->
            <li class="nav-item dropdown no-arrow mx-1">
              <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-envelope fa-fw"></i>
                <!-- Counter - Messages -->
                <span class="badge badge-danger badge-counter">7</span>
              </a>
              <!-- Dropdown - Messages -->
              <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                <h6 class="dropdown-header">
                  Message Center
                </h6>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div class="font-weight-bold">
                    <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                    <div class="small text-gray-500">Emily Fowler · 58m</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                    <div class="status-indicator"></div>
                  </div>
                  <div>
                    <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                    <div class="small text-gray-500">Jae Chun · 1d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                    <div class="status-indicator bg-warning"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                    <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                  </div>
                </a>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <div class="dropdown-list-image mr-3">
                    <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                    <div class="status-indicator bg-success"></div>
                  </div>
                  <div>
                    <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                    <div class="small text-gray-500">Chicken the Dog · 2w</div>
                  </div>
                </a>
                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
              </div>
            </li>

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Valerie Luna</span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="#">
                  <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                  Profile
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="#">
                  <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                  Activity Log
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
        

                    
                   
                <!-- Begin Page Content -->
                 
                <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Statistique des accidents selon les unités de travail/section </h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">    
                                
                                <table class="table table-bordered" id="dataTable" width="50%" cellspacing="0">
                            
                                <tbody>
    
                                        <tr>
                                        <td rowspan="2">Unité de travail


                                        </td>
                                        <td colspan="2">Dabou</td>
                                        <td colspan="2">Eloka</td>
                                        <td colspan="2">Anguededou</td>
                                        <td colspan="2">Total</td>
                                        </tr>
                                        <tr>
                                        <td>2017</td>
                                        <td>2018</td>
                                        <td>2017</td>
                                        <td>2018</td>
                                        <td>2017</td>
                                        <td>2018</td>
                                        <td>2017</td>
                                        <td>2018</td>
                                        </tr>
                                        <tr>
                                            <td rowspan='16'>AS</td>
                                        </tr>
                                        <tr>
                                        <td>Platation</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Garage</td>
                                        <td>55</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        
                                        </tr>
                                        <tr>
                                        <td>Intrastructure</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Huilerie</td>
                                        <td>AS</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Santé au travail</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Sureté au travail</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Administration</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Prévention QRSE</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Logistique</td>
                                        <td>55</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Magasin</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Batiment</td>
                                        <td>AS</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Jardinage</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Laboratoire</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Habitat</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Total</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                            <td rowspan='16'>AH</td>
                                        </tr>
                                        <td>Platation</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Garage</td>
                                        <td>55</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        
                                        </tr>
                                        <tr>
                                        <td>Intrastructure</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Huilerie</td>
                                        <td>AS</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Santé au travail</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Sureté au travail</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Administration</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Prévention QRSE</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Logistique</td>
                                        <td>55</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Magasin</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Batiment</td>
                                        <td>AS</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>32</td>
                                        
                                        </tr>
                                        <tr>
                                        <td>Jardinage</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Laboratoire</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Habitat</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                        <tr>
                                        <td>Total</td>
                                        <td>45</td>
                                        <td>32</td>
                                        <td>52</td>
                                        <td>2</td>
                                        <td>4</td>
                                        <td>7</td>
                                        <td>7</td>
                                        <td>32</td>
                                        </tr>
                                    </tbody>
                        </table>
        </div>
    </div>
</div>

</div>
<!-- /.container-fluid -->
 
                        <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
          </div>
        </div>
      </footer>
                            </div>
                        </div>
                    </div>

                </div>
    
        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
       
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

</body>

</html>
