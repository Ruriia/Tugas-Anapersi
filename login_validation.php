<?php
	
	require "database_key.php";
	$key = connection();

	$query = "SELECT * FROM msdata where id=?";
	$siap = $key->prepare($query);
	$siap->execute([$_POST['id']]);
	if($row = $siap->fetch()){
		if(password_verify($_POST['pw'], $row['password'])){
			$_SESSION['id'] = $row['id'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['jabatan'] = $row['rank'];
			if($_SESSION['jabatan'] == 1){
				header("location:user/index.php");
			}else if($_SESSION['jabatan'] == 2){
				header("location:chef/index.php");
			}else if($_SESSION['jabatan'] == 3){
				header("location:manager/index.php");
			}
		}else{
			header("location=login.php?login=1");
		}
	}else{
		header("location=login.php?login=2");
	}
?>