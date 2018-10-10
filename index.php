<?php

require 'functions.php';

$source = query("SELECT * FROM source");

$jmlDataPerHalaman = 10;
$jmlData = count(query("SELECT * FROM source"));
$jmlHalaman = ceil($jmlData / $jmlDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ( $jmlDataPerHalaman * $halamanAktif) - $jmlDataPerHalaman;


$source = query("SELECT * FROM source LIMIT $awalData, $jmlDataPerHalaman");

//tombol cari di klik
if (isset($_POST["cari"])) {
	$source = cari($_POST["keyword"]);
}


?>
<?php require 'header.php' ?>

<body>
    <h1>Kamus Indo - Ing</h1>

<a href="tambah.php">Tambah data Kamus</a>
<br><br>

<form action="" method="post">
	
	<input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword Pencarian" autocomplete="off" id="keyword">
	<button type="submit" name="cari" id="tombol-cari">Cari!</button>

</form>

<br>

<div id="container">
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
</div>


<br>

<?php if (!isset($_POST["cari"])) : ?>

<?php if ($halamanAktif > 1) :?>
<a href="?halaman=<?= $halamanAktif - 1 ?>">&laquo;</a>
<?php endif; ?>


<?php for ($i=1; $i <= $jmlHalaman ; $i++) : ?>
	<?php if( $i == $halamanAktif) : ?>
	<a href="?halaman=<?= $i ?>" style="font-weight: bold; color: red;"><?= $i ?></a>
	<?php else : ?>
	<a href="?halaman=<?= $i ?>"><?= $i ?></a>
	<?php endif; ?>
<?php endfor; ?>

<?php if ($halamanAktif < $jmlHalaman) :?>
<a href="?halaman=<?= $halamanAktif + 1 ?>">&raquo;</a>
<?php endif; ?>

<?php endif; ?>

<?php require 'footer.php' ?>