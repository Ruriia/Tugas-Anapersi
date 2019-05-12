<?php
	require "../database_key.php";

	$key = connection();

	$sql = "SELECT msuser.id as id, msuser.username as username, msuser.name as nama, msuser.email as email, msuser.rank as rank FROM msuser,msrank WHERE msuser.rank = msrank.rank and msuser.id = ?";

	$run = $key->prepare($sql);
	$run->execute([$_GET['id']]);
	$row = $run->fetch();
?>

<form action="updateproses.php?id=<?= $row['id']; ?>" method="post">
	Username<br/>
	<input type="text" name="nameuser"><br/>
	Name<br/>
	<input type="text" name="nama"><br/>
	Email<br/>
	<input type="email" name="email"><br/>
	Password<br/>
	<input type="email" name="email"><br/>
	Role<br/>
	<select name="role"><br/>
		<?php if($row['rank'] == 1): ?>
		<option value="1" selected="selected">Customer</option>
		<option value="2">Waiter</option>
		<option value="3">Kitchen</option>
		<option value="4">Cashier</option>
		<option value="5">Manager</option>
		<option value="6">Master</option>
		<?php elseif($row['rank'] == 2): ?>
		<option value="1">Customer</option>
		<option value="2" selected="selected">Waiter</option>
		<option value="3">Kitchen</option>
		<option value="4">Cashier</option>
		<option value="5">Manager</option>
		<option value="6">Master</option>
		<?php elseif($row['rank'] == 3): ?>
		<option value="1">Customer</option>
		<option value="2">Waiter</option>
		<option value="3" selected="selected">Kitchen</option>
		<option value="4">Cashier</option>
		<option value="5">Manager</option>
		<option value="6">Master</option>
		<?php elseif($row['rank'] == 4): ?>
		<option value="1">Customer</option>
		<option value="2">Waiter</option>
		<option value="3">Kitchen</option>
		<option value="4" selected="selected">Cashier</option>
		<option value="5">Manager</option>
		<option value="6">Master</option>
		<?php elseif($row['rank'] == 5): ?>
		<option value="1">Customer</option>
		<option value="2">Waiter</option>
		<option value="3">Kitchen</option>
		<option value="4">Cashier</option>
		<option value="5" selected="selected">Manager</option>
		<option value="6">Master</option>
		<?php elseif($row['rank'] == 6): ?>
		<option value="1">Customer</option>
		<option value="2">Waiter</option>
		<option value="3">Kitchen</option>
		<option value="4">Cashier</option>
		<option value="5">Manager</option>
		<option value="6" selected="selected">Master</option>
		<?php endif; ?>
	</select><br/>
	<input type="submit">
</form>