<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required Meta Tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <meta charset="utf-8">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <!-- Page Title -->
    <title>Welcome Page</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="../assets/images/logo/favicon.png" type="image/x-icon">

    <!-- CSS Files -->
    <link rel="stylesheet" href="../assets/css/animate-3.7.0.css">
    <link rel="stylesheet" href="../assets/css/font-awesome-4.7.0.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap-4.1.3.min.css">
    <link rel="stylesheet" href="../assets/css/owl-carousel.min.css">
    <link rel="stylesheet" href="../assets/css/jquery.datetimepicker.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
    <!-- Preloader Starts -->
    <div class="preloader">
        <div class="spinner"></div>
    </div>
    <!-- Preloader End -->

    <!-- Header Area Starts -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-2">
                    <div class="logo-area">
                        <a href="#"><img src="../assets/images/logo/logo.png" alt="logo" height="80px"></a>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="custom-navbar">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>  
                    <div class="main-menu">
                        <ul>
                            <li> Table <b> Executive 1 </b> </li> &nbsp;
                            <li> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Review Order</button></li>
                           &nbsp;
                            <li> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myCallWaiter">Call Waiter</button></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

<!-- Call Waiter -->

  <div class="modal fade" id="myCallWaiter" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Call Waiter Successful</h4>
          Our waiter will be notified to serve you.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Call Waiter -->

<!-- Order Review -->

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Table Order Cart</h4>
          <h4 style="color: black;">Executive 1</h4>
          Please review your order.
          Click "Order Now" to order, or click "Add More" to add more food/drink. <br><br>
        <form action="process-customerorder.php" method="post">
          <table border="1">
              <tr>
                <th width="15px">No</th>
                <th width="300px">Menu Name</th>
                <th width="15px">Qty</th>
                <th width="275px">Price Each</th>
                <th width="275px">Total</th>
              </tr>


              <tr>
                <td></td>
                <td>Menu 1</td>
                <td>2</td>
                <td style="text-align: right;"> Rp25.000,-</td>
                <td style="text-align: right;"> Rp50.000,-</td>
              </tr>
          </table>

        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-default">Order Now</button>
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Add More</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Order Review -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3> Our <span class="style-change">Menu</span></h3>
                        <p class="pt-3">Harga sudah termasuk pajak restoran sebesar 10%. <br> <i> Price includes 10% restaurant tax. </i></p>

                        <br>
                        
                    </div>
                </div>
            </div>
            <!-- start pilihan menu -->
            <b> SORT BY </b> Vegetarian<br>
            <a href="../customer-mainmenu.php" class="template-btn mt-3">All Menu</a>
            <a href="customer-mainmenu-recommendation.php" class="template-btn mt-3">Our Chef Recommendation</a>
            <a href="customer-mainmenu-appetizer.php" class="template-btn mt-3">Appetizer</a>
            <a href="customer-mainmenu-main.php" class="template-btn mt-3">Main Food</a>
            <a href="customer-mainmenu-dessert.php" class="template-btn mt-3">Dessert</a>
            <a href="#" class="template-btn mt-3">Vegetarian</a>
            <a href="customer-mainmenu-drink.php" class="template-btn mt-3">Drinks</a>
            <!-- end pilihan menu -->

            <!-- pilihan menu -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="../assets/images/food1.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Eggrolls</h5>
                                <span class="style-change">Rp25.000,- </span>
                            </div>
                            <p class="pt-3">Our special home recipe Egg rolls won't disappoint you.. Trust Us! </p>
                            <a href="#" class="template-btn mt-3">Add to Cart </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-sm-0">
                        <div class="food-img">
                            <img src="../assets/images/food2.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>chicken burger</h5>
                                <span class="style-change">Rp29.500,-</span>
                            </div>
                            <p class="pt-3">Classic chicken hamburger served with fresh ingredients</p>
                             <a href="#" class="template-btn mt-3">Add to Cart </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5 mt-md-0">
                        <div class="food-img">
                            <img src="../assets/images/food3.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>topu lasange</h5>
                                <span class="style-change">Rp32.000,-</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                            <a href="#" class="template-btn mt-3">Add to Cart </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="../assets/images/food4.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>pepper potatoas</h5>
                                <span class="style-change">Rp25.000,-</span>
                            </div>
                            <p class="pt-3">Face together given moveth divided form Of Seasons that fruitful.</p>
                            <a href="#" class="template-btn mt-3" disabled> Sold Out </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="../assets/images/food5.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>bean salad</h5>
                                <span class="style-change">Rp22.500,-</span>
                            </div>
                            <p class="pt-3">Our well-prepared fresh bean salad to brighten up your day!</p>
                            <a href="#" class="template-btn mt-3">Add to Cart </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food mt-5">
                        <div class="food-img">
                            <img src="../assets/images/food6.jpg" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Porkball hoagie</h5>
                                <span class="style-change">Rp55.000,-</span>
                            </div>
                            <p class="pt-3">Our "Porkball Hoagie" made with premium meat and seasonings </p>
                            <a href="#" class="template-btn mt-3">Add to Cart </a><br>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Javascript -->
    <script src="../assets/js/vendor/jquery-2.2.4.min.js"></script>
    <script src="../assets/js/vendor/bootstrap-4.1.3.min.js"></script>
    <script src="../assets/js/vendor/wow.min.js"></script>
    <script src="../assets/js/vendor/owl-carousel.min.js"></script>
    <script src="../assets/js/vendor/jquery.datetimepicker.full.min.js"></script>
    <script src="../assets/js/vendor/jquery.nice-select.min.js"></script>
    <script src="../assets/js/main.js"></script>
</body>
</html>
