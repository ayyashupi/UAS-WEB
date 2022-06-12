<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
	header('location:login_form.php');
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
	<!-- <p><?php echo $_GET['id']; ?></p> -->
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
						<form method="post" action="insert.php">
							<p class="text-start text-white fs-2 fw-bold mt-3">FORM LOEKISAN</p>
							<div class="input-group mb-3">
								<span class="input-group-text">Judul dan Tahun Loekisan</span>
								<input type="text" aria-label="Judul" class="form-control" name="txt_judul">
								<input type="text" aria-label="Tahun" class="form-control" name="txt_tahun">

							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Pelukis</span>
								<input type="text" class="form-control" name="txt_nama_loekisan" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
							</div>
							<div class="input-group mb-3">
								<span class="input-group-text" id="inputGroup-sizing-default">Link Gambar</span>
								<input type="text" class="form-control" name="txt_nama_loekisan" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
							</div>
							<div class="form-floating">
								<textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
								<label for="floatingTextarea2">Deskripsi</label>
							</div>
							<div class="d-grid gap-1 mt-2">
							<button class="btn btn-lg btn-primary mt-3 me-0" type="submit">Tambah Loekisan</button>
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