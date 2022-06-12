<?php 
include 'config.php';

if (isset($_GET["id"])) {

	$delete = "delete from gambar where id = ".$_GET["id"];
	mysqli_query($conn, $delete);
	// echo mysqli_eriror($conn);
	header('location:index_loekisan.php');
}


?>