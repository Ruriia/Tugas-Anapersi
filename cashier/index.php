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
    <title>Cashier System</title>

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
                        <a href="index.html"><img src="../assets/images/logo/logo.png" alt="logo" height="80px"></a>
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
                            <li> User <b> Cashier </b> </li> &nbsp;
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- Header Area End -->

    <!-- Food Area starts -->
    <section class="food-area section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="section-top">
                        <h3> Cashier <span class="style-change">System</span></h3>
                        

                        <br>
                        
                    </div>
                </div>
            </div>

            

            <!-- pilihan menu -->
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Executive 1</h5>
                                <span class="style-change">Not Paid </span>
                            </div>
                            
                            <a href="#" class="template-btn mt-3" data-toggle="modal" data-target="#myPaymentSummary"> start transaction </a>
                            
                        </div>
                    </div>
                </div>




                

            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Payment Summary Start -->

  <div class="modal fade" id="myPaymentSummary" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Payment Summary</h4>
          Table Executive 1
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
                           
                           <br> <br>
                          <form action="ordersystem-eta.php" method="post">
                            Payment Method : <br>
                            <input type="radio" name="payment" value="debit"> Debit
                             <br> 
                             <input type="radio" name="payment" value="credit"> Credit <br>
                             <input type="radio" name="payment" value="cash"> Cash <br>
                            Payment Total : <input name="text" name="payment_total" placeholder="Payment Total"> </textarea>
                            <br><br>
                            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myPrint">Print Receipt</button>
                        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Call Waiter -->

  <div class="modal fade" id="myPaymentSummary" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Payment Summary</h4>
          Table Executive 1
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
                           
                           <br> <br>
                          <form action="cashier-receipt.php" method="post">
                            Payment Method : <br>
                            <input type="radio" name="payment" value="debit"> Debit
                             <br> 
                             <input type="radio" name="payment" value="credit"> Credit <br>
                             <input type="radio" name="payment" value="cash"> Cash <br>
                            Payment Total : <input name="text" name="payment_total" placeholder="Payment Total"> </textarea>
                            <br><br>
                            <button type="submit" class="btn btn-default" data-toggle="modal" data-target="#myPrint">Print Receipt</button>
                        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Summary -->

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
