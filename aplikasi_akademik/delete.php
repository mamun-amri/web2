<?php
include "konek.php";
error_reporting(E_ALL ^ E_NOTICE);
$npm = $_GET['npm'];
$nama = $_GET['nama'];


$delete = "DELETE from mahasiswa where npm = '$npm'";
// $hasil = mysqli_query($delete);
$hasil=mysqli_query($connect, $delete);

if ($hasil){
//header ('location:view.php');
echo " <center> <b> <font color = 'red' size = '4'> <p> Data dengan nama $nama Berhasil dihapus </p> </center> </b> </font> <br/>
 <meta http-equiv='refresh' content='2; url= index.php'/>  ";
} else { echo "Data gagal dihapus";
}

?>
