<?php
session_start();
if (isset($_GET['logout'])) {
session_destroy();
unset($_SESSION['username']);
include('../../dbcon.php');
?>
<script>
location.replace("../../../../index.html");
</script>
<?php
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Referrals</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="../../assets/vendors/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="../../assets/vendors/flag-icon-css/css/flag-icon.min.css">
  <link rel="stylesheet" href="../../assets/vendors/css/vendor.bundle.base.css">
  <link rel="stylesheet" href="dashboard_register.css">
  <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

  <!-- endinject -->
  <!-- Plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <!-- endinject -->
  <!-- Layout styles -->
  <link rel="stylesheet" href="../../assets/css/style.css">
  <!-- End layout styles -->

  <link rel="shortcut icon" href="../../assets/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
      <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
        <a class="navbar-brand brand-logo" href="index.php"><h4 style="color:whitesmoke">Intern Dashboard</h4></a>
        <a class="navbar-brand brand-logo-mini" href="../../index.php"><img src="../../assets/images/logo-mini.svg"
            alt="logo" /></a>
      </div>
      <div class="navbar-menu-wrapper d-flex align-items-stretch">
        <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
          <span class="mdi mdi-menu"></span>
        </button>
     <!--   <div class="search-field d-none d-xl-block">
          <form class="d-flex align-items-center h-100" action="#">
            <div class="input-group">
              <div class="input-group-prepend bg-transparent">
                <i class="input-group-text border-0 mdi mdi-magnify"></i>
              </div>
              <input type="text" class="form-control bg-transparent border-0" placeholder="Search products">
            </div>
          </form>
        </div>-->
        <ul class="navbar-nav navbar-nav-right">
          <!-- <li class="nav-item  dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false"> Reports </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-file-pdf mr-2"></i>PDF </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-file-excel mr-2"></i>Excel </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-file-word mr-2"></i>doc </a>
            </div>
          </li> 
          <li class="nav-item  dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false"> Projects </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-eye-outline mr-2"></i>View Project </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <i class="mdi mdi-pencil-outline mr-2"></i>Edit Project </a>
            </div>
          </li> -->


          <li class="nav-item d-none d-md-block">
            <a class="nav-link" id="projectDropdown" href="http://localhost/portal/niitportal/forum/community/recent"
              aria-expanded="false">
              Forum</a>

          </li>
        
          <!-- <li class="nav-item nav-language dropdown d-none d-md-block">
            <a class="nav-link dropdown-toggle" id="languageDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <div class="nav-language-icon">
                <i class="flag-icon flag-icon-us" title="us" id="us"></i>
              </div>
              <div class="nav-language-text">
                <p class="mb-1 text-black">English</p>
              </div>
            </a>
            <div class="dropdown-menu navbar-dropdown" aria-labelledby="languageDropdown">
              <a class="dropdown-item" href="#">
                <div class="nav-language-icon mr-2">
                  <i class="flag-icon flag-icon-ae" title="ae" id="ae"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">Arabic</p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">
                <div class="nav-language-icon mr-2">
                  <i class="flag-icon flag-icon-gb" title="GB" id="gb"></i>
                </div>
                <div class="nav-language-text">
                  <p class="mb-1 text-black">English</p>
                </div>
              </a>
            </div>
          </li> -->
          <li class="nav-item nav-profile dropdown">
            <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <div class="nav-profile-img">
                <img src="../../assets/images/faces/face28.png" alt="image">
              </div>
              <div class="nav-profile-text">
                <?php  if (isset($_SESSION['username'])) : 
                  $fullname = $_SESSION['username']." ".$_SESSION['username_lastname'];
                  ?>
                  
                  <p class="mb-1 text-black" id="Intern"> Welcome <strong><?php  echo $fullname;?></strong></p>
                  <?php endif ?>
                </div>
            </a>
            <div class="dropdown-menu navbar-dropdown dropdown-menu-right p-0 border-0 font-size-sm"
              aria-labelledby="profileDropdown" data-x-placement="bottom-end">
              <div class="p-3 text-center bg-primary">
                <img class="img-avatar img-avatar48 img-avatar-thumb" src="../../assets/images/faces/face28.png" alt="">
              </div>
              <div class="p-2">
              <!--  <h5 class="dropdown-header text-uppercase pl-2 text-dark">User Options</h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Inbox</span>
                  <span class="p-0">
                    <span class="badge badge-primary">3</span>
                    <i class="mdi mdi-email-open-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Profile</span>
                  <span class="p-0">
                    <span class="badge badge-success">1</span>
                    <i class="mdi mdi-account-outline ml-1"></i>
                  </span>
                </a>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                  href="javascript:void(0)">
                  <span>Settings</span>
                  <i class="mdi mdi-settings"></i>
                </a>
                <div role="separator" class="dropdown-divider"></div>
                <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" href="#">
                  <span>Lock Account</span>
                  <i class="mdi mdi-lock ml-1"></i>
                </a> -->
                <a class="dropdown-item py-1 d-flex align-items-center justify-content-between" a href="../../index.php?logout='1'">
                    <span>Log Out</span>
                    <i class="mdi mdi-logout ml-1"></i>
                  </a>
              </div>
            </div>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="messageDropdown" href="#" data-toggle="dropdown"
              aria-expanded="false">
              <i class="mdi mdi-email-outline"></i>
              <span class="count-symbol bg-success"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="messageDropdown">
              <h6 class="p-3 mb-0 bg-primary text-white py-4">Messages</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../assets/images/faces/face4.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Mark send you a message</h6>
                  <p class="text-gray mb-0"> 1 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../assets/images/faces/face2.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Cregh send you a message</h6>
                  <p class="text-gray mb-0"> 15 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <img src="../../assets/images/faces/face3.jpg" alt="image" class="profile-pic">
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject ellipsis mb-1 font-weight-normal">Profile picture updated</h6>
                  <p class="text-gray mb-0"> 18 Minutes ago </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">4 new messages</h6>
            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link count-indicator dropdown-toggle" id="notificationDropdown" href="#"
              data-toggle="dropdown">
              <i class="mdi mdi-bell-outline"></i>
              <span class="count-symbol bg-danger"></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list"
              aria-labelledby="notificationDropdown">
              <h6 class="p-3 mb-0 bg-primary text-white py-4">Notifications</h6>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-success">
                    <i class="mdi mdi-calendar"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Event today</h6>
                  <p class="text-gray ellipsis mb-0"> Just a reminder that you have an event today </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-warning">
                    <i class="mdi mdi-settings"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Settings</h6>
                  <p class="text-gray ellipsis mb-0"> Update dashboard </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item preview-item">
                <div class="preview-thumbnail">
                  <div class="preview-icon bg-info">
                    <i class="mdi mdi-link-variant"></i>
                  </div>
                </div>
                <div class="preview-item-content d-flex align-items-start flex-column justify-content-center">
                  <h6 class="preview-subject font-weight-normal mb-1">Launch Admin</h6>
                  <p class="text-gray ellipsis mb-0"> New admin wow! </p>
                </div>
              </a>
              <div class="dropdown-divider"></div>
              <h6 class="p-3 mb-0 text-center">See all notifications</h6>
            </div>
          </li>
        </ul>
        <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
          data-toggle="offcanvas">
          <span class="mdi mdi-menu"></span>
        </button>
      </div> -->
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item">
            <a class="nav-link" href="../../index.php">
              <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
     <!--    <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="icon-bg"><i class="mdi mdi-crosshairs-gps menu-icon"></i></span>
              <span class="menu-title">UI Elements</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/buttons.html">Buttons</a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/dropdowns.html">Dropdowns</a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/ui-features/typography.html">Typography</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/icons/mdi.html">
              <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
              <span class="menu-title">Icons</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="../../pages/forms/basic_elements.html">
              <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
              <span class="menu-title">Forms</span>
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="../charts/chartjs.php">
              <span class="icon-bg"><i class="mdi mdi-chart-bar menu-icon"></i></span>
              <span class="menu-title">Attendance</span>
            </a>
          </li>!-->
      <!--      <li class="nav-item">
              <a class="nav-link" href="../../pages/tables/basic-table.html">
                <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
                <span class="menu-title">Projects</span>
              </a>
            </li>-->
          <li class="nav-item">
            <a class="nav-link" href="../../pages/tables/course_register.php">
              <span class="icon-bg"><i class="mdi mdi-table-large menu-icon"></i></span>
              <span class="menu-title">Referral List</span>
            </a>
          </li>
        <!--  <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
              <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
              <span class="menu-title">User Pages</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="auth">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/blank-page.html"> Blank Page </a>
                </li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/login.html"> Login </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/register.html"> Register </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-404.html"> 404 </a></li>
                <li class="nav-item"> <a class="nav-link" href="../../pages/samples/error-500.html"> 500 </a></li>
              </ul>
            </div>
          </li>
          
          <li class="nav-item documentation-link">
            <a class="nav-link"
              href="http://www.bootstrapdash.com/demo/connect-plus-free/jquery/documentation/documentation.html"
              target="_blank">
              <span class="icon-bg">
                <i class="mdi mdi-file-document-box menu-icon"></i>
              </span>
              <span class="menu-title">Documentation</span>
            </a>
          </li>
          
          <li class="nav-item sidebar-user-actions">
            <div class="user-details">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <div class="d-flex align-items-center">
                    <div class="sidebar-profile-img">
                      <img src="../../assets/images/faces/face28.png" alt="image">
                    </div>
                    <div class="sidebar-profile-text">
                      <p class="mb-1">Henry Klein</p>
                    </div>
                  </div>
                </div>
                <div class="badge badge-danger">3</div>
              </div>
            </div>
          </li>
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="#" class="nav-link"><i class="mdi mdi-settings menu-icon"></i>
                <span class="menu-title">Settings</span>
              </a>
            </div>
          </li>-->
         <!-- 
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="#" class="nav-link"><i class="mdi mdi-speedometer menu-icon"></i>
                <span class="menu-title">Take Tour</span></a>
            </div>
          </li> -->
          <li class="nav-item sidebar-user-actions">
            <div class="sidebar-user-menu">
              <a href="../../index.php?logout='1'" class="nav-link"><i class="mdi mdi-logout menu-icon"></i>
                <span class="menu-title">Log Out</span></a>
            </div>
          </li>
        </ul>
      </nav>
      <!-- partial -->
      <div class="main-panel">
         <div class="content-wrapper">
          <div class="page-header">
            <h3 class="page-title"> Referral List </h3>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Tables</a></li>
                <li class="breadcrumb-item active" aria-current="page">Basic tables</li>
              </ol>
            </nav>
          </div>
          <div class="row">
          <!--  <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Basic Table</h4>
                  <p class="card-description"> Add class <code>.table</code>
                  </p>
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Profile</th>
                        <th>VatNo.</th>
                        <th>Created</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob</td>
                        <td>53275531</td>
                        <td>12 May 2017</td>
                        <td><label class="badge badge-danger">Pending</label></td>
                      </tr>
                      <tr>
                        <td>Messsy</td>
                        <td>53275532</td>
                        <td>15 May 2017</td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>53275533</td>
                        <td>14 May 2017</td>
                        <td><label class="badge badge-info">Fixed</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>53275534</td>
                        <td>16 May 2017</td>
                        <td><label class="badge badge-success">Completed</label></td>
                      </tr>
                      <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td>20 May 2017</td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 

            <div class="col-lg-6 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Hoverable Table</h4>
                  <p class="card-description"> Add class <code>.table-hover</code>
                  </p>
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th>User</th>
                        <th>Product</th>
                        <th>Sale</th>
                        <th>Status</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>Jacob</td>
                        <td>Photoshop</td>
                        <td class="text-danger"> 28.76% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-danger">Pending</label></td>
                      </tr>
                      <tr>
                        <td>Messsy</td>
                        <td>Flash</td>
                        <td class="text-danger"> 21.06% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                      <tr>
                        <td>John</td>
                        <td>Premier</td>
                        <td class="text-danger"> 35.00% <i class="mdi mdi-arrow-down"></i></td>
                        <td><label class="badge badge-info">Fixed</label></td>
                      </tr>
                      <tr>
                        <td>Peter</td>
                        <td>After effects</td>
                        <td class="text-success"> 82.00% <i class="mdi mdi-arrow-up"></i></td>
                        <td><label class="badge badge-success">Completed</label></td>
                      </tr>
                      <tr>
                        <td>Dave</td>
                        <td>53275535</td>
                        <td class="text-success"> 98.05% <i class="mdi mdi-arrow-up"></i></td>
                        <td><label class="badge badge-warning">In progress</label></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Striped Table</h4>
                  <p class="card-description"> Add class <code>.table-striped</code>
                  </p>
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th> User </th>
                        <th> First name </th>
                        <th> Progress </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td class="py-1">
                          <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                        </td>
                        <td> Herman Beck </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                        </td>
                        <td> Messsy Adam </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $245.30 </td>
                        <td> July 1, 2015 </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                        </td>
                        <td> John Richards </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                              aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $138.00 </td>
                        <td> Apr 12, 2015 </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../assets/images/faces-clipart/pic-4.png" alt="image" />
                        </td>
                        <td> Peter Meggik </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                              aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../assets/images/faces-clipart/pic-1.png" alt="image" />
                        </td>
                        <td> Edward </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 160.25 </td>
                        <td> May 03, 2015 </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../assets/images/faces-clipart/pic-2.png" alt="image" />
                        </td>
                        <td> John Doe </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 123.21 </td>
                        <td> April 05, 2015 </td>
                      </tr>
                      <tr>
                        <td class="py-1">
                          <img src="../../assets/images/faces-clipart/pic-3.png" alt="image" />
                        </td>
                        <td> Henry Tom </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                              aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 150.00 </td>
                        <td> June 16, 2015 </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Bordered table</h4>
                  <p class="card-description"> Add class <code>.table-bordered</code>
                  </p>
                  <table class="table table-bordered">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> First name </th>
                        <th> Progress </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1 </td>
                        <td> Herman Beck </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 25%"
                              aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td> 2 </td>
                        <td> Messsy Adam </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 75%" aria-valuenow="75"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $245.30 </td>
                        <td> July 1, 2015 </td>
                      </tr>
                      <tr>
                        <td> 3 </td>
                        <td> John Richards </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 90%"
                              aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $138.00 </td>
                        <td> Apr 12, 2015 </td>
                      </tr>
                      <tr>
                        <td> 4 </td>
                        <td> Peter Meggik </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 50%"
                              aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td> 5 </td>
                        <td> Edward </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 35%" aria-valuenow="35"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 160.25 </td>
                        <td> May 03, 2015 </td>
                      </tr>
                      <tr>
                        <td> 6 </td>
                        <td> John Doe </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-info" role="progressbar" style="width: 65%" aria-valuenow="65"
                              aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 123.21 </td>
                        <td> April 05, 2015 </td>
                      </tr>
                      <tr>
                        <td> 7 </td>
                        <td> Henry Tom </td>
                        <td>
                          <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 20%"
                              aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                          </div>
                        </td>
                        <td> $ 150.00 </td>
                        <td> June 16, 2015 </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> -->
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Referral List</h4>
                  <table class="table table-dark">
                    <thead>
                      <tr>
                        <th> # </th>
                        <th> First name </th>
                        <th> Amount </th>
                        <th> Deadline </th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td> 1 </td>
                        <td> Herman Beck </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td> 2 </td>
                        <td> Messsy Adam </td>
                        <td> $245.30 </td>
                        <td> July 1, 2015 </td>
                      </tr>
                      <tr>
                        <td> 3 </td>
                        <td> John Richards </td>
                        <td> $138.00 </td>
                        <td> Apr 12, 2015 </td>
                      </tr>
                      <tr>
                        <td> 4 </td>
                        <td> Peter Meggik </td>
                        <td> $ 77.99 </td>
                        <td> May 15, 2015 </td>
                      </tr>
                      <tr>
                        <td> 5 </td>
                        <td> Edward </td>
                        <td> $ 160.25 </td>
                        <td> May 03, 2015 </td>
                      </tr>
                      <tr>
                        <td> 6 </td>
                        <td> John Doe </td>
                        <td> $ 123.21 </td>
                        <td> April 05, 2015 </td>
                      </tr>
                      <tr>
                        <td> 7 </td>
                        <td> Henry Tom </td>
                        <td> $ 150.00 </td>
                        <td> June 16, 2015 </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div> 
      <!--  <div class="col-lg-12 stretch-card">
          <div class="card">
            <div class="card-body">
              <h4 class="card-title">Courses</h4>
              <div style="overflow-x: auto; overflow-x: auto;">
              <table class="table table-bordered" id="CourseTable" >
                <thead>
                  <tr>
                    <th> # </th>
                    <th> Course Name </th>
                    <th> Amount </th>
                    <th> Registration </th>
                  </tr>
                </thead>
                <tbody>
                  <tr class="table-info">
                    <td> 1 </td>
                    <td class="course-name">Python With Data Science</td>
                    <td class="course-price"><strong> Rs 4500 </strong></td>
                    <td class="registertab"><a href="#" class="primary-btn register " data-toggle="modal" data-target="#exampleModal" id="PDS">Register  </td>
                  </tr>
                  <tr class="table-warning">
                    <td> 2 </td>
                    <td class="course-name">Python With Artificial Intelligence</td>
                    <td class="course-price"><strong> Rs 4000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register PAI" data-toggle="modal" data-target="#exampleModal" id="PAI">Register  </td>
                  </tr>
                  <tr class="table-danger">
                    <td> 3 </td>
                    <td class="course-name">Artificial Intelligence With Machine Learning</td>
                    <td class="course-price"><strong> Rs 5000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register AIML" data-toggle="modal" data-target="#exampleModal" id="AIML">Register  </td>
                  </tr>
                  <tr class="table-success">
                    <td> 4 </td>
                    <td class="course-name">Android App Development</td>
                    <td class="course-price"><strong> Rs 6000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="AAD">Register  </td>
                  </tr>
                  
                  <tr class="table-primary">
                    <td> 5 </td>
                    <td class="course-name">Advanced Java</td>
                    <td class="course-price"><strong> Rs 4000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="AJ">Register  </td>
                  </tr>
                  <tr class="table-danger">
                    <td> 6 </td>
                    <td class="course-name">Core Java</td>
                    <td class="course-price"><strong> Rs 3000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="CJ">Register  </td>
                  </tr>
                  <tr class="table-warning">
                    <td> 7 </td>
                    <td class="course-name">Ethical Hacking</td>
                    <td class="course-price"><strong> Rs 4500 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="EH">Register  </td>
                  </tr>
         
                  <tr class="table-info">
                    <td> 8 </td>
                    <td class="course-name">Advanced Ethical Hacking </td>
                    <td class="course-price"><strong> Rs 5000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="AEH">Register  </td>
                  </tr>
                  <tr class="table-success">
                    <td> 9 </td>
                    <td class="course-name">Web Development</td>
                    <td class="course-price"><strong> Rs 6000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="WD">Register  </td>
                  </tr>
                  <tr class="table-primary">
                    <td> 10 </td>
                    <td class="course-name">PHP With Laravel</td>
                    <td class="course-price"><strong> Rs 3500 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="PWL">Register  </td>
                  </tr>
                  <tr class="table-danger">
                    <td> 11 </td>
                    <td class="course-name">Introduction to C Programming</td>
                    <td class="course-price"><strong> Rs 3000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="ICP">Register  </td>
                  </tr>
                  <tr class="table-warning">
                    <td> 12 </td>
                    <td class="course-name">AutoCAD</td>
                    <td class="course-price"><strong> Rs 6500 </strong></td>
                    <td class="registertab" > <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="AUTO">Register  </td>
                  </tr>
                  <tr class="table-info">
                    <td> 13 </td>
                    <td class="course-name">TATA Motors</td>
                    <td class="course-price"><strong> Rs 6000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="TATA">Register  </td>
                  </tr>
                  <tr class="table-success">
                    <td> 14 </td>
                    <td class="course-name">PLC With HMI</td>
                    <td class="course-price"><strong> Rs 5000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="PLC">Register  </td>
                  </tr>
                  <tr class="table-primary">
                    <td> 15 </td>
                    <td  class="course-name">Matlab Control System</td>
                    <td class="course-price"><strong> Rs 4000 </strong></td>
                    <td class="registertab"> <a href="#" class="primary-btn register" data-toggle="modal" data-target="#exampleModal" id="MCS">Register  </td>
                  </tr>
  
                </tbody>
              </table>
              <div class="Modal-bg">
    
                <div class="modal">
                  <h1>Hello There!</h1>
                  <span class="modal-close">X</span>
              </div>
              
            </div>-->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="font-weight: 800; color: rgb(91, 42, 184);">National Institute of Industrial Training</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div style="margin-left: 10%;"> 
                    <strong style="margin-left:15px; color: salmon;">Price Details </strong><table class="table" id="OfferTable" style="max-width:80%; margin-bottom:0px !important">
                            <thead>
                                <tr style="border:none">
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <tr> 
                                    <td style="border:none"> Price: <small>(inclusive of all taxes)  </small></td>
                                    <td style="border:none;min-width: 65px;" id="total-amount" >   </td>
                                </tr>
                                <tr class="coupon-disc" id="couponDisc" > 
                                    <td style="border:none">Discount:</td>
                                    <td style="border:none" id="discount-amount" ></td>
                                    <td style="border:none"><a class="btn remove-coupon"  style="margin-top:-5px;" role="button">Remove Coupon</a></td>
                                </tr>
                                <tr class="show-disc" > 
                                    <td style="border-top:1px solid"><strong>Final Amount:</strong></td>
                                    <td style="border-top:1px solid" id="final-amount" style="color: green;"> </td>
                                </tr>
                                <tr>
                                    <td colspan="2" style="border:none">
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="coupon-div">
                            <span class="SpanCoupon" style="margin-top:10px"><a class="btn coupon-check" id="Coupon-check" role="button">Have a Coupon?</a></span>
                            <div class="apply-coupon-div input-group input-group-md coupon-apply" style="max-width:75%;">
                                <input type="text" class="form-control" id="coupon-code" placeholder="ENTER COUPON CODE" style="text-transform: uppercase;">
                                <span class="input-group-addon apply-coupon btn" id="couponinput" role="button">Apply</span>
                            </div>
                        </div>
                    </div>
                </div>
                  <div class="modal-footer">
                    <button type="button" id="rzp-button1" class="btn btn-primary" onclick="Makepayment()" >Proceed to Pay</button>
                  </div>
                </div>
              </div>
            </div>
             
            </div>
            </div>
          </div>
        </div> -->
      </div>
    </div>
    <!-- content-wrapper ends -->
    <!-- partial:../../partials/_footer.html -->
    <footer class="footer">
      <div class="footer-inner-wraper">
        <div class="d-sm-flex justify-content-center justify-content-sm-between">
          <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ?? National Institute For Industrial Training</span>
        </div>
      </div>
    </footer>
      <!-- partial -->
  </div>
  <!-- main-panel ends -->
  </div>
  <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
  <!-- plugins:js -->
  <script src="../../assets/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="../../assets/js/off-canvas.js"></script>
  <script src="../../assets/js/hoverable-collapse.js"></script>
  <script src="../../assets/js/misc.js"></script>
  <!-- endinject -->
  <!-- End custom js for this page -->
  <!--Razorpay Script -->
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
  <!--Jquery CDN -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
                  
<!-- Custom js for this page -->

<script>
  const modalBtns= document.querySelectorAll('.register');
  //console.log(modalBtns); //Node List
  let container = document.querySelector('#CourseTable')
  //console.log(container)
  let CourseNames = container.querySelectorAll('.course-name');
  let CoursePrices = container.querySelectorAll('.course-price')
  let CourseDisplayName = document.querySelector('#exampleModalLabel')
  let CourseOriginalPrice = document.querySelector('#total-amount')
  let CourseFinalPrice = document.querySelector('#final-amount')
  let CouponApplied = false;
  let FinalPrice = 0;
  //console.log(CourseNames) //Node List
  const CouponCheck = document.querySelector('#Coupon-check')
  const ApplyCoupon = document.querySelector('#couponinput')
  const RemoveCoupon = document.querySelector('.remove-coupon')

  CouponCheck.addEventListener('click' , ()=>{
    console.log("I got clicked!");
    document.querySelector('.coupon-apply').classList.add('active');
    
  })

  RemoveCoupon.addEventListener('click', ()=> {
    
    removeDiscount(CourseOriginalPrice.innerText);

  })

  function removeDiscount(CoursePrice){
    CourseOriginalPrice.innerText = CoursePrice;
    document.querySelector('.coupon-disc').classList.remove('active1');
    document.querySelector('.show-disc').classList.remove('active1');
    document.querySelector('.coupon-apply').classList.remove('active');
    let CouponCode =document.querySelector('#coupon-code');
    CouponCode.value = ''
    CouponApplied = false;
    FinalPrice = Number(CourseOriginalPrice.innerText.substring(2));
    document.querySelector('.SpanCoupon').classList.remove('vanish')

    //    document.querySelector('.coupon-apply').style.display = "none";

  }

  function makeDiscount(){
    //let DiscountedPrice = (CourseOriginalPrice.innerHTML*0.6);
    let Discount = document.querySelector('#discount-amount');
    
    //DiscountedPrice = Number(Discount.innerText.substring(1))*0.4;
    DiscountedPrice = Number(CourseOriginalPrice.innerText.substring(2))*0.4
    console.log('Discounted Price : ', DiscountedPrice);
    Discount.innerText = 'Rs ' + String(DiscountedPrice);
    let Price = CourseOriginalPrice.innerText
    Price = Price.substring(2);
    //console.log(Price)
    Price=Number(Price);
    console.log(Price*0.6)
    FinalPrice = (Price*0.6);
    
    CourseFinalPrice.innerText ='Rs ' + String(Price*0.6);
    CouponApplied = true;
    document.querySelector('.coupon-disc').classList.add('active1');
    document.querySelector('.show-disc').classList.add('active1');
    document.querySelector('.coupon-apply').classList.remove('active');
    document.querySelector('.SpanCoupon').classList.add('vanish')

    //console.log(CourseOriginalPrice.innerText);
    //console.log(typeof(CourseOriginalPrice.innerText));
  }

  function CheckValidCoupon(Coupon)
{ 
  let ValidCoupons = ['NIIT' , 'PAISA' , 'NAHI' , 'MILTA' , 'SIRF' , 'UNPAID' ,'LABOUR']
  if(ValidCoupons.includes(Coupon))
  {
    console.log('Tereko Discount Milega!');

    makeDiscount();
  }
  else{
    console.log('Bees Khoke Nikal!!!');
    alert('Invalid Coupon Code!');
  }
}
  
ApplyCoupon.addEventListener('click', ()=>{
    let CouponCode =document.querySelector('#coupon-code');
  //  console.log(CouponCode.value);

    CheckValidCoupon(CouponCode.value)
    
    
  })



  document.querySelectorAll('.register').forEach(item => {
  item.addEventListener('click', event => {
    
    Register(item)
  })
})


 /* const PDS =document.querySelector('#PDS');
  const PAI =document.querySelector('#PAI');
  const AAD =document.querySelector('#AAD');
  const AIML =document.querySelector('#AIML');
  const AJ = document.querySelector('#AJ');
  const CJ = document.querySelector('#CJ');
  const EH = document.querySelector('#EH');
  const AEH = document.querySelector('#AEH');
  const WD = document.querySelector('#WD');
  const PWL = document.querySelector('#PWL');
  const ICP = document.querySelector('#ICP');
  const AUTO = document.querySelector('#AUTO');
  const TATA = document.querySelector('#TATA');
  const PLC = document.querySelector('#PLC');
  const MCS = document.querySelector("#MCS");


  PDS.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Python With Data Science";
  } )

  PAI.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Python With Artificial Intelligence";
  } )
  AAD.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Android App Development";
  } )
  AIML.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Artificial Intelligence With Machine Learning";
  } )
  AJ.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Advanced Java";
  } )
  CJ.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Core Java";
  } )
  EH.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Ethical Hacking";
  } )
  AEH.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Advanced Ethical Hacking";
  } )
  WD.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Web Development";
  } )
  PLC.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "PLC With HMI";
  } )
  PWL.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "PHP With Laravel";
  } )
  AUTO.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "AutoCAD";
  } )
  TATA.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "TATA Motors";
  } )
  ICP.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Introduction to C Programming";
  } )
  MCS.addEventListener('click',()=>{
    CourseDisplayName.innerHTML = "Matlab Control System";
  } )

*/  
  
function Register(item){

//console.log(item.id);
if(item.id === 'PDS')
  {
    CourseDisplayName.innerHTML = CourseNames[0].innerText;
    CourseOriginalPrice.innerHTML = CoursePrices[0].innerHTML;
  }
else if(item.id === 'PAI')
  {
    CourseDisplayName.innerHTML = CourseNames[1].innerText;
    CourseOriginalPrice.innerHTML = CoursePrices[1].innerHTML;

  }
else if(item.id === 'AIML')
{
  CourseDisplayName.innerHTML = CourseNames[2].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[2].innerHTML;

}  
else if(item.id === 'AAD')
{
  CourseDisplayName.innerHTML = CourseNames[3].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[3].innerHTML;

}  


else if(item.id === 'AJ')
{
  CourseDisplayName.innerHTML = CourseNames[4].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[4].innerHTML;

}  


else if(item.id === 'CJ')
{
  CourseDisplayName.innerHTML = CourseNames[5].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[5].innerHTML;

}  


else if(item.id === 'EH')
{
  CourseDisplayName.innerHTML = CourseNames[6].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[6].innerHTML;

}  


else if(item.id === 'AEH')
{
  CourseDisplayName.innerHTML = CourseNames[7].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[7].innerHTML;

}  


else if(item.id === 'WD')
{
  CourseDisplayName.innerHTML = CourseNames[8].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[8].innerHTML;

}  


else if(item.id === 'PWL')
{
  CourseDisplayName.innerHTML = CourseNames[9].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[9].innerHTML;

}  


else if(item.id === 'ICP')
{
  CourseDisplayName.innerHTML = CourseNames[10].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[10].innerHTML;

}  



else if(item.id === 'AUTO')
{
  CourseDisplayName.innerHTML = CourseNames[11].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[11].innerHTML;

}  


else if(item.id === 'TATA')
{
  CourseDisplayName.innerHTML = CourseNames[12].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[12].innerHTML;

}  


else if(item.id === 'PLC')
{
  CourseDisplayName.innerHTML = CourseNames[13].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[13].innerHTML;

}  

else if(item.id === 'MCS')
{
  CourseDisplayName.innerHTML = CourseNames[14].innerText;
  CourseOriginalPrice.innerHTML = CoursePrices[14].innerHTML;

}  







/*
 for(var j=0; j<CourseNames.length;j++)
 {
   //console.log(CourseNames[1].innerHTML)
    if(CourseNames[j].innerHTML==='Python With Data Science')
   {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    }
   else if(CourseNames[j].innerHTML==='Python With Artificial Intelligence')
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    }   
  else  if(CourseNames[j].innerHTML==="Artificial Intelligence With Machine Learning")
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    } 
   else   if(CourseNames[j].innerHTML==="Android App Development")
      {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    }    
  else  if(CourseNames[j].innerHTML==="Advanced Java")
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    } 
  else  if(CourseNames[j].innerHTML==="Core Java")
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    } 
  else  if(CourseNames[j].innerHTML==="Ethical Hacking")
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    } 
  else  if(CourseNames[j].innerHTML==="Advanced Ethical Hacking")
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    }  
  else   if(CourseNames[j].innerHTML==="Web Development")
     {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    }  
  else  if(CourseNames[j].innerHTML==="PHP With Laravel")
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    } 
  else  if(CourseNames[j].innerHTML==="Introduction to C Programming")
      {CourseDisplayName.innerHTML = CourseNames[j].innerText;}
  else  if(CourseNames[j].innerHTML==="AutoCAD")
      {CourseDisplayName.innerHTML = CourseNames[j].innerText;}
  else  if(CourseNames[j].innerHTML==="TATA Motors")
      {CourseDisplayName.innerHTML = CourseNames[j].innerText;}
  else  if(CourseNames[j].innerHTML==="PLC With HMI")
    {   CourseDisplayName.innerHTML = CourseNames[j].innerText;
      console.log(CourseNames[j].innerText);
    }
      
      
  }
 */ 

}
    //if(modalBtns[0].className = 'PDS')
      //console.log("Got it!")
    //else
      //console.log("Nope. Try again mate!");

  


/*modalBtns.addEventListener('click', () =>{
    console.log("I got clicked!");
    modalBg.classList.add('active');
}) */
//$(document).ready(function () {
  //  getData()
    
  //});

  function getData(){
  $.ajax({
    type: "GET",
    url: "fetch.php",
  success: function (response) {
          console.log(response);
          console.log(response[0].firstname);
          document.querySelector('#Intern').innerHTML = response[0].firstname;
    }
  });    
  
  }
  function Makepayment(e){
  let FP =0;  
  if(CouponApplied===true){

  console.log("Before Payment Gateway Course Final Price : ",  FinalPrice)
  FP = FinalPrice*100;
  }

  else{
    let FinalPRICE = document.querySelector('#total-amount').innerText;
    FinalPRICE = Number(FinalPRICE.substring(2))
    console.log("Before Payment Gateway Course Without Coupon Final Price : ",  FinalPRICE);
    
    FP = FinalPRICE*100;
  }
  //console.log(FinalPrice);
  //console.log(document.querySelector('#Student').innerText);
  let name = document.querySelector('#Intern').innerText;
  name = name.substring(8);
  //console.log(name);
  //console.log(FP);
  jQuery.ajax({
              type: 'post',
              url: 'payment_process.php',
              data: "&amt=" + (FP/100) + "&name=" + name, 
              success: function(result){
                    var options = {
                "key": "rzp_test_cOFU7o9A0jtiZo", 
                "amount": FP, 
                "currency": "INR",
                "name": "NiiT",   
                "description": CourseDisplayName.innerText,
                "image": "https://example.com/your_logo",
                "handler": function (response){
              //     alert(response.razorpay_order_id);
                //   alert(response.razorpay_signature)
                    jQuery.ajax({
                          type: 'post',
                          url: 'payment_process.php',
                          data: "payment_id="+ response.razorpay_payment_id, 
                          success: function(result){
                                window.location.href = "../../index.php";
                                
                          }
                    })  
                },
                "theme": {
                    "color": "#E47C0E"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.on('payment.failed', function (response){
                    alert(response.error.code);
                    alert(response.error.description);
                    alert(response.error.source);
                    alert(response.error.step);
                    alert(response.error.reason);
                    alert(response.error.metadata.order_id);
                    alert(response.error.metadata.payment_id);
            });

                rzp1.open();
          
       }

  }) 


}





</script>    
</body>

</html>