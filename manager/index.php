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

    if(!isset($_SESSION['nama'])){
      header("location:../index.php");
  }else if($_SESSION['nama'] == "Customer"){
     header("location:../customer/index.php");
    }else if($_SESSION['nama'] == "Cashier"){
     header("location:../cashier/index.php");
    }else if($_SESSION['nama'] == "Kitchen"){
     header("location:../cashier/kitchen.php");
    }else if($_SESSION['nama'] == "Master"){
     header("location:../master/index.php");
    }else if($_SESSION['nama'] == "Waiter"){
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
    <title>Manager Page </title>

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
                            <li> User <b> <?= $_SESSION['nama']; ?> </b> </li> &nbsp;
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
                        <h3> Manager <span class="style-change">Page</span></h3>
                        

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
                                <h5>Stock List</h5>
                            </div>
                            
                            <table border="1">
                              <tr>
                                <th>No</th>
                                <th>Nama Bahan</th>
                                <th>Jml. Stok</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                              </tr>


                              <tr>
                                <td>1</td>
                                <td>Bawang Merah</td>
                                <td>10</td>
                                <td>Stok Menipis</td>
                                 <td><a href=""> Update Stok</a></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Bawang Putih</td>
                                <td>100</td>
                                <td>Stok Tersedia</td>
                                 <td><a href=""> Update Stok</a></td>
                              </tr>
                          </table>
                            <a href="#" class="template-btn mt-3" data-toggle="modal" data-target="#myInventory"> Add Inventory </a>
                            <a href="#" class="template-btn mt-3" data-toggle="modal" data-target="#mySupplier"> Contact Supplier </a>
                        </div>
                    </div>
                </div>
    <!-- Inventory End -->

<!-- start menu -->
                    <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Menu</h5>
                                
                            </div>
                            
                            
                            <a href="#" class="template-btn mt-3" data-toggle="modal" data-target="#myViewMenu"> View Menu </a><br>
                            <a href="#" class="template-btn mt-3" data-toggle="modal" data-target="#myAddMenu"> Add Menu </a><br>
                             <a href="#" class="template-btn mt-3" data-toggle="modal" data-target="#myEditMenu"> Edit Menu </a><br>
                        </div>
                    </div>
                </div>
                <!-- End Menu -->

                <!-- start menu -->
                    <div class="col-md-4 col-sm-6">
                    <div class="single-food">
                        
                        <div class="food-content">
                            <div class="d-flex justify-content-between">
                                <h5>Statistic</h5>
                                
                            </div>
                            
                            <a href="#" class="template-btn mt-3" data-toggle="modal" data-target="#myTotalSales"> Total Sales </a><br>
                        </div>
                    </div>
                </div>
                <!-- End Menu -->

    <!-- Start Add Inventory -->

  <div class="modal fade" id="myInventory" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Add New Inventory</h4>
          
          <form action="addinventory_proses.php" method="post">
            Inventory Name : <br> <input type="text" name="inventory_name" placeholder="Inventory Name"><br>
            Qty : <br> <input type="number" name="qty" placeholder="Qty"><br>
            <button type="submit" class="template-btn mt-3" data-toggle="modal"> Submit </button>
          </form>
                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- End of Add Inventory -->

    <!-- Start Contact Supplier -->

  <div class="modal fade" id="mySupplier" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Contact Supplier</h4>
          
          <table border="1">
                              <tr>
                                <th>No</th>
                                <th>Nama Supplier</th>
                                <th>Spesialisasi</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                              </tr>


                              <tr>
                                <td>1</td>
                                <td>PT Jaya Abadi</td>
                                <td>Sayuran</td>
                                <td>Jalan Pasar Rumput 10</td>
                                 <td><a href="ph:0812000000"> 0812-000-000 </a></td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>PT Kem Meat Tbk.</td>
                                <td>Daging</td>
                                <td>Jalan Kawasan Industri 3 KI/12</td>
                                 <td><a href="ph:0813000000"> 0813-000-000 </a></td>
                              </tr>
                          </table>
                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Supplier -->

 <!-- Start View Menu -->

  <div class="modal fade" id="myViewMenu" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">View Menu</h4>
          
          <table border="1">
                              <tr>
                                <th>No</th>
                                <th>Menu Name</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Sold</th>
                              </tr>


                              <tr>
                                <td>1</td>
                                <td>Egg Rolls</td>
                                <td>Appetizer</td>
                                <td>Rp35.000,-</td>
                                 <td>10</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Chicken Burger</td>
                                <td>Main Menu</td>
                                <td>Rp55.000,-</td>
                                 <td>25</td>
                              </tr>
                          </table>
                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of View All Menu -->

 <!-- Start Add Menu -->

  <div class="modal fade" id="myAddMenu" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Add Menu</h4>
          
          <form action="addmenu_proses.php" method="post">
            Menu Name : <br> <input type="text" name="menu_name" placeholder="Menu Name"><br>
            Category : <br> 
            <select name="category">
              <option value="recommendation">Our Chef Recommendation </option>
              <option value="appetizer">Appetizer </option>
              <option value="mainmenu">Main Menu </option>
              <option value="dessert">Dessert</option>
              <option value="vegetarian">Vegetarian </option>
              <option value="drink">Drink</option>
            </select>
            Description : <br> <textarea type="text" name="description" placeholder="Description"></textarea><br>
           Price : <br> <input type="number" name="price" placeholder="Price"><br>
              <br>
            <button type="submit" class="template-btn mt-3" data-toggle="modal"> Submit </button>
          </form>
                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Add Menu -->

<!-- Start Edit Menu -->

  <div class="modal fade" id="myEditMenu" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Edit Menu</h4>
          
          <form action="editmenu_proses.php" method="post">
            Menu Name : <br> <input type="text" name="menu_name" placeholder="Menu Name"><br>
            Category : <br> 
            <select name="category">
              <option value="recommendation">Our Chef Recommendation </option>
              <option value="appetizer">Appetizer </option>
              <option value="mainmenu">Main Menu </option>
              <option value="dessert">Dessert</option>
              <option value="vegetarian">Vegetarian </option>
              <option value="drink">Drink</option>
            </select>
            Description : <br> <textarea type="text" name="description" placeholder="Description"></textarea><br>
           Price : <br> <input type="number" name="price" placeholder="Price"><br>
              <br>
            <button type="submit" class="template-btn mt-3" data-toggle="modal"> Submit </button>
          </form>
                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Edit Menu -->

    <!-- Start Total Sales -->

  <div class="modal fade" id="myTotalSales" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Total Sales</h4>
          
          <table border="1">
                              <tr>
                                <th width="15px">No</th>
                                <th width="300px">Menu Name</th>
                                <th width="300px">Category</th>
                                <th width="15px">Qty</th>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Egg Rolls</td>
                                <td>Appetizer</td>
                                 <td>150</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Chicken Burger</td>
                                <td>Main Menu</td>
                                 <td>139</td>
                              </tr>
                            </table>
                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<!-- End of Total Sales -->

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
