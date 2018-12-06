<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "koperasi_pds";
$konek = new mysqli ($server, $username, $password, $database) or die ("Gagal konek ke server MySQL" .mysql_error());
