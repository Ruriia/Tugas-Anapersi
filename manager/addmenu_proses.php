<?php
    session_start();

    if(!isset($_SESSION['nama'])){
      header("location:../index.php");
  }else if($_SESSION['nama'] != "manager"){
     header("location:../redirect.php");
    }

    require "../database_key.php";
    $key = connection();
$sql = "INSERT INTO menu (namamenu, tag, description, price) VALUES (:namamenu, :tag, :description, :price)";

        $run = $key->prepare($sql);

      $data = [
      'namamenu' => $_POST['namamenu'],
      'tag' => $_POST['tag'],
      'description' => $_POST['description'],
      'price' => $_POST['price']
    ];

$run -> execute($data);

   header("location: index.php");

?>

