<?php 
include 'config.php';

if (isset($_GET["id"])) {

	$delete = "call DeleteLaporan(".$_GET["id"].")";
	mysqli_query($conn, $delete);
	// echo mysqli_eriror($conn);
	header('location:index_laporan.php');
}


?>