<?php
session_start();
 if(!isset($_SESSION['nama'])){
      header("location:../index.php");
  }else if($_SESSION['nama'] != "kitchen"){
     header("location:../redirect.php");
    }
?>