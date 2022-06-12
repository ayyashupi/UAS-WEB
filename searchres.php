<?php
$searchEr = '';
$hasil_cari='';
@include 'config.php';

session_start();

if(isset($_SESSION['user_name'])||isset($_POST['save']))
{
    if(isset($_SESSION['user_name'])||isset($_POST['save']))
{
    if(!empty($_POST['search']))
    {
        $search = $_POST['search'];
        $datagambar = null;
        $select = " select * from gambar where id like '%$search%' or judul like '%$search%'";
        $result = mysqli_query($conn, $select);
        // $jumlah = 1;
        $jumlah = 0;
        while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
        $datagambar[$jumlah] = $row;
        $jumlah++;
}
    }
    else
    {
        $searchEr = "Tidak dapat ditemukan";
    }  
}
}

?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/akun.css">
<link rel="stylesheet" href="css/home.css">
<!-- <link rel="stylesheet" href="/css/menubar.css"> -->
<link rel="stylesheet" href="css/fonts.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
crossorigin="anonymous">
<script src="https://kit.fontawesome.com/5e6fe494a2.js" crossorigin="anonymous"></script>
<link rel="icon" href="images/icon.png" type="image/png">
<title>Akoen (Akun)</title>
</head>
<body class="body">

<div class="main-container d-flex">
      <div class="sidebar" id="side_nav">
         <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
            <h1 class="fs-4"><span class="text-white px-3 py-2">Menoe</span></h1>
            <button class="btn close-btn px-1 py-0 text-white">
               <i class="fa-solid fa-bars fa-xl "></i></button>
         </div>
         <ul class="list-unstyled px-2">
            <li class=""><a href="galeri.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-images"></i> Baki Tjitra</a></li>
            <li class=""><a href="kirimpesan.php" class="text-decoration-none px-3 py-2 d-block">
               <span><i class="fa-solid fa-envelope"></i> Kotak Soerat</span>
               <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">01</span> -->
            </a>
            </li>
            <li class=""><a href="musik.php" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
            <span><i class="fa-solid fa-compact-disc"></i> Irama Nusantara</span></a></li>
         </ul>
         <hr class="h-color mx-2">
         <ul class="list-unstyled px-2">
            <li class="active"><a href="akun.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user"></i> Akoen</a></li>
            <li class=""><a href="logout.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-arrow-right-from-bracket"></i> Keloear</a></li>
         </ul>
      </div>
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
                     <a class="nav-link active pe-3" aria-current="page" href="home.php">L</a>
                  </li>
               </ul>
            </div>
            </div>
         </nav>

    </div>
</div>
         </div>
      </div>
   </div>

   

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"
integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
crossorigin="anonymous"></script>

<script>
$('.sidebar ul li').on('click', function(){
    $('.sidebar ul li.active').removeClass('active');
    $(this).addClass('active');
});

$('.open-btn').on('click', function(){
   $('.sidebar').addClass('active');
   $('.open-btn').hide();
   $('.close-btn').show();
});
$('.close-btn').on('click', function(){
   $('.sidebar').removeClass('active');
   $('.close-btn').hide();
   $('.open-btn').show();
});

</script>
</body>
</html>


</div>

<link rel="stylesheet" href="bootstrap.css" crossorigin="anonymous">
<!-- Optional theme -->
<link rel="stylesheet" href="bootstrap-theme.css" crossorigin="anonymous">
<style>
.searchbox{
    width:70%;
    height:30%;
    padding:20px;
}
</style>
</head>
 
<body>
    <div class="searchbox">
    <form class="form-horizontal" action="#" method="post">
    <div class="row">
        <div class="form-group">
            <label class="control-label col-sm-4" for="email"><b>Search Employee Information:</b>:</label>
            <div class="col-sm-4">
              <input type="text" class="form-control" name="search" placeholder="search here">
            </div>
            <div class="col-sm-2">
              <button type="submit" name="save" class="btn btn-success btn-sm">Submit</button>
            </div>
        </div>
        <div class="form-group">
            <span class="error" style="color:red;">* <?php echo $searchEr;?></span>
        </div>
         
    </div>
    </form>
    <br/><br/>
    <h3><u>Search Result</u></h3><br/>
    <div class="row row-cols-3 px-3 pb-3">          
                <?php
                 if(empty($datagambar))
                 {
                    echo '<tr>No data found</tr>';
                 }
                 
                        ?>
      <?php 
      for ($i=0; $i < $jumlah; $i++) { 
        # code...
        echo "<div class='col'>";
        echo "<div class='bg-black rounded shadow-sm'><img src='".$datagambar[$i]["link_gambar"]."' alt='' class='img-fluid card-img-top'>";
        echo "<div class='p-4'>";
        echo "<h5> <a href='' class='text-light'>".$datagambar[$i]["judul"]."</a></h5>";
        echo "<p class='small text-muted-light mb-0'>".$datagambar[$i]["pelukis"]." - ".$datagambar[$i]["tahun"]."</p>";
        echo "<div class='d-flex align-items-center justify-content-between rounded-pill bg-dark px-3 py-2 mt-4'>";
        echo "<p class='small mb-0'><i class='fa fa-picture-o mr-2'></i><span class='font-weight-bold'>JPG</span></p>";
        echo "<div class='badge badge-danger px-3 rounded-pill font-weight-normal'>New</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
      }
       ?>
             
         
    
    </div>
</div>
<script src="jquery-3.2.1.min.js"></script>
<script src="bootstrap.min.js"></script>
</body>
</html>