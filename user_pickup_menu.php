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
                        FOOD PICK UP
                    </h1>
                    <div class=" row p-3 mb-7 bg-info text-dark mx-auto border border-dark" style="width: 23rem;">
                        AT 12:00 PM <br/>
                        NOTICE: ONLY 10-15 MINUTES WAITING TIME <br/>
                        THE ORDER WILL BE AUTOMATICALLY CANCEL
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

        <div class="container my-5 py-3" style="background-color: #FFA07A">   
            <div class="row">
                <?php 
                    include('conn.php');
                    $query = "SELECT * FROM product_tbl WHERE prod_type = 0";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0):
                        while($row = mysqli_fetch_array($result)):
                ?>
                    <div class="col-sm-4">
                        <div class="card">
                            <img class="card-img-top" src="<?= $row['prod_image']?>" />
                            <div class="card-body">
                                <h5 class="card-title"><?= $row['prod_name']?>(<?= $row['prod_code']?>) - ₱<?= $row['prod_price']?></h5>
                                <p class="card-text"><?= $row['prod_desc']?></p>
                                <button type="button" class="btn btn-primary">Add to Order</button>
                            </div>
                        </div>
                    </div>
                        <?php endwhile;?>
                    <?php else:?>
                    <span class="pl-3">No menu here.</span>
                    <?php endif;?>
            </div>

            <br/>
            <h1>Double</h1>
            <div class="row">
                <?php 
                    include('conn.php');
                    $query = "SELECT * FROM product_tbl WHERE prod_type = 1";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0):
                        while($row = mysqli_fetch_array($result)):
                ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= $row['prod_image']?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['prod_name']?>(<?= $row['prod_code']?>) - ₱<?= $row['prod_price']?></h5>
                            <p class="card-text"><?= $row['prod_desc']?></p>
                            <button type="button" class="btn btn-primary">Add to Order</button>
                        </div>
                    </div>
                </div>
                    <?php endwhile;?>
                <?php else:?>
                <span class="pl-3">No menu here.</span>
                <?php endif;?>
            </div>

            <br/>
            <h1>Trio</h1>
            <div class="row">
                <?php 
                    include('conn.php');
                    $query = "SELECT * FROM product_tbl WHERE prod_type = 2";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0):
                        while($row = mysqli_fetch_array($result)):
                ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= $row['prod_image']?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['prod_name']?>(<?= $row['prod_code']?>) - ₱<?= $row['prod_price']?></h5>
                            <p class="card-text"><?= $row['prod_desc']?></p>
                            <button type="button" class="btn btn-primary">Add to Order</button>
                        </div>
                    </div>
                </div>
                    <?php endwhile;?>
                <?php else:?>
                <span class="pl-3">No menu here.</span>
                <?php endif;?>
            </div>

            <br/>
            <h1>Sizzling Meals</h1>
            <div class="row">
                <?php 
                    include('conn.php');
                    $query = "SELECT * FROM product_tbl WHERE prod_type = 3";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0):
                        while($row = mysqli_fetch_array($result)):
                ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= $row['prod_image']?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['prod_name']?>(<?= $row['prod_code']?>) - ₱<?= $row['prod_price']?></h5>
                            <p class="card-text"><?= $row['prod_desc']?></p>
                            <button type="button" class="btn btn-primary">Add to Order</button>
                        </div>
                    </div>
                </div>
                    <?php endwhile;?>
                <?php else:?>
                <span class="pl-3">No menu here.</span>
                <?php endif;?>
            </div>

            <br/>
            <h1>Ala Carte</h1>
            <div class="row">
                <?php 
                    include('conn.php');
                    $query = "SELECT * FROM product_tbl WHERE prod_type = 4";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0):
                        while($row = mysqli_fetch_array($result)):
                ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= $row['prod_image']?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['prod_name']?>(<?= $row['prod_code']?>) - ₱<?= $row['prod_price']?></h5>
                            <p class="card-text"><?= $row['prod_desc']?></p>
                            <button type="button" class="btn btn-primary">Add to Order</button>
                        </div>
                    </div>
                </div>
                    <?php endwhile;?>
                <?php else:?>
                <span class="pl-3">No menu here.</span>
                <?php endif;?>
            </div>

            <br/>
            <h1>Beverages</h1>
            <div class="row">
                <?php 
                    include('conn.php');
                    $query = "SELECT * FROM product_tbl WHERE prod_type = 5";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result) > 0):
                        while($row = mysqli_fetch_array($result)):
                ?>
                <div class="col-sm-4">
                    <div class="card">
                        <img class="card-img-top" src="<?= $row['prod_image']?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?= $row['prod_name']?>(<?= $row['prod_code']?>) - ₱<?= $row['prod_price']?></h5>
                            <p class="card-text"><?= $row['prod_desc']?></p>
                            <button type="button" class="btn btn-primary">Add to Order</button>
                        </div>
                    </div>
                </div>
                    <?php endwhile;?>
                <?php else:?>
                <span class="pl-3">No menu here.</span>
                <?php endif;?>
            </div>
            
            <div class="container mx-auto">
                <div class="jumbotrons">
                    <hr>
                    <center>
                    <h1 class="display-4">THAT'S ALL MY ORDER</h1>
                    </center>
                </div>

                <div class="row">
                    <div class="mx-auto">
                        <a href="user_welcome_page.php" class="btn btn-dark">BACK</a>&emsp;
                        <a href="user_pickup_checkout_details.php" class="btn btn-warning">Check Out</a>
                    </div>
                </div>
            </div>
        </div>

        

    </body>
</html> 