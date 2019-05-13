<?php
session_start();
   if(!isset($_SESSION['nama'])){
      header("location:../index.php");
  }else if($_SESSION['nama'] != "master"){
     header("location:../redirect.php");
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
    <title>Master Page </title>

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
                        <h3> Master <span class="style-change">Page</span></h3>
                        

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
                                <h5>User</h5>
                            </div>
                            
                            <a href="alluser.php" class="template-btn mt-3"> User List </a>
                            <a href="create.php" class="template-btn mt-3"> Add User </a>
                        </div>
                    </div>
                </div>




                

            </div>
        </div>
    </section>
    <!-- Food Area End -->

    <!-- Start User List -->

  <div class="modal fade" id="myUserList" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">User List</h4>
          <table border="1">
                              <tr>
                                <th width="15px">No</th>
                                <th width="15px">Username</th>
                                <th width="300px">Name</th>
                                <th width="15px">E-mail</th>
                                <th width="15px">Status</th>
                              </tr>


                              <tr>
                                <td>1</td>
                                <td>Username</td>
                                <td>Executive 1</td>
                                 <td>customer@lagendia.com</td>
                                 <td>Customer</td>
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
<!-- End of User List -->

    <!-- Start Add User -->

  <div class="modal fade" id="myAddUser" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Add User</h4>
          
          <form action="adduser_proses.php" method="post">
            Username : <input type="text" name="username" placeholder="Username"><br>
            Name : <input type="text" name="name" placeholder="Name"><br>
            E-mail : <input type="email" name="email" placeholder="E-mail"><br>
            Password : <input type="password" name="password" placeholder="Password"><br>
            Status :
            <select name="rank">
              <option value="1"> Customer</option>
              <option value="2"> Waiter</option>
              <option value="3"> Kitchen</option>
              <option value="4"> Cashier</option>
              <option value="5"> Manager</option>
              <option value="6"> Master</option>
            </select>
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
<!-- End of Add User -->

    <!-- Start Edit User -->

  <div class="modal fade" id="myEditUser" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
         

        </div>
        

        <div class="modal-body">
          <h4 style="color: black;">Edit User</h4>
          
          <form action="edituser_proses.php" method="post">
            Username : <input type="text" name="username" placeholder="Username"><br>
            Name : <input type="text" name="name" placeholder="Name"><br>
            E-mail : <input type="email" name="email" placeholder="E-mail"><br>
            Password : <input type="password" name="password" placeholder="Password"><br>
            Status :
            <select name="rank">
              <option value="1"> Customer</option>
              <option value="2"> Waiter</option>
              <option value="3"> Kitchen</option>
              <option value="4"> Cashier</option>
              <option value="5"> Manager</option>
              <option value="6"> Master</option>
            </select>
            <button type="submit" class="template-btn mt-3" data-toggle="modal"> Edit </button>
          </form>
                           
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<!-- End of Add User -->

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
