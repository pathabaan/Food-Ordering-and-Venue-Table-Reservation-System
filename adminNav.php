<?php include('adminAuth.php')?>

<!-- Navigation -->
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" style="background-color:#CF3A24">
  <div class="navbar-header">
      <a class="navbar-brand" href="#">Jessu's Cuisine</a>
  </div>

  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="sr-only">Toggle navigation</span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
  </button>

  <!-- Top Navigation: Right Menu -->
  <ul class="nav navbar-right navbar-top-links">
      <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">
              <i class="fa fa-user fa-fw"></i> Lou Gonzales <b class="caret"></b>
          </a>
          <ul class="dropdown-menu dropdown-user">
              <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
              </li>
              <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
              </li>
              <li class="divider"></li>
              <li><a href="logout-exec.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
              </li>
          </ul>
      </li>
  </ul>

  <!-- Sidebar -->
  <div class="navbar-default sidebar" role="navigation">
      <div class="sidebar-nav navbar-collapse">

          <ul class="nav" id="side-menu">
              <li class="sidebar-search">
                  <div class="input-group custom-search-form">
                      <input type="text" class="form-control" placeholder="Search...">
                          <span class="input-group-btn">
                              <button class="btn btn-primary" type="button">
                                  <i class="fa fa-search"></i>
                              </button>
                          </span>
                  </div>
              </li>
              <li>
                  <a href="#" class="active"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
              </li>
              <li>
                  <a href="#"><i class="fa fa-sitemap fa-fw"></i> Maintenance<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="tables.php">Tables</a>
                      </li>
                      <li>
                          <a href="products.php">Products</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#"><i class="fa fa-table fa-fw"></i> Transactions<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="#">Orders</a>
                      </li>
                      <li>
                          <a href="table_reservation.php">Table Reseration</a>
                      </li>
                      <li>
                          <a href="#">Venue Reseration</a>
                      </li>
                  </ul>
              </li>
              <li>
                  <a href="#"><i class="fa fa-file fa-fw"></i> Reports<span class="fa arrow"></span></a>
                  <ul class="nav nav-second-level">
                      <li>
                          <a href="#">Menu Reports</a>
                      </li>
                  </ul>
              </li>
          </ul>

      </div>
  </div>
</nav>