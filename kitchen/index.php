<?php
if(!isset($_SESSION['nama'])){
      header("location:../index.php");
  }else if($_SESSION['nama'] != "Customer"){
     header("location:../customer/index.php");
    }else if($_SESSION['nama'] == "Cashier"){
     header("location:../cashier/index.php");
    }else if($_SESSION['nama'] == "Kitchen"){
     header("location:../kitchen/kitchen-ordersystem.php");
    }else if($_SESSION['nama'] == "Master"){
     header("location:../master/index.php");
    }else if($_SESSION['nama'] == "Waiter"){
     header("location:../waiter/index.php");
    }
?>