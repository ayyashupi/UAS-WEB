<?php 
	include 'config.php';

	session_start();

	// $id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$pelapor = mysqli_real_escape_string($conn, $_POST['nama_lapor']);
	$email = mysqli_real_escape_string($conn, $_POST['email_lapor']);
	$desc = mysqli_real_escape_string($conn, $_POST['teks_lapor']);
	// echo "Data : ".$desc;
	$id_pengguna = $_SESSION["user_name"];
	$id_gambar = $_SESSION["id_gambar"];
	$judul = $_SESSION["judul"];

   	// $select = "SELECT judul FROM gambar WHERE id = $id_gambar";

	// $result = mysqli_query($conn, $select);

	$insert = "call InsertLaporan('$pelapor','$email','$desc',$id_gambar,$id_pengguna,'$judul')";
	mysqli_query($conn, $insert);
	// echo mysqli_error($conn);
	header('location:home.php');

 ?>