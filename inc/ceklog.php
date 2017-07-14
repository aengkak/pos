<?php
session_start();
include 'koneksi.php';
$USERNAME = $_POST['USERNAME'];
$PASSWORD = (md5($_POST['PASSWORD']));
// query untuk mendapatkan record dari USERNAME
$query = "select * from tb_admin where USERNAME='$USERNAME'";
$hasil = mysqli_query($koneksi,$query);
$data = mysqli_fetch_array($hasil);
// cek kesesuaian PASSWORD
if ($PASSWORD == $data['PASSWORD'])
{

    // menyimpan USERNAME dan level ke dalam session
    $_SESSION['LEVEL'] = $data['LEVEL'];
    $_SESSION['USERNAME'] = $data['USERNAME'];
    header('location: ../');
}
{
	echo "<script>alert('Login Gagal')
		location.replace('../login.html')</script>";	
		exit;
}
?>