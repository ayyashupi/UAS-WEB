<?php 
include 'config.php';

if (isset($_GET["id"])) {

	$delete = "call DeleteGambar(".$_GET["id"].")";
	mysqli_query($conn, $delete);
	// echo mysqli_eriror($conn);
	header('location:index_loekisan.php');
}


?>