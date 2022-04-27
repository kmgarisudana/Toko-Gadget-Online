<?php 
include "koneksi.php";
  $validasi=mysqli_num_rows(mysqli_query($koneksi, "SELECT * FROM tb_user WHERE userid='$_POST[userid]'"));
  if ($validasi > 0) {
      echo '<script language="javascript">
            alert ("Username Sudah Digunakan");
            window.location="form.php";
            </script>';
       exit();
  }else {
  $password=md5('$_POST[password]');
  mysqli_query($koneksi, "INSERT INTO tb_user (userid, nama, alamat, email, hp, password) 
  VALUES ('$_POST[userid]', '$_POST[nama]', '$_POST[alamat]', '$_POST[email]', '$_POST[hp]', '$password')");
            echo '<script language="javascript">
                  alert ("Registrasi Berhasil!");
                  window.location="form.php";
                  </script>';
                  exit();
        }
?>

