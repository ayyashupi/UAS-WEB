<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

$datagambar = null;
$select = " SELECT * FROM gambar";
$result = mysqli_query($conn, $select);
// $jumlah = 1;
$jumlah = 0;
while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
	$datagambar[$jumlah] = $row;
	$jumlah++;
}

?>


<!DOCTYPE html>
<html>



<head>
	<title>Form Loekis</title>
</head>



<link rel="stylesheet" href="css/galeri.css">
<link rel="stylesheet" href="css/index_loekisan.css">
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

         <table class="table table-dark">
         	<thead>
         		<tr>
         			<th scope="col">No.</th>
         			<th scope="col">ID Loekisan</th>
         			<th scope="col">Judul Loekisan</th>
         			<th scope="col">Tahun Loekisan</th>
         			<th scope="col">Pelukis</th>
         			<th scope="col">Loekisan</th>
         			<th scope="col">Action</th>
         		</tr>
         	</thead>
         	<tbody class="align-middle">
         			<?php for ($i=0; $i < $jumlah ; $i++) { 
         				echo "<tr>";
         				echo "<th scope='row'>".($i+1)."</th>";
         				echo "<td><input type='text' readonly class='form-control-plaintext text-white' id='staticEmail' value='"."LKS00".$datagambar[$i]["id"]."'></td>";
         				echo "<td>".$datagambar[$i]["judul"]."</td>";
         				echo "<td>".$datagambar[$i]["tahun"]."</td>";
         				echo "<td>".$datagambar[$i]["pelukis"]."</td>";
         				echo "<td class = 'colgambar'> <img src='".$datagambar[$i]["link_gambar"]."' alt='Gambar'> </td>";
         				echo "<td>";
         				echo "<a href='form_loekisan.php?id=".$datagambar[$i]["id"]."' class='text-decoration-none py-2 link-primary'><i class='fa-solid fa-images'></i> Edit</a>";
         				echo "<a href='hapus.php?id=".$datagambar[$i]["id"]."' class='text-decoration-none px-3 py-2 link-danger'><i class='fa-solid fa-images'></i> Delete</a>";
         				echo "</td>";
         				echo "</tr>";
         				
         			} ?>
         		
         	</tbody>
         </table>
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