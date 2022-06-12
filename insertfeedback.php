<?php 
	include 'config.php';

	session_start();

	// $id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$pelapor = mysqli_real_escape_string($conn, $_POST['nama_feedback']);
	$email = mysqli_real_escape_string($conn, $_POST['email_feedback']);
	$desc = mysqli_real_escape_string($conn, $_POST['teks_feedback']);
	// echo "Data : ".$desc;
	
	if (empty($_SESSION["user_name"])) {
		$id_pengguna = $_SESSION["admin_name"];
		$exit = "location:home.php";
	}else{
		$id_pengguna = $_SESSION["user_name"];
		$exit = "location:admin_page.php";
	}
	$id_gambar = $_SESSION["id_gambar"];
	$judul = $_SESSION["judul"];
	if (empty($id_gambar)) {
		$insert = "call InsertFeedback('$pelapor','$email','$desc', null, $id_pengguna,'$judul')";
	}else{
		$insert = "call InsertFeedback('$pelapor','$email','$desc', $id_gambar, $id_pengguna,'$judul')";
	}


   	// $select = "SELECT judul FROM gambar WHERE id = $id_gambar";

	// $result = mysqli_query($conn, $select);

	
	mysqli_query($conn, $insert);
	echo "query : ".$insert;
	$_SESSION["id_gambar"] = "";
	$_SESSION["judul"] = "";
	// echo mysqli_error($conn);
	header($exit);

 ?>