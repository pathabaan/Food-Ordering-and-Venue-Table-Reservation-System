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
                
                  <button type="button" class="btn btn-secondary float-middle ml-4 mr-4"disabled>1. DETAILS ></button>
                  <button type="button" class="btn btn-secondary float-middle ml-4 mr-4">2. RECEIPT</button>
              </div>

              <div class="container mx-auto">
                  <div class="jumbotrons">
                   <hr class="my-4">

                   <div class="card">
                        <div class="card-header">
                        PICK UP YOUR ORDER AT 12:00PM
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">RECEIPT</h5>
                            <p class="card-text">Please print the receipt and give it to our cashier once you are already here in our store.<br/> Thankyou and Godbless!</p>                            
                            <div>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModal">
                            <img src="" width="30" height="30" class="d-inline-block align-top" alt="">
                            PRINT RECEIPT
                            </button>
                             <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">THANKS FOR YOUR ORDER</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    Your pick up time is 12:00 PM, please be at our store at <br> that time to avoid cancellation of order, 10-15 minutes <br> waiting time only. Thankyou and hope to serve you better!
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-success" href="user_welcome_page_pendingorder.php" role="button" aria-pressed="true">OKAY</a>
                                </div>
                                </div>
                            </div>
                            </div>
                            </div>

                        </div>
                     </div>

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