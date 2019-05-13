<?php
session_start();
if(!isset($_SESSION['nama'])){
      header("location:index.php");
  }else if($_SESSION['jabatan'] == "1"){
     header("location:customer/index.php");
    }else if($_SESSION['jabatan'] == "2"){
     header("location:waiter/index.php");
    }else if($_SESSION['jabatan'] == "3"){
     header("location:kitchen/index.php");
    }else if($_SESSION['jabatan'] == "4"){
     header("location:cashier/index.php");
    }else if($_SESSION['jabatan'] == "5"){
     header("location:manager/index.php");
    }else if($_SESSION['jabatan'] == "6"){
     header("location:master/index.php");
    }
    ?>