<?php

@include 'config.php';

if(isset($_POST['submit'])){

   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $pass = mysqli_real_escape_string($conn,$_POST['password']);
   $cpass = mysqli_real_escape_string($conn,$_POST['cpassword']);

   $select = " SELECT * FROM users WHERE username = '$username' && password = '$pass' ";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){

      $error[] = 'Penggoena soedah ada!';
      
   }else{

      if($pass != $cpass){
         $error[] = 'Kata sandi tidak sama!';
      }else{
         $insert = "INSERT INTO users(email, name, username, password, user_type) VALUES('$email','$name','$username','$pass','user')";
         mysqli_query($conn, $insert);
         header('location:login_form.php');
      }
   }

};
?>

<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="css/loginregister.css">
<link rel="stylesheet" href="css/fonts.css">
<link rel="icon" href="images/icon.png" type="image/png">
<title>Register Loekis</title>
</head>
<body>
   
<div class="form-container">

   <form action="" method="post">
      <h3>Sign Up</h3>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="email" name="email" required placeholder="Soerel" class="input">
      <input type="text" name="name" required placeholder="Nama" class="input">
      <input type="text" name="username" required placeholder="Username" class="input">
      <input type="password" name="password" required placeholder="Kata sandi" class="input">
      <input type="password" name="cpassword" required placeholder="Konfirmasi kata sandi" class="input">
      <input type="submit" name="submit" value="Daftar" class="form-btn">
      <p>Soedah poenja akoen? <a href="login_form.php">Masoek.</a></p>
   </form>

</div>

</body>
</html>