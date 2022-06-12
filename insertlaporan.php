<?php 
	include 'config.php';

	session_start();

	// $id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$pelapor = mysqli_real_escape_string($conn, $_POST['nama_lapor']);
	$email = mysqli_real_escape_string($conn, $_POST['email_lapor']);
	$desc = mysqli_real_escape_string($conn, $_POST['teks_lapor']);
	// echo "Data : ".$desc;

	if (empty($_SESSION["user_name"])) {
		$id_pengguna = $_SESSION["admin_name"];
		$exit = "location:admin_page.php";
	}else{
		$id_pengguna = $_SESSION["user_name"];
		$exit = "location:home.php";
	}
	$id_gambar = $_SESSION["id_gambar"];
	$judul = $_SESSION["judul"];

   	// $select = "SELECT judul FROM gambar WHERE id = $id_gambar";

	// $result = mysqli_query($conn, $select);

	if (empty($id_gambar)) {
		$insert = "call InsertLaporan('$pelapor','$email','$desc',null,$id_pengguna,'$judul')";
	}else{
		$insert = "call InsertLaporan('$pelapor','$email','$desc',$id_gambar,$id_pengguna,'$judul')";
	}

	
	mysqli_query($conn, $insert);
	$_SESSION["id_gambar"] = "";
	$_SESSION["judul"] = "";
	// echo mysqli_error($conn);
	header($exit);

 ?>