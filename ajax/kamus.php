<?php

require '../functions.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM source
				WHERE
				ina LIKE '%$keyword%' OR
				ing LIKE '%$keyword%' LIMIT 0, 10
			";

$source = query($query);

?>

<table border="1" cellspacing="0" cellpadding="5">
	<tr>
		<th>No</th>
		<th>Indonesia</th>
		<th>Inggris</th>
		<th>Aksi</th>
	</tr>
	<?php $i = 1; ?>
	<?php foreach( $source as $row ) { ?>
	<tr>
		<td><?= $i; ?></td>
		<td><?= $row["ina"]; ?></td>
		<td><?= $row["ing"]; ?></td>
		<td><a href="ubah.php?id=<?php echo $row["id"]; ?>">ubah</a> | <a href="hapus.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('yakin?')">hapus</a></td>
	</tr>
	<?php $i++; ?>
	<?php } ?>
</table>