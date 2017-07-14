<?php
$host = "localhost";
$user = "root";
$pass = "";
$name = "penjualan";

// melakukan koneksi ke database
$koneksi = new mysqli($host,$user,$pass,$name);

// cek koneksi yang kita lakukan berhasil atau tidak
if ($koneksi->connect_error) {
   // jika terjadi error, matikan proses dengan die() atau exit();
   die('Maaf koneksi gagal: '. $koneksi->connect_error);
}
?>