<?php 
@include 'config.php';

if(!isset($_POST['id_loekisan'])){

	// $id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$judul = mysqli_real_escape_string($conn, $_POST['txt_judul']);
	$tahun = mysqli_real_escape_string($conn, $_POST['txt_tahun']);
	$pelukis = mysqli_real_escape_string($conn, $_POST['txt_pelukis']);
	$link = mysqli_real_escape_string($conn,$_POST['txt_link']);
	$desc = mysqli_real_escape_string($conn,$_POST['txt_deskripsi']);
	$jumlah = mysqli_real_escape_string($conn,$_POST['txt_like']);

   // $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

	// $result = mysqli_query($conn, $select);

	$insert = "INSERT INTO gambar(judul, tahun, pelukis, jumlah_like,link_gambar, deskripsi) VALUES('$judul','$tahun','$pelukis','$jumlah','$link','$desc')";
	mysqli_query($conn, $insert);
	header('location:index_loekisan.php');
}else{
	echo "Masuk";
	$id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$judul = mysqli_real_escape_string($conn, $_POST['txt_judul']);
	$tahun = mysqli_real_escape_string($conn, $_POST['txt_tahun']);
	$pelukis = mysqli_real_escape_string($conn, $_POST['txt_pelukis']);
	$link = mysqli_real_escape_string($conn,$_POST['txt_link']);
	$desc = mysqli_real_escape_string($conn,$_POST['txt_deskripsi']);
	$jumlah = mysqli_real_escape_string($conn,$_POST['txt_like']);

   // $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

	// $result = mysqli_query($conn, $select);

	$edit = "update gambar set judul = '$judul', tahun = '$tahun', pelukis = '$pelukis', link_gambar = '$link', deskripsi = '$desc', jumlah_like = ".$jumlah." where id = $id";
	mysqli_query($conn, $edit);
	// echo mysqli_error($conn);
	header('location:index_loekisan.php');
}

?>