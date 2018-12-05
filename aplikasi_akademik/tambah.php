<?php
  // include "konek.php";
  //
  // $npm   = $data['npm'];
  // $nama = $data['nama'];
  // $jK = $data['jk'];
  // $prodi = $data['prodi'];
  // $nohp = $data['no_hp'];
  // $alamat = $data['alamat'];
?>


<html>
<head>
 <title>Form Tambah Data Mahasiswa Baru</title>


</head>
<body style = 'margin : 20px; font : 16px arial;'>

<?php
echo "
 <center>
 <p> Tambah Mahasiswa Baru </p>

 <form method ='POST' action = 'aksi_tambah.php'>
 <table border = '1' cellspacing = '1' cellpadding = '10'
 style = 'border : #aaa; color: #101; font-family : arial; fot-size : 12px;'>
 <tr>
  <td> NPM </td>
  <td width = '5' align = 'center'> : </td>
  <td><input type = 'text' name = 'NPM' value= ''/></td>
  </tr>
 <tr>
   <td> Nama Mahasiswa </td>
  <td width = '5' align = 'center'> : </td>
  <td> <input type = 'text' name = 'NAMA' value= ''/> </td>
  </tr>
 <tr>
  <td> Jenis Kelamin </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'JK' value= ''/> </td>
  </tr>
 <tr>
  <td> Prodi </td>
  <td align = 'center'> : </td>
  <td> <input type = 'text'  name = 'PRODI' value= ''/> </td>
  </tr>

<tr>
  <td> NoHP </td>
  <td width = '5' align = 'center'> : </td>
  <td> <textarea name = 'NOHP'></textarea> </td>
  </tr>

<tr>
  <td> Alamat </td>
  <td width = '5' align = 'center'> : </td>
  <td> <textarea name = 'ALAMAT'></textarea> </td>
  </tr>



 <tr>
 <td colspan = '3' align = 'center'>
 <input type = 'submit' name = 'submit' value = 'Simpan'/>
 </td>
 </tr>
</table>
<a href = 'index.php'> Kembali </a>
</form>
</body>
</html>
";
?>
