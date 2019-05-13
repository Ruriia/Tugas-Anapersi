<?php
	require "../database_key.php";

	$key = connection();

	$sql = "SELECT menu.namamenu as namamenu, ordered_item.qty as qty, ordered_item.status as status FROM ordered_item, menu WHERE (ordered_item.tableid = ?) and (ordered_item.status = 0 or ordered_item.status = 1) and ordered_item.menuid = menu.menuid";

	$run = $key->prepare($sql);
	$run->execute([$_GET['id']]);

	$gettable = "SELECT * FROM msuser WHERE id = ?";

	$getname = $key->prepare($gettable);
	$getname->execute([$_GET['id']]);
	$nama = $getname->fetch();
?>

Table = <?= $nama['name'];?>
<table>
	<tr>
		<th>No. </th>
		<th>Menu</th>
		<th>Qty</th>
		<th>Status</th>
	</tr>
	<?php $i = 0;
	while($row = $run->fetch()):
	$i++;
	?>
	<tr>
		<td><?= $i++; ?></td>
		<td><?= $row['namamenu']; ?></td>
		<td><?= $row['qty']; ?></td>
		<td>
			<?php if($row['status'] == 0): ?>
				<p>On Process</p>
			<?php else: ?>
				<p>Served</p>
			<?php endif; ?>
		</td>
	</tr>
	<?php endwhile; ?>
</table>

<form action="index.php">
	<button type="submit">Return to main</button>
</form>