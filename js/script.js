$(document).ready(function(){

	//hilangkan tombol cari
	$('#tombol-cari').hide();

	//event ketika keyword ditulis
	//ajax menggunakan load
	$('#keyword').on('keyup', function(){
		$('#container').load('ajax/kamus.php?keyword=' + $('#keyword').val());
	});

});