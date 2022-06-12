<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['admin_name'])){
   header('location:login_form.php');
}

// $aksi = "index_loekisan.php";
// $datagambar = array("1","Mona Lisa","1503","Leonardo da Vinci", "https://upload.wikimedia.org/wikipedia/commons/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg","12343", "Gambar buatan oleh Leorando da Vinci yang mengilustrasikan perempuan bernama Lisa");
$tombol = "Tambah Lukisan";

if (!isset($_GET["id"])) {
	$tombol = "Tambah Lukisan";
	$datagambar = array("","","","","","","");
}else{
	$tombol = "Edit Lukisan";
	$id_gambar = $_GET["id"];
	$select = " SELECT * FROM gambar WHERE id = '$id_gambar' ";
	$result = mysqli_query($conn, $select);
   	while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
		$datagambar[0] = $id_gambar;
		$datagambar[1] = $row["judul"];
		$datagambar[2] = $row["tahun"];
		$datagambar[3] = $row["pelukis"];
		$datagambar[4] = $row["link_gambar"];
		$datagambar[5] = $row["jumlah_like"];
		$datagambar[6] = $row["deskripsi"];
	}

}

?>


<!DOCTYPE html>
<html>

<head>
	<title>Form Loekis</title>
</head>



<link rel="stylesheet" href="css/galeri.css">
<link rel="stylesheet" href="css/home.css">
<!-- <link rel="stylesheet" href="css/menubar.css"> -->
<link rel="stylesheet" href="css/fonts.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
crossorigin="anonymous">
<script src="https://kit.fontawesome.com/5e6fe494a2.js" crossorigin="anonymous"></script>
<link rel="icon" href="images/icon.png" type="image/png">


<body class="body">
	<div class="main-container d-flex">
		<?php include 'sidebar/sidebaradmin.html' ?>
		<div class="content">
			<nav class="navbar navbar-expand-md navbar-dark">
				<div class="container-fluid">
					<div class="d-flex justify-content-between">
						<a class="navbar-brand fs-4" href="#"></a>
						<button class="btn px-1 py-0 open-btn text-white">
							<i class="fa-solid fa-bars fa-lg"></i></button>
						</div>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#toggleMobileMenu" aria-controls="toggleMobileMenu"
						aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					</button> 
					<div class="collapse navbar-collapse" id="toggleMobileMenu">
						<ul class="navbar-nav ms-auto">
							<li class="nav-item">
								<a class="nav-link active pe-3" aria-current="page" href="/home.php">L</a>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<div class="container-sm mt-3 ms-5 pe-5">
				<div class="row">
					<div class="col bg-dark rounded p-4 pt-0">
						<form method="post" action="proses.php">
							<p class="text-start text-white fs-2 fw-bold mt-3">Form Lukisan</p>
							<input type="text" readonly class="form-control-plaintext text-white invisible" id="staticEmail" name="id_loekisan" value="<?php echo $datagambar[0] ?>">
							<div class="input-group mb-3">

								<span class="input-group-text">Judul dan Tahun Loekisan</span>
								<input placeholder="Mona Lisa" value="<?php echo $datagambar[1] ?>" type="text" aria-label="Judul" class="form-control" name="txt_judul">
								<input placeholder="1503" value="<?php echo $datagambar[2] ?>" type="text" aria-label="Tahun" class="form-control" name="txt_tahun">

							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Pelukis</span>
								<input placeholder="Leonardo da Vinci" value="<?php echo $datagambar[3] ?>" type="text" class="form-control" name="txt_pelukis" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Link Gambar</span>
								<input placeholder="https://upload.wikimedia.org/wikipedia/commons/e/ec/Mona_Lisa%2C_by_Leonardo_da_Vinci%2C_from_C2RMF_retouched.jpg" value="<?php echo $datagambar[4] ?>" type="text" class="form-control" name="txt_link" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Jumlah Like</span>
								<input placeholder="110523" value="<?php echo $datagambar[5] ?>" type="text" class="form-control" name="txt_like" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
							</div>
							<div class="form-floating">
								<textarea name="txt_deskripsi" class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"><?php echo $datagambar[6] ?></textarea>
								<!-- <?php echo "Test".$datagambar[6] ?> -->
								<label for="floatingTextarea2">Deskripsi</label>
							</div>
							<div class="d-grid gap-1 mt-2">
								<button class="btn btn-lg btn-primary mt-3 me-0" type="submit"><?php echo $tombol ?></button>
								<a class="btn btn-sm btn-secondary mt-3" href="index_loekisan.php" role="button">Back</a>
							</div>
							
						</form>
					</div>
					<div class="col"></div>
				</div>

			</div>
		</div>









	</body>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
	integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
	crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
	crossorigin="anonymous"></script>

	<script type="text/javascript" src="js/bootstrap.js"></script>

	</html>