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
                        <img src="pic\jessuicon.jpg" width="45" height="45" class="d-inline-block align-top" alt="">
                        TABLE RESERVATION
                        </h1>
                    </div>
                </div>
        </div>

      <!-- Content -->
        <div class="card mx-auto" style="width: 49rem; background-color: #FFA07A">
            <div class="card-body">

              <div class="bg-success clearfix">
                  <button type="button" class="btn btn-secondary float-middle ml-4 mr-4"><b>1. TIME ></b></button>
                  <button type="button" class="btn btn-secondary float-middle ml-4 mr-4"disabled><b>2. TABLE</b></button>
                  <button type="button" class="btn btn-secondary float-middle ml-4 mr-4"disabled><b>3. DETAILS</b></button>
              </div>

              <div class="container mx-auto">
                  <div class="jumbotrons">
                   <hr class="my-4">

                   <div class="card mb-3">
                        <div class="card-header">
                        <b>TIME OF TABLE RESERVATION:</b>
                        </div class="mb-3">
                            <div class="form-group col-md-5 mx-auto mt-4">
                                <select id="inputState" class="form-control">
                                <option selected>12:15 PM</option>
                                <option>1:30 PM</option>
                                <option>2:15 PM</option>
                                <option>3:30 PM</option>
                                <option>4:15 PM</option>
                                <option>5:30 PM</option>
                                <option>6:15 PM</option>
                                <option>7:30 PM</option>
                                <option>6:15 PM</option>
                                <option>7:30 PM</option>
                                <option>8:15 PM</option>
                                <option>9:30 PM</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                      <a href="user_welcome_page.php" class="btn btn-dark ml-auto  mr-4 mb-3 row" style="color: black">BACK</a>
                      <a href="user_reservation_table_picktable.php" class="btn btn-danger ml-auto  mr-4 mb-3 row" style="color: black">CONFIRM</a>
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