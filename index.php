<?php
$servername  = "localhost";
$username = "root";
$password = "";
$database = "belajar_java_db";

$sql = mysqli_connect($servername,$username,$password,$database);

if (!sql) {
  die("Koneksi Gagal");
}

 ?>
