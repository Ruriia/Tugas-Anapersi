<?php
	session_start();

  
	require "../database_key.php";

	$key = connection();

	$sql = "UPDATE msuser set calling = 1 WHERE id = ?";

	$run = $key->prepare($sql);

	$run->execute([$_SESSION['id']]);

	header("refresh: 3; customer-mainmenu.php");
?>

<script src="../assets/js/sweetalert2.all.min.js"></script>
<link rel="stylesheet" type="text/css" href="../assets/js/animate.css">
<script>
  function sweetclick(){
    Swal.fire({
      type: 'success',
      title: 'You have called the waiter. <br> Coming to you really soon!',
      showConfirmButton: false,
      timer: 5000,
  })
  }
  window.onload = sweetclick;
</script>