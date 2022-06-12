<?php 
include 'config.php';

if (isset($_GET["id"])) {

	$delete = "call DeleteFeedback(".$_GET["id"].")";
	mysqli_query($conn, $delete);
	// echo mysqli_eriror($conn);
	header('location:index_feedback.php');
}


?>