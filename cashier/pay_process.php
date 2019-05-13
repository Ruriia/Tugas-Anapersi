<?php 
	require "../database_key.php";
	$key = connection();

	$sql = "UPDATE master_order SET status = 2 WHERE masterorder = ?";

	$run = $key->prepare($sql);

	$run->execute([$_GET['id']]);

	$sql = "UPDATE ordered_item SET status = 2 WHERE masterorder = ?";

	$run = $key->prepare($sql);

	$run->execute([$_GET['id']]);

	$sql = "UPDATE msuser SET occupied = 0 WHERE id = ?";

	$run = $key->prepare($sql);

	$run->execute([$_GET['id']]);
	

	header("location: index.php");



?>