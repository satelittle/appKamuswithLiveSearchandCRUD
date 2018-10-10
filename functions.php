<?php
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "db_kamus");

	
function query($sql) {
	global $conn;
	$result = mysqli_query($conn, $sql);

	$rows = [];
	while( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;
	}

	return $rows;
}

function tambah($data) {
	global $conn;

	$ina = htmlspecialchars($data["ina"]);
	$ing = htmlspecialchars($data["ing"]);

	$sql = "INSERT INTO source
				VALUES
			('', '$ina', '$ing')";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}

function ubah($data) {
	global $conn;

	$id = $data["id"];
	$ina = htmlspecialchars($data["ina"]);
	$ing = htmlspecialchars($data["ing"]);

	$sql = "UPDATE source SET
				ina = '$ina',
				ing = '$ing'
			WHERE
				id = $id
			";

	mysqli_query($conn, $sql);

	return mysqli_affected_rows($conn);
}

function hapus($id) {
	global $conn;
	mysqli_query($conn, "DELETE FROM source WHERE id = $id");

	return mysqli_affected_rows($conn);
}

function cari($keyword){
	$query = "SELECT * FROM source
				WHERE
				ina LIKE '%$keyword%' OR
				ing LIKE '%$keyword%'
			";
	return query($query);

}

?>