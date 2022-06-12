<?php 
@include 'config.php';

if($_POST['id_loekisan']==""){
	echo "Tambah";
	// $id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$judul = mysqli_real_escape_string($conn, $_POST['txt_judul']);
	$tahun = mysqli_real_escape_string($conn, $_POST['txt_tahun']);
	$pelukis = mysqli_real_escape_string($conn, $_POST['txt_pelukis']);
	$link = mysqli_real_escape_string($conn,$_POST['txt_link']);
	$desc = mysqli_real_escape_string($conn,$_POST['txt_deskripsi']);
	$jumlah = mysqli_real_escape_string($conn,$_POST['txt_like']);

   // $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

	// $result = mysqli_query($conn, $select);

	$insert = "call InsertGambar('$link','$judul','$tahun','$pelukis','$jumlah','$desc')";
	mysqli_query($conn, $insert);
	// mysqli_error($conn);
	header('location:index_loekisan.php');
}else{
	echo "Edit";
	$id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$judul = mysqli_real_escape_string($conn, $_POST['txt_judul']);
	$tahun = mysqli_real_escape_string($conn, $_POST['txt_tahun']);
	$pelukis = mysqli_real_escape_string($conn, $_POST['txt_pelukis']);
	$link = mysqli_real_escape_string($conn,$_POST['txt_link']);
	$desc = mysqli_real_escape_string($conn,$_POST['txt_deskripsi']);
	$jumlah = mysqli_real_escape_string($conn,$_POST['txt_like']);

   // $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

	// $result = mysqli_query($conn, $select);

	$edit = "call UpdateGambar($id,'$link','$judul','$tahun','$pelukis','$jumlah','$desc')";
	mysqli_query($conn, $edit);
	// echo mysqli_error($conn);
	header('location:index_loekisan.php');
}

?>