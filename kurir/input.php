<?php
include"koneksi.php";


$kode = $_POST['kode'];
$jnsbrg = $_POST['jnsbrg'];
$tgl = $_POST['tgl'];
$pengirim = $_POST['pengirim'];
$penerima = $_POST['penerima'];
$nohp = $_POST['nohp'];
$alamat = $_POST['alamat'];


$query = "INSERT INTO pengiriman SET
                kode = '$kode',
								jnsbrg = '$jnsbrg',
								tgl = '$tgl',
								pengirim = '$pengirim',
                penerima = '$penerima',
								nohp = '$nohp',
								alamat = '$alamat'
								";

mysqli_query($koneksi, $query)
or die ("Gagal Perintah SQL".mysql_error());
header('location:index.php');

?>
