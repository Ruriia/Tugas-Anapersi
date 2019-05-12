<?php
	require "../database_key.php";

	$key = connection();

	$sql = "DELETE FROM tempmenu WHERE tempid = ?";

	$run = $key->prepare($sql);

	$run->execute([$_GET['del']]);
	header("location: customer-mainmenu.php");
?>