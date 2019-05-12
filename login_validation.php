<?php
	
	require "database_key.php";
	$key = connection();
	$query = "SELECT * FROM msuser where username=?";
	$siap = $key->prepare($query);
	$siap->execute([$_POST['id']]);
	if($row = $siap->fetch()){
		if(password_verify($_POST['pw'], $row['password'])){
			$_SESSION['id'] = $row['id'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['jabatan'] = $row['rank'];
			if($_SESSION['jabatan'] == 1){
				header("location:customer/index.php");
			}else if($_SESSION['jabatan'] == 2){
				header("location:waiter/index.php");
			}else if($_SESSION['jabatan'] == 3){
				header("location:kitchen/index.php");
			}else if($_SESSION['jabatan'] == 4){
				header("location:cashier/index.php");
			}else if($_SESSION['jabatan'] == 5){
				header("location:manager/index.php");
			}else if($_SESSION['jabatan'] == 6){
				header("location:master/index.php");
			}
		}else{
			header("location=login.php?login=1");
		}
	}else{
		header("location=login.php?login=2");
	}
?>