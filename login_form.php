<?php

@include 'config.php';

session_start();

if(isset($_POST['submit'])){

   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = mysqli_real_escape_string($conn, $_POST['password']);

   $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $row = mysqli_fetch_array($result);

      if($row['user_type'] == 'admin'){

         $_SESSION['admin_name'] = $row['id'];
         header('location:admin_page.php');

      }elseif($row['user_type'] == 'user'){

         $_SESSION['user_name'] = $row['id'];
         header('location:home.php');

      }
     
   }else{
      $error[] = 'Informasi login ada yang salah!';
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/loginregister.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="icon" href="images/icon.png" type="image/png">
<title>Login Loekis</title>
</head>
<body class="body">
   
<div class="form-container">
   <form action="" method="post">
      <h3>Login</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="username" required placeholder="Username" class="input">
      <input type="password" name="password" required placeholder="Kata sandi" class="input">
      <input type="submit" name="submit" value="Masoek" class="form-btn">
      <p><a href="register_form.php">Daftar</a></p>
   </form>

</div>

</body>
</html>