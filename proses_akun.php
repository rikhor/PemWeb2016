<?php
include "koneksi.php";
session_start();
$email_check=$_SESSION['login_user'];
$sql2="SELECT * from akun where email='$email_check'";
$ses_sql=mysqli_query($koneksi,$sql2);
$row=mysqli_fetch_assoc($ses_sql);
$login_session=$row['email'];
$user_session=$row['user'];
$nama_session=$row['nama'];
$no_tlpn_session=$row['no_tlpn'];
$alamat_session=$row['alamat'];
if(!isset($login_session)){
  header('location:masuk_akun.php');
}
 ?>
