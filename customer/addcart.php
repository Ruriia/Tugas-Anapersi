<?php
	session_start();
	if($_POST['qty'] === ""){
		header("refresh:2;  customer-mainmenu.php");
	}else{
	require "../database_key.php";
	$key = connection();
	$sql = "SELECT price FROM menu WHERE menuid = ?";
	$run = $key->prepare($sql);
	$run->execute([$_GET['id']]);
	$row = $run->fetch();
	$total = $_POST['qty'] * $row['price'] ;
	$sql = "INSERT INTO tempmenu(tableid, menuid, qty, price) VALUES (?,?,?,?)";

	$run = $key->prepare($sql);
	$run->execute([
		$_SESSION['id'],
		$_GET['id'],
		$_POST['qty'],
		$total	
	]);
	header("location: customer-mainmenu.php");
	}
?>
<script src="../assets/js/sweetalert2.all.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/js/animate.css">
<script>
	function sweetclick(){
    Swal.fire({
    title: ' Failed to add the Menu: <br/>Please fill the Qty Field!',
    type: 'error',
    showCancelButton: false,
    confirmButtonColor: '#3085d6',
    confirmButtonText: 'Ok',
    animation: false,
    customClass: {
    popup: 'animated tada'
    }
  })
  }
  window.onload = sweetclick;
</script>
