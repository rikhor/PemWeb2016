<?php
include "koneksi.php";
session_start();
if (isset($_POST['mendaftar'])){
  $user1=$_POST['user'];
  $email1=$_POST['email'];
  $password1=$_POST['password'];
  $nama1=$_POST['nama'];
  $no_tlpn1=$_POST['no_tlpn'];
  $alamat1=$_POST['alamat'];
  $insert="INSERT INTO `login` (`user`, `email`, `password`, `nama`, `no_tlpn`, `alamat`) VALUES ('$user1', '$email1', '$password1', '$nama1', '$no_tlpn1', '$alamat1')";
  $daftar=mysqli_query($koneksi,$insert);
  if($daftar==1){
    echo 'Akun Berhasil Disimpan';
  }
  else {
    echo'Gagal Mendaftar';
  }
}
 ?>

 <html>
 <a href="login.php">Kembali</a> 
 </html>
