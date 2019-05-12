<?php
	session_start();
	require "../database_key.php";
	$key = connection();

	date_default_timezone_set('Asia/Jakarta');
	$date = date("d/m/Y");
	$time = date("H:i:s");
	$date = date('Y-d-m', strtotime($date));
	$sql = "INSERT INTO master_order(tableid, orderdate, orderhour,status) VALUES (?,?,?,0)";
	$run = $key->prepare($sql);
	$run->execute([
		$_SESSION['id'],
		$date,
		$time
	]);

	$sql = "SELECT * FROM master_order WHERE tableid = ? order by masterorder desc LIMIT 1";

	$run = $key->prepare($sql);
	$run->execute([$_SESSION['id']]);
	$row = $run->fetch();
	$length = $row['masterorder'];

	
	$sql = "SELECT * FROM tempmenu WHERE tableid = ?";
	$run = $key->prepare($sql);
	$run->execute([$_SESSION['id']]);
	$masukdata = "INSERT INTO ordered_item(masterorder, menuid, qty, total, status)
	VALUES (?,?,?,?,0)";
	$mulaimasuk = $key->prepare($masukdata);
	while($temptomaster = $run->fetch()){
	$data = [
		$length,
		$temptomaster['menuid'],
		$temptomaster['qty'],
		$temptomaster['price']
	];
	$mulaimasuk->execute($data);
	}
	$query = "DELETE FROM tempmenu WHERE tableid = ?";
	$hapus = $key->prepare($query);
	$hapus->execute([$_SESSION['id']]);
	
	header("location: index.php");


?>