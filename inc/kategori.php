<?php
session_start();
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	include"koneksi.php";
	
		
		if(isset($_GET['delete'])){
		$q = mysqli_query($koneksi,"delete from tb_kategori where ID_KATEGORI = '$_GET[delete]'");
		
		}else if(isset($_POST['update'])) {
		$q = mysqli_query($koneksi,"UPDATE tb_kategori SET ID_KATEGORI ='$_POST[ID_KATEGORI]',
		NAMA_KATEGORI = '$_POST[NAMA_KATEGORI]' WHERE ID_KATEGORI ='$_POST[ID_KATEGORI]'");
		}else{
			$q = mysqli_query($koneksi,"INSERT INTO tb_kategori(ID_KATEGORI,NAMA_KATEGORI)
			VALUES(null,'$_POST[NAMA_KATEGORI]')");
			
		}	

	echo "<script>alert('berhasil di simpan')
		location.replace('../index.php?p=kategori')</script>";	
		exit;
?>