<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Design for Tables -->
    <link href="css/tables.css" rel="stylesheet">

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

    <!-- Image Upload Style -->
    <style>
    .btn-file {
        position: relative;
        overflow: hidden;
    }
    .btn-file input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        min-width: 100%;
        min-height: 100%;
        font-size: 100px;
        text-align: right;
        filter: alpha(opacity=0);
        opacity: 0;
        outline: none;
        background: white;
        cursor: inherit;
        display: block;
    }

    #img-upload{
        width: 100%;
    }
    </style>

    <title>Products</title>
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<div id="wrapper">
    <?php include('auth.php')?>
    
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                        <a href="admin.php"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
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
                    <h1 class="page-header">Products</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <?php
                include('conn.php');
                $query = "SELECT * FROM product_tbl";
                $result = mysqli_query($con, $query);
            ?>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3>Products available in the menu.</h3>
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#productModal">+ Add Product</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Price</th>
                                            <th>Description</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php while($row = mysqli_fetch_array($result)):?>
                                        <tr>
                                            <td>
                                                <a href="<?= $row['prod_image']?>" target="_blank">
                                                    <img src="<?= $row['prod_image']?>" class="img-thumbnail" width="150"/>
                                                </a>
                                            </td>
                                            <td><?= $row['prod_name']?></td>
                                            <td><?= $row['prod_price']?></td>
                                            <td><?= $row['prod_desc']?></td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="Basic example">
                                                    <!-- change button to button to anchor tags -->
                                                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editProduct<?= $row['prod_id']?>">Edit</button>
                                                    <a href="deleteProduct.php?id=<?= $row['prod_id']?>" class="btn btn-danger">Delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                        <!-- Edit Product Modal-->
                                        <div class="modal fade" id="editProduct<?= $row['prod_id']?>" tabindex="-1" role="dialog">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <form action="editProduct-exec.php" method="POST" enctype="multipart/form-data">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Product</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <div class="row">
                                                                <input type="hidden" name="id" value="<?= $row['prod_id']?>"/>
                                                                <div class="col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Code</label>
                                                                        <input type="text" class="form-control" id="code" name="code" placeholder="Enter Code" value="<?= $row['prod_code']?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Name</label>
                                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?= $row['prod_name']?>">
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    <div class="form-group">
                                                                        <label>Price</label>
                                                                        <input type="number" class="form-control" id="name" name="price" placeholder="Enter Price" value="<?= $row['prod_price']?>">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Description</label>
                                                                <textarea class="form-control" name="desc" rows="3" placeholder="Enter Description"><?= $row['prod_desc']?></textarea>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Upload Image</label>
                                                                <div class="input-group">
                                                                    <span class="input-group-btn">
                                                                        <span class="btn btn-default btn-file">
                                                                            Browse… <input type="file" id="imgInp" name="image">
                                                                        </span>
                                                                    </span>
                                                                    <input type="text" class="form-control" name="fileName" value="<?= $row['prod_image']?>" readonly>
                                                                </div>
                                                                <img id='img-upload' class="mx-5" src="<?= $row['prod_image']?>"/>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Edit Product</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <?php endwhile;?>
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

<!-- Add Prdouct Modal -->
<div class="modal fade" id="productModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="addProduct-exec.php" method="POST" enctype="multipart/form-data">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Product</h5>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Code</label>
                                <input type="text" class="form-control" id="code" name="code" placeholder="Enter Code">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Name</label>
                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name">
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <div class="form-group">
                                <label>Price</label>
                                <input type="number" class="form-control" id="name" name="price" placeholder="Enter Price">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" name="desc" rows="3" placeholder="Enter Description"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Image</label>
                        <div class="input-group">
                            <span class="input-group-btn">
                                <span class="btn btn-default btn-file">
                                    Browse… <input type="file" id="imgInp" name="image">
                                </span>
                            </span>
                            <input type="text" class="form-control" readonly>
                        </div>
                        <img id='img-upload' class="mx-5"/>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>


<!-- jQuery -->
<script src="js/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="js/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="js/dataTables/jquery.dataTables.min.js"></script>
<script src="js/dataTables/dataTables.bootstrap.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/startmin.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
</script>

<!-- Image Upload -->
<script>
$(document).ready( function() {
    $(document).on('change', '.btn-file :file', function() {
    var input = $(this),
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [label]);
    });

    $('.btn-file :file').on('fileselect', function(event, label) {
        
        var input = $(this).parents('.input-group').find(':text'),
            log = label;
        
        if( input.length ) {
            input.val(log);
        } else {
            if( log ) alert(log);
        }
    
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#img-upload').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function(){
        readURL(this);
    }); 	
});
</script>

</body>
</html>