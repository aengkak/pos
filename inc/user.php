<?php
session_start();
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	include"koneksi.php";
	
		
		if(isset($_GET['delete'])){
		$q = mysqli_query($koneksi,"delete from tb_admin where USERNAME = '$_GET[delete]'");
		
		}else if(isset($_POST['update'])) {
		$q = mysqli_query($koneksi,"UPDATE tb_admin SET USERNAME ='$_POST[USERNAME]',
		PASSWORD = '".md5($_POST[PASSWORD])."',
		LEVEL = '$_POST[LEVEL]',
		ALAMAT = '$_POST[ALAMAT]',
		NO_TELP = '$_POST[NO_TELP]' WHERE USERNAME ='$_POST[USERNAME]'");
		}else{
			$q = mysqli_query($koneksi,"INSERT INTO tb_admin (USERNAME, PASSWORD, LEVEL, ALAMAT, NO_TELP)
			VALUES ('$_POST[USERNAME]','".md5($_POST[PASSWORD])."', '$_POST[LEVEL]', '$_POST[ALAMAT]','$_POST[NO_TELP]')");
			
		}	

	echo "<script>alert('berhasil di simpan')
		location.replace('../index.php?p=user')</script>";	
		exit;
?>