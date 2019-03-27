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
        <div class="container mt-2 mb-2 p-3">
                <div class="row text-center">
                    <div class="row-sm mx-auto">
                        <h1>
                        <img src="" width="45" height="45" class="d-inline-block align-top" alt="">
                        FOOD PICK UP
                        </h1>
                            <div class=" row p-3 mb-7 bg-info text-dark mx-auto" style="width: 23rem;">
                             AT 12:00 PM <br/>
                             NOTICE: ONLY 10-15 MINUTES WAITING TIME <br/>
                             THE ORDER WILL BE AUTOMATICALLY CANCEL
                            </div>
                    </div>
                </div>
        </div>

      <!-- Content -->
        <div class="card mx-auto" style="width: 49rem;">
            <div class="card-body">

              <div class="bg-success clearfix">
                  <button type="button" class="btn btn-secondary float-left ml-4 mr-4">1. SIGN IN ></button>
                  <button type="button" class="btn btn-secondary float-middle ml-4 mr-4">2. DETAILS ></button>
                  <button type="button" class="btn btn-secondary float-middle ml-4 mr-4">3. RECEIPT</button>
              </div>

              <div class="container mx-auto">
                  <div class="jumbotrons">
                   <hr class="my-4">
                   <h1 class="display-8 row">DON'T HAVE AN ACCOUNT?</h1>
                   <p class="text-left">Sign-up now to claim the loyalty card.</p>
                  </div>
              </div>

              <a class="btn btn-primary btn-lg active" href="user_createaccount.php" role="button" aria-pressed="true">Create Your Account</a>

              <div class="container mx-auto">
                  <div class="jumbotrons">
                  <hr class="my-4">
                  <h1 class="display-8 row">DONE THIS BEFORE?</h1>
                  <form>
                    <div class="form-group">
                        <label for="formGroupExampleInput">User Name</label>
                        <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Enter your username">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput">Password</label>
                        <input type="text" class="form-control" id="formGroupExampleInput3" placeholder="Enter your password">
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="gridCheck">
                        <label class="form-check-label" for="gridCheck">Remember Me</label>
                      </div>
                   </form>
                   <div>
                       <a class="btn btn-secondary" href="user_pickup_checkout_details.php" role="button" aria-pressed="true">Login</a>
                   </div>
              </div>
             </div>
            </div>
        </div>




        <!-- Content 1 -->
        <div class="container-fluid mt-5" style="background-color: #CF3A24">
            <div class="row">
                <div class="col-sm text-center">
                    <div class="card" style="width: 18rem; background-color: #CF3A24; border: none">
                        <img src="img8.png" class="card-img-top mx-auto" alt="..." style="width: 10rem; position: center">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Sizzling</h5>    
                        </div>
                    </div>
                </div>
                <div class="col-sm text-center">
                <div class="card" style="width: 18rem; background-color: #CF3A24; border: none">
                        <img src="img5.png" class="card-img-top mx-auto" alt="..." style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Chicken</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm text-center">
                    <div class="card" style="width: 18rem; background-color: #CF3A24; border:none">
                        <img src="img6.png" class="card-img-top mx-auto" alt="..." style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Spaghetti</h5>
                        </div>
                    </div>
                </div>
                <div class="col-sm text-center">
                    <div class="card" style="width: 18rem; background-color: #CF3A24; border: none">
                        <img src="img7.png" class="card-img-top mx-auto" alt="..." style="width: 10rem;">
                        <div class="card-body">
                            <h5 class="card-title" style="color: white">Beverage</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
      
            <div class="container mx-auto">
                <div class="jumbotrons" style="background-color: #D2D7D3">
                    <hr class="my-4">
                 <h1 class="display-4 row"></h1>
                </div>
            </div>
        
        </div>
    </body>
</html> 