<?php
include "koneksi.php";
session_start();
$email_check=$_SESSION['login_user'];
if (isset($_POST['submit'])){
  $user=$_POST['user'];
  $nama=$_POST['nama'];
  $no_tlpn=$_POST['no_tlpn'];
  $alamat=$_POST['alamat'];
  $edit="UPDATE login SET user='$user',nama='$nama',no_tlpn='$no_tlpn',alamat='$alamat' Where email='$email_check'";
  $update=mysqli_query($koneksi,$edit);
  if($edit==0){
    echo 'Akun Berhasil Disimpan';
    echo '<a href="masuk_akun.php">kembali</a>';
  }
  else {
    echo'Gagal';
  }
}
 ?>
