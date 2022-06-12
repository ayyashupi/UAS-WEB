<?php 
	include 'config.php';

	session_start();

	// $id = mysqli_real_escape_string($conn, $_POST['id_loekisan']);
	$pelapor = mysqli_real_escape_string($conn, $_POST['nama_karya']);
	$email = mysqli_real_escape_string($conn, $_POST['email_karya']);
	$desc = mysqli_real_escape_string($conn, $_POST['teks_karya']);
	// echo "Data : ".$desc;
	if (empty($_SESSION["user_name"])) {
		$id_pengguna = $_SESSION["admin_name"];
		$exit = "location:admin_page.php";
	}else{
		$id_pengguna = $_SESSION["user_name"];
		$exit = "location:home.php";
	}
	// $id_gambar = $_SESSION["id_gambar"];
	// $judul = $_SESSION["judul"];

   	// $select = "SELECT judul FROM gambar WHERE id = $id_gambar";

	// $result = mysqli_query($conn, $select);

	$insert = "call InsertKarya('$pelapor','$email','$desc','$id_pengguna');";
	$_SESSION["id_gambar"] = "";
	$_SESSION["judul"] = "";
	mysqli_query($conn, $insert);
	// echo mysqli_error($conn);
	header($exit);

 ?>