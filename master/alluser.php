<?php
	require "../database_key.php";
	$key = connection();

	$sql = "SELECT msuser.id as id, msuser.username as username, msuser.name as nama, msuser.email as email, msrank.keterangan as rank FROM msuser,msrank WHERE msuser.rank = msrank.rank";
	//$sql = "SELECT * FROM msuser";
	$run = $key->query($sql);
	$i = 0; 
?>


<table border="1">
	<tr>
		<th>No.</th>
		<th>Username</th>
		<th>Name</th>
		<th>Email</th>
		<th>Rank</th>
		<th>Action</th>
	</tr>
	<?php
	while($row = $run->fetch()):
	$i++; ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row['username']; ?></td>
		<td><?= $row['nama']; ?></td>
		<td><?= $row['email']; ?></td>
		<td><?= $row['rank']; ?></td>
		<td>
			<a href="update.php?id=<?= $row['id'];?>">Update</a> ||
			<a href="delete.php?id=<?= $row['id'];?>">Delete</a>
		</td>
	</tr>
	<?php endwhile; ?>
</table>