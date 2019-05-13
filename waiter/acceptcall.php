<?php 

	require "../database_key.php";

	$key = connection();

	$sql = "UPDATE msuser SET calling = 0 WHERE id = ?";

	$run = $key->prepare($sql);
	$run->execute([$_GET['id']]);

	header("location: index.php");
?>