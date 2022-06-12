<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
   $datauser = array("","","");
   
}else{
   $id = $_SESSION['user_name'];
   $select = " SELECT * FROM users WHERE id = $id ";
   $result = mysqli_query($conn, $select);
      while($row = mysqli_fetch_array($result)){   //Creates a loop to loop through results
         $datauser[0] = $id;
         $datauser[1] = $row["name"];
         $datauser[2] = $row["email"];
      }
   }

   if (!isset($_GET["id"])) {
      $tombol = "Tambah Lukisan";
      $datagambar = array("","","","","","","");
      $laporan = "";

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
      $_SESSION["id_gambar"] = $id_gambar;
      $_SESSION["judul"] = $datagambar[1];
      $laporan = "Karya Berjudul ".$datagambar[1]." oleh ".$datagambar[3]." Tahun ".$datagambar[2]." Memiliki Masalah : ";
   }



   ?>

   <!DOCTYPE html>
   <html>
   <head>
      <!-- <link rel="stylesheet" type="text/css" href="css/menubar.css"> -->
      <!-- <link rel="stylesheet" type="text/css" href="css/Pesan.css"> -->
      <!-- <link rel="icon" href="images/icon.png" type="image/png"> -->

      <link rel="stylesheet" href="css/kirimpesan.css">
      <link rel="stylesheet" href="css/Pesan.css">
      <link rel="stylesheet" href="css/home.css">
      <link rel="stylesheet" href="css/menubar.css">
      <link rel="stylesheet" href="css/fonts.css">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
      rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      crossorigin="anonymous">
      <script src="https://kit.fontawesome.com/5e6fe494a2.js" crossorigin="anonymous"></script>
      <link rel="icon" href="images/icon.png" type="image/png">
      <title>Kotak Soerat (Kirim Pesan)</title>
   </head>
   <body class="bodykirimpesan">

      <div class="main-container d-flex">
         <div class="sidebar" id="side_nav">
            <div class="header-box px-2 pt-3 pb-4 d-flex justify-content-between">
               <h1 class="fs-4"><span class="text-white px-3 py-2">Menoe</span></h1>
               <button class="btn close-btn px-1 py-0 text-white">
                  <i class="fa-solid fa-bars fa-xl "></i></button>
               </div>
               <ul class="list-unstyled px-2">
                  <li class=""><a href="galeri.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-images"></i> Baki Tjitra</a></li>
                  <li class="active"><a href="#" class="text-decoration-none px-3 py-2 d-block">
                     <span><i class="fa-solid fa-envelope"></i> Kotak Soerat</span>
                     <!-- <span class="bg-dark rounded-pill text-white py-0 px-2">01</span> -->
                  </a>
               </li>
               <li class=""><a href="musik.php" class="text-decoration-none px-3 py-2 d-block d-flex justify-content-between">
                  <span><i class="fa-solid fa-compact-disc"></i> Irama Nusantara</span></a></li>
               </ul>
               <hr class="h-color mx-2">
               <ul class="list-unstyled px-2">
                  <li class=""><a href="akun.php" class="text-decoration-none px-3 py-2 d-block"><i class="fa-solid fa-user"></i> Akoen</a></li>
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
                              <a class="nav-link active pe-3" aria-current="page" href="/home.php">L</a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </nav>
               <svg width="100%" height="100%" style="position: absolute; left:7%;top: 10%;">
                  <foreignObject width="100%" height="100%" filter="">
                     <div class="tabset">
                        <!-- Tab 1 -->
                        <input type="radio" name="tabset" id="tab1" aria-controls="Lapor" checked>
                        <label for="tab1" class="head text-white">Lapor</label>
                        <!-- Tab 2 -->
                        <input type="radio" name="tabset" id="tab2" aria-controls="Permintaan">
                        <label for="tab2" class="head text-white">Permintaan Upload Karya</label>
                        <!-- Tab 3 -->
                        <input type="radio" name="tabset" id="tab3" aria-controls="PesanKesan">
                        <label for="tab3" class="head text-white">Pesan</label>

                        <div class="tab-panels">

                           <section id="Lapor" class="tab-panel text-white">
                              <form action="insertlaporan.php" method="POST">
                                 <p class="head text-white" style="font-size: 160%; margin-bottom: 0%;">Laporan masalah</p>
                                 <p class="text-white">Laporkan masalah jika ada masalah pada website dipersilahkan untuk melaporkan ke kami dengan senang hati kami menerima laporan sebagai pengembangan website kami. Dalam bentuk kami bisa berterima kasih kami membutuhkan identitas pelapor sehingga kami bisa memberikan feedback atas laporan yang telah sudah kami dapatkan.</p>
                                 <!-- <p class="head">Nama</p> -->
                                 <p><input placeholder="Nama" type="text" name="nama_lapor" size="40" id="NamaP" value="<?php echo $datauser[1] ?>"></p>
                                 <!-- <p class="head">Surel</p> -->
                                 <p><input placeholder="Surel" type="text" name="email_lapor" size="40" id="EmailP" value="<?php echo $datauser[2] ?>"></p>
                                 <!-- <p class="head">Deskripsi Laporan</p> -->
                                 <p><textarea placeholder="Deskripsi Laporan" rows="7" cols="40" name="teks_lapor" id="DeskP"><?php echo $laporan; ?></textarea></p>
                                 <button type="submit" class="button" style="position: absolute; left:38%;top: 50%;" id="btnPesan">Submit</button>
                              </form>
                           </section>


                           <section id="Permintaan" class="tab-panel">
                              <form action="insertkarya.php" method="post">
                                 <p class="head text-white" style="font-size: 160%; margin-bottom: 0%;">Permintaan Mengunggah Karya</p>
                                 <p class="text-white">Kami membuka peluang untuk masyarakat umum yang ingin mempublikasikan karyanya. pada form ini dipersilahkan untuk mengirim soerat terbuka kepada kami agar kami bisa menampilkan karya mu.</p>
                                 <!-- <p class="head">Nama</p> -->
                                 <p><input placeholder="Nama" type="text" name="nama_karya" size="40" id="NamaK" value="<?php echo $datauser[1] ?>"></p>
                                 <!-- <p class="head">Surel</p> -->
                                 <p><input placeholder="Surel" type="text" name="email_karya" size="40" id="EmailK" value="<?php echo $datauser[2] ?>"></p>
                                 <!-- <p class="head">Deskripsi Laporan</p> -->
                                 <p><textarea placeholder="Deskripsi Permintaan" rows="7" cols="40" name="teks_karya" id="DeskK"></textarea></p>
                                 <button class="button" style="position: absolute; left:38%;top: 50%;" id="btnKarya">Submit</button>
                              </form>
                           </section>

                           <section id="PesanKesan" class="tab-panel">
                              <form action="insertfeedback.php" method="post">
                                 <p class="head text-white" style="font-size: 160%; margin-bottom: 0%;">Pesan Kesan</p>
                                 <p class="text-white">Salah satu kemampuan manusia yang sangat menakjubkan adalah kemampuan untuk mengkomunikasikan perasaanya kepada manusia lainya. Tab ini membantu kamu untuk mengkomunikasikan apa yang ada di hati mu kepada kami.</p>
                                 <!-- <p class="head">Nama</p> -->
                                 <p><input placeholder="Nama" type="text" name="nama_feedback" size="40" id="NamaD" value="<?php echo $datauser[1] ?>"></p>
                                 <!-- <p class="head">Surel</p> -->
                                 <p><input placeholder="Surel" type="text" name="email_feedback" size="40" id="EmailD" value="<?php echo $datauser[2] ?>"></p>
                                 <!-- <p class="head">Deskripsi Laporan</p> -->
                                 <p><textarea placeholder="Pesan" rows="7" cols="40" name="teks_feedback" id="DeskD"></textarea></p>
                                 <button class="button" style="position: absolute; left:38%;top: 50%;" id="btnDesk" onclick="TampilNotif()">Submit</button>
                              </form>
                           </section>
                        </div>
                     </div>

                     <div class="lukis"></div>
                     <!-- <h2><strong>Loekis</h2> -->

                        <div class="tab-container"></div>

                        <div class="notif" id="notif">
                           <!-- <span class="close" id="close">&times;</span> -->
                           <span class="close" id="close2">&times;</span>
                           <div class="wadahnotif" id="wadah">
                              <span class="close" id="close">&times;</span>
                              <p class="caption" id="caption">
                              Terima Kasih Telah Mengirimkan Laporan</p>
                              <p class="desk" id="desk">

                              </p>
                           </div>


                        </div>
                     </foreignObject>
                  </svg>

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

            <!-- <script type="text/javascript">
      // alert("Test 1");
      var btnPesan = document.getElementById("btnPesan");
      var txtnamap   = document.getElementById("NamaP");
      var txtemailp  = document.getElementById("EmailP");
      var txtdeskp   = document.getElementById("DeskP");

      var btnKarya = document.getElementById("btnKarya");
      var txtnamak   = document.getElementById("NamaK");
      var txtemailk  = document.getElementById("EmailK");
      var txtdeskk   = document.getElementById("DeskK");

      var btnDesk = document.getElementById("btnDesk");
      var txtnamad = document.getElementById("NamaD");
      var txtemaild = document.getElementById("EmailD");
      var txtdeskd = document.getElementById("DeskD");

      btnPesan.onclick = function(){
         if (check(txtnamap,txtemailp,txtdeskp)) {
            // alert("Laporan Berhasil dikirim");
            TampilNotif(txtnamap,txtemailp,txtdeskp,"Laporan");
            txtnamap.value = "";
            txtemailp.value = "";
            txtdeskp.value = "";
            
         }
         
      }

      btnKarya.onclick = function(){
         if (check(txtnamak,txtemailk,txtdeskk)) {
            // alert("Karya Berhasil disubmit");
            TampilNotif(txtnamak,txtemailk,txtdeskk,"Permintaan");
            txtnamak.value = "";
            txtemailk.value = "";
            txtdeskk.value = "";
         }  
      }

      btnDesk.onclick = function(){
         if (check(txtnamad,txtemaild,txtdeskd)){
            // alert("Pesan Berhasil dikirim");
            TampilNotif(txtnamad,txtemaild,txtdeskd,"Feedback");
            txtnamad.value = "";
            txtemaild.value = "";
            txtdeskd.value = "";
         }
      }

      function check(txt1,txt2,txt3) {
         if(txt1.value != ""&&txt2.value != ""&&txt3.value != ""){
            return true;
         }else{
            // alert("Data Belum Komplit");
            return false;
         }  
      }

      var notif = document.getElementById("notif");
      var wadah = document.getElementById("wadah");
      var isinotif = document.getElementById("caption");
      var desk = document.getElementById("desk");

      function TampilNotif(txtnama,txtemail,txtdesk,tipe) {
         notif.style.display = "block";
         isinotif.innerHTML = "Terima Kasih "+txtnama.value+" Atas "+tipe+"nya<br><br>" +
         "Email : "+txtemail.value+
         "<br><br> "; 
         
         desk.innerHTML = "Deskripsi "+tipe+" : <br>"+ txtdesk.value;
         var text = txtdesk.value;

         if(text.length > 165){
            wadah.style.overflowY = "Scroll";
         }else{
            wadah.style.overflowY = "none";
         }
      }

      var span = document.getElementById("close");
      var span2 = document.getElementById("close2");
      span.onclick = function(){
         notif.style.display = 'none';
      }

      span2.onclick = function(){
         notif.style.display = 'none';
      }
      var body = document.getElementsByTagName('foreignObject')[0];
      var button = document.getElementById("light");
      var light = false;

      button.onclick = function () {
   // body...
   if(light){
      // body.setAttribute('filter', '');
      body.style.filter = "invert(0%)";
      // body.style.backgroundImage = "url('images/kopsurat.jpg')";
      body.style.backgroundImage = "url('images/kopsurat.png')";
      body.style.backgroundSize = "cover";
      light = false;
      // rpt1.style.filter = "invert(0%)"
   }else{
            // body.setAttribute('filter', 'url(#blur-and-invert)');
            body.style.filter = "invert(100%)";
      // body.style.backgroundImage = "url('images/kopsurat.jpg')";
      body.style.backgroundImage = "url('images/kopsurat.png')";
      body.style.backgroundSize = "cover";
      light = true;
      // rpt1.style.filter = "invert(100%)";
   }     
}

</script> -->
</body>
</html>