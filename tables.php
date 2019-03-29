<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->    
</head>
<body>

<div id="wrapper">

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
                    <li><a href="user.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
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
                        <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-sitemap fa-fw"></i> Maintenance<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="tables.php">Tables</a>
                            </li>
                            <li>
                                <a href="#">Products</a>
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
                                <a href="#">Table Reseration</a>
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

    <!-- Page Content -->
    <div id="page-wrapper">
        <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
            </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                               <h3>Available tables for reservations</h3>
                               <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">+ ADD TABLE</button>
                               <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <!-- Modal -->
                                            <div class="modal-content">
                                                <form action="Tables/add_table.php" method="post">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="exampleModalLabel">Add Table</h5>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label for="title">Table Name</label>
                                                            <input type="text" class="form-control" id="name" name="name" placeholder="Enter Table Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Number of Seats</label>
                                                            <input type="number" class="form-control" id="seats" name="seats" placeholder="Enter Number of Seats">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="title">Availability of the Seat</label>
                                                            <input type="text" class="form-control" id="status" name="status" placeholder="Enter Number of Seats">
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                            </div>
                            <!-- /.panel-heading -->
                            <div class="panel-body">

                            <!-- Table -->
                            <div class="table-responsive">
                                <?php
                                    include('conn.php');
                                    $query = "SELECT * FROM table_tbl";
                                    $result = mysqli_query($con, $query);
                                ?>
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Table Name</th>
                                            <th>Number of Seats</th>
                                            <th>Table Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                            <tbody>
                                                <?php 
                                                    while($row = mysqli_fetch_array($result)):
                                                ?>
                                            <tr>
                                                <td><?=$row['table_name']?></td>
                                                <td><?=$row['table_seat']?></td>
                                                <td><?=$row['table_status']?></td>
                                                <td>
                                                    
                                                    <button type="button" class="btn btn-success btn-circle"><i class="fa fa-pencil"></i></button>
                                                    <button a href="delete_todo.php?id=<?= $row['id']? type="button" class="btn btn-danger btn-circle" ><i class="fa fa-trash-o"></i></button>
                                                    
                                                </td>
                                            </tr>
                                            <?php 
                                                endwhile;
                                            ?>
                                            </tbody>
                                        </table>
                                    </div>
                            </div>
                                <!-- /.panel-body -->
                        </div>
                            <!-- /.panel -->
                    </div>
                        <!-- /.col-lg-12 -->
                </div>
        </div>
    </div>
</div>

<!-- /#wrapper -->

        <!-- jQuery -->
        <script src="js/jquery.min.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Metis Menu Plugin JavaScript -->
        <script src="js/metisMenu.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script src="js/startmin.js"></script>

        <!-- Page-Level Demo Scripts - Notifications - Use for reference -->
        <script>
            // tooltip demo
            $('.tooltip-demo').tooltip({
                selector: "[data-toggle=tooltip]",
                container: "body"
            })

            // popover demo
            $("[data-toggle=popover]").popover()
        </script>


</body>
</html>