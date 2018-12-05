<?php
  error_reporting(0);
  include 'konek.php';

 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>index</title>
  </head>
  <script language="javascript">
  function tanya(){
    if(confirm("apa anda yakin mau menghapus data ini")){
      return true;
    }else{
      return false;
    }
  }
  </script>
  <body width='900px'>
     <center>
       <h1>manampilkan data mahasiswa</h1>
       <hr>
       <form class="" action="tambah.php" method="post">
         <table>
           <tr>
             <center> <td>
               <input type="submit" name="tambah" value="tambah mahasiswa">
             </td>
           </tr>
         </table>
       </form>

       <table border="1" width="600">
         <tr>
           <th>npm</th>
           <th>nama</th>
           <th>jenis kelamin</th>
           <th>prodi</th>
           <th>no hp</th>
           <th>alamat</th>
           <th colspan="2">action</th>
         </tr>

         <?php
          // $queri =mysqli_query($koneksi, "SELECT * FROM mahasiswa");
          // $hasil =MySqli_fetch_array($queri);
          //
          // while($data=MySqli_fetch_array($hasil)){
          //   echo "

          // ==== sesudah ====
          $queri="SELECT * From mahasiswa" ;
          $hasil=mysqli_query($connect, $queri);

          while ($data = mysqli_fetch_array ($hasil)){
            echo "
            <tr>
            <td>".$data['npm']."</td>
            <td>".$data['nama']."</td>
            <td>".$data['jk']."</td>
            <td>".$data['prodi']."</td>
            <td>".$data['no_hp']."</td>
            <td>".$data['alamat']."</td>

            <td><form action='aksi_edit.php' method='GET'>
            <input type='submit' name='tombol' value='edit' class='edit'";
            echo "<input type='hidden' name='npm' value='".$data['npm']."'>
            </form></td>
            <td><form action='delete.php' method='GET'>
            <input type='hidden' name='nama' value='".$data['nama']."'>
            <input type='hidden' name='npm' value='".$data['npm']."'>

            <input type='submit' name='tombol2' value='delete' class='delete' onclick='return tanya(".$data['npm'].")'>
            </form></td>
            </tr>
            ";
            $i++;
          }
          ?>
       </table>
       <div>
         <div class="col-md-4">
         </div>
       </div>
       <div class="row">
         <div class="col-md-12">
         </div>
       </div>
  </body>
</html>
