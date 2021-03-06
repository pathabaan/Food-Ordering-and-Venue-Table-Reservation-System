<html>
    <head>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
         <!-- Bootstrap JS -->
         <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </head>

    <body style="background-color: #D0D3D4 ">


        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #CF3A24">
            <a class="navbar-brand" style="color: white" href="#">Jessu's Cuisine</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-1">
                        <a class="nav-link" href="user.php" style="color: white">Home</a>
                    </li>
                    <li class="nav-item ml-5">
                        <a class="nav-link" href="user_view_menu.php" style="color: white">View Menu</a>
                    </li>
                    <!--
                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white" data-toggle="modal" data-target="#exampleModal1" data-whatever="@mdo">Order Now</a>
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
                                            </div>
                                        </form>
                                    </div>
                                </div>
                    </li> -->
                   </ul>
            </div>
        </nav>
      <div class="container mt-5 mb-5" style="background-color: #FFA07A;">   

        <div class="row mx-auto">
        <img src="pic\banner.jpg" class="rounded float-right border border-primary mx-auto" alt="...">
          <div class="col-lg-12 mr-3">  
                <form class="px-4 py-5">  
                      <div class="form-group" >
                          <div class="col-sm-6">
                            <label for="formGroupExampleInput">Full Name</label>
                            <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
                          </div>
                      </div>

                      <div class="form-group">
                            <div class="col-sm-6">
                              <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Middle Name">
                          </div>

                      <div class="form-group">
                            <div class="col-sm-6 mt-3">
                              <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Last Name">
                          </div>

                          <div class="form-row">
                            <div class="form-group col-md-3 mt-2">
                                <label for="inputEmail4">User Name</label>
                                <input type="email" class="form-control" id="inputEmail4" placeholder="User Name">
                              </div>


                          <div class="form-group col-md-3 mt-2">
                              <label for="inputPassword4">Password</label>
                              <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
                              <small id="passwordHelpBlock" class="form-text text-dark">Your password must be 8-20 characters long.</small>
                            </div>
                      </div>

              <!--
              <form class="px-4 py-5">
                  <div class="form-group">
                      <label>Birthday</label>
                    </div>                    

                  <div class="form-group col-md-2">
                        <select id="inputState" class="form-control">
                        <option selected>January</option>
                        <option>February</option>
                        <option>March</option>
                        <option>April</option>
                        <option>May</option>
                        <option>June</option>
                        <option>July</option>
                        <option>August</option>
                        <option>September</option>
                        <option>October</option>
                        <option>November</option>
                        <option>December</option>
                        </select>
                  </div>

                    <div class="form-group col-md-2">
                      <input type="text" class="form-control" id="inputZip" placeholder="Day">
                    </div>
                </div>   -->

                <div class="form-group">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                      I agree in term & conditions
                    </label>
                  </div>
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                  Create My Account
                  </button>
                </div>
                </form>
          </div>

          <!-- card 
          <div class="card row float-right mb-3" style="width: 15rem; height: 15rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div> -->

        </div>
      </div>

    </body>
</html> 