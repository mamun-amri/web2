<?php
error_reporting(0);
include 'konek.php';


$npm    = $_POST['npm'];
$nama   = $_POST['nama'];
$jk     = $_POST['jk'];
$prodi  = $_POST['prodi'];
$nohp   = $_POST['no_hp'];
$alamat = $_POST['alamat'];


  $insert = "INSERT INTO `mahasiswa` (`npm`, `nama`, `prodi`, `jk`, `no_hp`, `alamat`) VALUES ('$npm','$nama','$jk','$prodi','$nohp','$alamat')";
  $hasil  = mysqli_query($connect, $insert);


  if ($hasil) {
      //header ('location:view.php');
      echo " <center> Data Berhasil Simpan <br/>
  <br> Untuk melihat daftar mahasiswa klik <a href = 'index.php'> Disini </a></center>";
  } else {
      echo "Data gagal ditambah";
  }
?>
