<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <!-- Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <style>
            .carousel {
                border-radius: 10px 10px 10px 10px;
                overflow: hidden;
                ...
            }
        </style>
    </head>
    <body style="background-color: #D2D7D3">

        <?php include('auth.php')?>

        <!-- Nav Bar -->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CF3A24">
            <a class="navbar-brand" style="color: white" href="#">Jessu's Cuisine</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link"  href="logout-exec.php" style="color: white">Sign Out</a>    
                    </li>
                </ul>
            </div>
        </nav>


        <!-- Content 1 -->
        <div class="container">
            <div class="row mt-5">
                <div class="col-sm">
                    <div class="jumbotrons" style="background-color: #D2D7D3">
                        <h1 class="display-4">WELCOME <?= $_SESSION['USER_NAME']?></h1>
                        <p class="lead">
                            Celebrate your birthdays or any event with your 
                            family and us or order food to pick up. We serve fast and always hot!
                        </p>
                        <hr class="my-4">
                        <p>Located at 247B Teresa St., Sta. Mesa, Manila</p>
                        <p class="lead">
                            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal1">Order Now</button>
                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content" >
                                        <form action="add_todo.php" method="post">
                                            <div class="modal-header" style="background-color: #FFA07A">
                                                <h5 class="modal-title" id="exampleModalLabel">LET'S GET STARTED</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-body">
                                              <div class="form-group text-center">
                                                    <button class="btn btn-warning popover-test mt-3 mr-3" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                                                     <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
                                                      Pick Up
                                                    </button>
                                                    <div class="collapse" id="collapseExample"> 
                                                      <div class="card card-body text-center">
                                                                I WANT IT FOR TODAY, AT    
                                                                <div class="flex text-center">                        
                                                                            <select id="inputState1" class="form-control">
                                                                            <option selected>12:00 AM</option>
                                                                            <option>February</option>
                                                                            <option>March</option>
                                                                            </select>          
                                                                </div>
                                                                <a class="btn btn-danger mb-2 mt-3" href="user_pickup.php" role="button" aria-pressed="true">CONFIRM</a>  
                                                      </div>
                                                    </div>

                                                    <button class="btn btn-warning popover-test mt-3 ml-3" type="button" data-toggle="collapse" data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                                                     <img src="" width="30" height="30" class="d-inline-block align-top" alt="">  
                                                      Reservation
                                                    </button>
                                                    <div class="collapse" id="collapseExample1">
                                                      <div class="card card-body">
                                                                                           
                                                                    <div class="d-flex text-center">
                                                                              <button type="button" class="btn btn-secondary btn-lg mx-auto ">
                                                                              Table
                                                                               <img src="" width="45" height="45" class="d-inline-block align-top" alt="">
                                                                               </button>

                                                                               <button type="button" class="btn btn-secondary btn-lg mx-auto">
                                                                               Venue      
                                                                               <img src="" width="45" height="45" class="d-inline-block align-top" alt="">
                                                                               </button>
                                                                    </div>
                                                                    <a class="btn btn-danger mb-2 mt-3" href="user_reservation.php" role="button" aria-pressed="true">CONFIRM</a>           
                                                       </div>
                                                    </div> 
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>     
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Content 2 -->
        <div class="container-fluid mt-5" style="background-color: #CF3A24">
            <div class="row">
                <div class="col-sm p-3 text-center">
                    <div class="card" style="width: 18rem; background-color: #CF3A24; border: none">
                        <img src="img4.png" class="card-img-top mx-auto" alt="..." style="width: 10rem; position: center">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Burger</h5>    
                        </div>
                    </div>
                </div>
                <div class="col-sm p-3 text-center">
                <div class="card" style="width: 18rem; background-color: #CF3A24; border: none">
                        <img src="img5.png" class="card-img-top mx-auto" alt="..." style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Chicken</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-3 text-center">
                    <div class="card" style="width: 18rem; background-color: #CF3A24; border:none">
                        <img src="img6.png" class="card-img-top mx-auto" alt="..." style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Spaghetti</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm p-3 text-center">
                    <div class="card" style="width: 18rem; background-color: #CF3A24; border: none">
                        <img src="img7.png" class="card-img-top mx-auto" alt="..." style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Beverage</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row p-4">
                <a href="user_view_menu.php" class="btn btn-dark ml-auto" style="color: white">View Menu</a>
            </div>
        </div>
        <!-- Content 3 -->
        <div class="container p-5">
            <div class="row text-center">
                <div class="col-sm">
                    <h1>Food Pick up</h1>
                </div>
                <div class="col-sm">
                    <h1>Table Reservation</h1>
                </div>
            </div>
        </div>
        <!-- Content 4 -->
    </body>
</html> 