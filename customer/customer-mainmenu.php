

<?php
    session_start();
    require "../database_key.php";
    $key = connection();
    $reco = (isset($_GET['recom'])) ? $_GET['recom'] : "";
    $type = (isset($_GET['type'])) ? $_GET['type'] : "";
    if($reco != ""){
        $sql = "SELECT count(menuid) as panjang from menu where recommendation = ?";

        $run = $key->prepare($sql);
        $run->execute([$reco]);
        $data = $run->fetch();
        $length = $data['panjang'];

        $selectmenu = "SELECT * FROM menu where recommendation = ?";
        $menudata = $key->prepare($selectmenu);
        $menudata->execute([$_GET['recom']]);
    }else if($type != ""){
        $sql = "SELECT count(menuid) as panjang from menu where tag = ?";

        $run = $key->prepare($sql);
        $run->execute([$type]);
        $data = $run->fetch();
        $length = $data['panjang'];

        $selectmenu = "SELECT * FROM menu where tag = ?";
        $menudata = $key->prepare($selectmenu);
        $menudata->execute([$_GET['type']]);
    }else{
        $sql = "SELECT count(menuid) as panjang from menu";

        $run = $key->query($sql);
        $data = $run->fetch();
        $length = $data['panjang'];

        $selectmenu = "SELECT * FROM menu";
        $menudata = $key->query($selectmenu);
    }
    $a = 0;

    session_start();
    if(!isset($_SESSION['nama'])){
      header("location:../index.php");
  }else if($_SESSION['nama'] == "customer"){
     header("location:../customer/index.php");
    }else if($_SESSION['nama'] == "cashier"){
     header("location:../cashier/index.php");
    }else if($_SESSION['nama'] == "kitchen"){
     header("location:../cashier/kitchen.php");
    }else if($_SESSION['nama'] == "master"){
     header("location:../master/index.php");
    }else if($_SESSION['nama'] == "waiter"){
     header("location:../waiter/index.php");
    }
?>


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
                            <li> Table <b> <?= $_SESSION['nama']; ?> </b> </li> &nbsp;
                            <li> <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Review Order</button></li>
                           &nbsp;
                            <li> <a class="btn btn-info btn-lg" href="getwaiter.php">Call Waiter</a></li>
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
          <h4 style="color: black;"><?= $_SESSION['nama']; ?></h4>
          Please review your order.
          Click "Order Now" to order, or click "Add More" to add more food/drink. <br><br>
        
          <table border="1">
              <tr>
                <th width="15px">No</th>
                <th width="300px">Menu Name</th>
                <th width="15px">Qty</th>
                <th width="275px">Price Each</th>
                <th width="275px">Total</th>
                <th width="400px">Delete an item</th>
              </tr>
              <?php 
                $tempmenu = "SELECT tempmenu.tempid as idmenu, menu.namamenu as menuname, tempmenu.qty as qty, tempmenu.price as harga FROM tempmenu,menu WHERE tableid = ? and tempmenu.menuid = menu.menuid";
                $hasil = $key->prepare($tempmenu);
                $hasil->execute([$_SESSION['id']]);
                $x = 0;
                while($jalan = $hasil->fetch()):
                $x++;
                $peritem = $jalan['harga'] / $jalan['qty'];
              ?>
              <tr>
                <td><?= $x; ?></td>
                <td><?= $jalan['menuname']; ?></td>
                <td><?= $jalan['qty']; ?></td>
                <td style="text-align: right;"><?= $peritem; ?></td>
                <td style="text-align: right;"><?= $jalan['harga']; ?></td>
                <td><a href="deleteanitem.php?del=<?= $jalan['idmenu'] ?>">Remove from cart</a></td>
              </tr>
          <?php endwhile;?>
          </table>

        </div>
        <div class="modal-footer">
            <form action="addall.php">
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
            <b> SORT BY </b> All Menu<br>
            <a href="customer-mainmenu.php" class="template-btn mt-3">All Menu</a>
            <a href="customer-mainmenu.php?recom=1" class="template-btn mt-3">Our Chef Recommendation</a>
            <a href="customer-mainmenu.php?type=1" class="template-btn mt-3">Appetizer</a>
            <a href="customer-mainmenu.php?type=2" class="template-btn mt-3">Main Food</a>
            <a href="customer-mainmenu.php?type=3" class="template-btn mt-3">Dessert</a>
            <a href="customer-mainmenu.php?type=4" class="template-btn mt-3">Vegetarian</a>
            <a href="customer-mainmenu.php?type=5" class="template-btn mt-3">Drinks</a>
            <!-- end pilihan menu -->

            <!-- pilihan menu -->
            <?php while($a < $length): ?>
            <div class="row">
                <?php $i = 0; 
                    while($i < 3):
                    $i++;
                    $a++;
                    if($row = $menudata->fetch()){

                    }else{
                        break;
                    } 
                     ?>
                <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        <div class="food-img">
                            <img src="<?= $row['img']; ?>" class="img-fluid" alt="">
                        </div>
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5><?= $row['namamenu']; ?></h5>
                                <span class="style-change">Rp. <?= $row['price']; ?></span>
                            </div>
                            <p class="pt-3"><?= $row['description']; ?> </p>
                            <form action="addcart.php?id=<?= $row['menuid']; ?>" method="post" class="form-group">
                                <input type="text" name="qty" class="form-control" placeholder="How much you want to order?">
                                <button type="submit"  class="template-btn mt-3">Add to Cart</button>
                            </form>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            </div>
        <?php endwhile; ?>
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
