<?php
error_reporting(0);
include 'konek.php';
?>
 <html>
 <title> Data Mahasiswa </title>
 <script language="javascript">
 function tanya() {
 if (confirm ("Apakah Anda yakin akan menghapus data ini ?")) {
 return true;
  } else {
   return false;
  }
  }
</script>
<body width='900px'>
<center>
<h1>MENAMPILKAN DATA MASISWA </h1>
<hr>
<form action='tambah.php' method='POST'>
<table >
 <tr>
 <center><td> <input type='submit' name='tambah' value='Tambah Mahasiswa'> </td>
 </tr>
</table>
</form>

<table  border='1' Width='600' >
<tr>
 <th> NPM </th>
 <th> Nama </th>
 <th> Jenis Kelamin </th>
 <th> Prodi </th>
<th> NoHP </th>
 <th> Alamat </th>
 <th colspan='2'> Action </th>
</tr>

<?php
// Perintah untuk menampilkan data
$queri="SELECT * From mahasiswa" ;
$hasil=mysqli_query($connect, $queri);
// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array ($hasil)){
 echo "
  <tr>
  <td>".$data['npm']."</td>
  <td>".$data['nama']."</td>
  <td>".$data['jk']."</td>
 <td>".$data['prodi']."</td>
  <td>".$data['nohp']."</td>
  <td>".$data['alamat']."</td>

  <td> <form action = 'edit.php' method = 'GET'>
  <input type = 'submit' name = 'tombol' value = 'Edit' class = 'edit'>"; //style='background: linear-gradient(to bottom, #0088CC, #0044CC); border: 1px solid #0088CC; color: #FFF; margin: 4px 10px; padding: 5px; width: 50px; height: 30px;'>     style='background: linear-gradient(to bottom, #0088CC, #0044CC); border: 1px solid #0088CC; color: #FFF; margin: 4px 10px; padding: 5px; width: 50px; height: 30px;'>
echo " <input type = 'hidden' name = 'npm' value = '".$data['npm']."'>
  </form></td>
  <td> <form action = 'delete.php' method = 'GET'>
  <input type = 'hidden' name = 'nama' value = '".$data['nama']."'>
  <input type = 'hidden' name = 'npm' value = '".$data['npm']."'>
  <input type = 'submit' name = 'tombol2' value = 'Delete' class = 'delete'
  onclick='return tanya(". $data['npm'].")'>
    </form></td>
  </tr>
  ";
 $i++;
}
?>
</table>
</div>
<div class="col-md-4">
</div>
</div>
<!-- row -->
<div class="row">
<div class="col-md-12">
</div>
</div>
</body>
</html>
