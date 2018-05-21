<?php
include 'koneksi.php';
session_start();

  if (isset($_POST['submit'])){
      $email=$_POST['email'];
      $password=$_POST['password'];
      $sql1="select * from login where password='$password' AND email='$email'";
      $query=mysqli_query($koneksi,$sql1);
      $rows=mysqli_num_rows($query);
      if ($rows==1){
        $_SESSION["login_user"]=$email;
        header("location:masuk_akun.php");
      }
      else
        echo "username atau password belum terdaftar";
  }
 ?>
