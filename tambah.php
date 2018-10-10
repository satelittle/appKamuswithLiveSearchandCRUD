<?php 

require 'functions.php';

if( isset($_POST["tambah"]) ) {
	if( tambah($_POST) > 0 ) {
		echo "<script>
				alert('data berhasil ditambahkan!');
				document.location.href = 'tambah.php';
			  </script>";
	} else {
		echo "<script>
				alert('data gagal ditambahkan!');
				document.location.href = 'tambah.php';
			  </script>";
	}
}
?>
<?php require 'header.php' ?>
<body>
	<h1>Tambah Data</h1>
	<form action="" method="post" enctype="multipart/form-data">
		<ul>
			<li>
				<label for="ina">Indonesia : </label>
				<input type="text" name="ina" id="ina" required autofocus>
			</li>
			<li>
				<label for="ing">Inggris : </label>
				<input type="text" name="ing" id="ing">
			</li>
			<li>
				<button type="submit" name="tambah">Tambah Data!</button>
				<a href="index.php">Kembali</a>
			</li>
		</ul>
	</form>
<?php require 'footer.php' ?>