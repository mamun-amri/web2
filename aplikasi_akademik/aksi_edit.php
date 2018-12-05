<?php
error_reporting(0);

include 'konek.php';


$npm = $_POST['npm'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$prodi = $_POST['prodi'];
$nohp = $_POST['no_hp'];
$alamat = $_POST['alamat'];


$update = "UPDATE mahasiswa SET npm='$npm',nama='$nama',jk='$jk',prodi='$prodi',no_hp='$nohp',alamat='$alamat' where npm = '$npm'";
$hasil = mysqli_query($connect,$update);




if ($hasil){
//header ('location:view.php');
echo " <center> Data Berhasil diupdate <br/>
<br> Untuk melihat daftar mahasiswa klik <a href = 'index.php'> Disini </a></center>";
} else { echo "Data gagal diupdate";
}

?>
