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
                    <li class="nav-item">
                        <a class="nav-link" href="fovtrs_1.php" style="color: white">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="view_menu.php" style="color: white">View Menu</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="modal_try1.php" style="color: white">Order Now</a>

                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Login</a>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                         <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #FFA07A">
                            <h5 class="modal-title" id="exampleModalLabel">LOGIN TO YOUR ACCOUNT</h5>
                         <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                         <div class="modal-body">
                         <form>
                        <div class="form-group">
                         <label for="formGroupExampleInput">User Name</label>
                         <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Enter your username">
                        </div>
                        <div class="form-group">
                        <label for="formGroupExampleInput">Password</label>
                         <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your password">
                         </div>
  
                         <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">
                          Remember Me
                      </label>

                      </form>
                     </div>
                         <div class="modal-footer">
                         <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                      <button type="button" class="btn btn-primary">LOGIN</button>
                     </div>
                      </div>
                         </div>
                            </div>
                    </li>
                </ul>
            </div>
        </nav>

       <!--  
        <div class="align-right">
        <div class="row ml-100 ">
        <div class="card border-dark mb-5" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body text-dark">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
</div>
</div> 

-->


    <form class="px-4 py-5">  
    <div class="form-group" >
    <div class="col-sm-6">
    <label for="formGroupExampleInput">Full Name</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="First Name">
  </div>
  </div>
  <div class="form-group">
  <div class="col-sm-6">
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Last Name">
  </div>
  <div class="form-group">
  <div class="col-sm-3">
    <label for="selectGender">Gender</label>
    <select id="selectGender" class="form-control">
    <option selected>Male</option>
        <option>Female</option>
</select>
</div>
<div class="form-group">
<div class="col-sm-3">
    <label for="inputAddress">Phone Number</label>
    <input type="text" class="form-control" id="inputAddress" placeholder="xxxxxxxxxxx">
  </div>
  <div class="form-row">
    <div class="form-group col-md-3">
      <label for="inputEmail4">User Name</label>
      <input type="email" class="form-control" id="inputEmail4" placeholder="User Name">
    </div>
    <div class="form-group col-md-3">
      <label for="inputPassword4">Password</label>
      <input type="password" class="form-control" id="inputPassword4" placeholder="Password">
      <small id="passwordHelpBlock" class="form-text text-muted">Your password must be 8-20 characters long.</small>
    </div>
  </div>
  <form class="px-4 py-5">
  <div class="form-group">
  <label>Birthday</label>
  </div>
  <div class="form-row">
    <div class="form-group col-md-2">
      <input type="text" class="form-control" id="inputCity" placeholder="Year">
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
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        I agree in term & conditions
      </label>
    </div>
  </div>
  
</form>


    </body>
</html> 