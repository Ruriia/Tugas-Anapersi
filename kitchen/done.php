<?php
	require "../database_key.php";

	$key = connection();

	$sql = "UPDATE ordered_item SET status = 1 WHERE orderid = ?";
	$jalan = $key->prepare($sql);
	$jalan->execute([$_GET['id']]);
	header("location: kitchen-ordersystem.php");
?>