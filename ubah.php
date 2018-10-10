<?php
require 'functions.php';

$id = $_GET["id"];
$kms = query("SELECT * FROM source WHERE id = $id")[0];


if( isset($_POST["ubah"]) ) {
	if( ubah($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil diubah!');
				document.location.href = 'index.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal diubah!');
				document.location.href = 'index.php';
			  </script>";
	}
}
?>
<?php require 'header.php' ?>
<body>
	<h1>Ubah Data</h1>
	<form action="" method="post">
		<input type="hidden" name="id" value="<?php echo $kms["id"]; ?>">
		<ul>
			<li>
				<label for="ina">Indonesia : </label>
				<input type="text" name="ina" id="ina" value="<?php echo $kms["ina"]; ?>" autofocus>
			</li>
			<li>
				<label for="ing">Inggris : </label>
				<input type="text" name="ing" id="ing" value="<?php echo $kms["ing"]; ?>">
			</li>
			<li>
				<button type="submit" name="ubah">Ubah Data!</button>
				<a href="index.php">Kembali</a>
			</li>
		</ul>
	</form>
<?php require 'footer.php' ?>