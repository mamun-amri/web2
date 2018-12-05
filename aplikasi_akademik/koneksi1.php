<?php
$Host = "localhost";
$User = "root";
$Pass = "";
$Db_name = "akademik";
$mysqli = new mysqli( $Host, $User, $Pass, $Db_name );
  if ($mysqli->connect_error){
  echo 'Gagal koneksi ke database';
} else {
};
?>
