<?php
session_start();
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	include"koneksi.php";
	
		
		if(isset($_GET['delete'])){
		$q = mysqli_query($koneksi,"delete from tb_supplier where ID_SUPPLIER = '$_GET[delete]'");
		
		}else if(isset($_POST['update'])) {
		$q = mysqli_query($koneksi,"UPDATE tb_supplier SET ID_SUPPLIER ='$_POST[ID_SUPPLIER]',
		NAMA_SUPPLIER = '$_POST[NAMA_SUPPLIER]', ALAMAT = '$_POST[ALAMAT]', TELP = '$_POST[TELP]'
		WHERE ID_SUPPLIER ='$_POST[ID_SUPPLIER]'");
		}else{
			$q = mysqli_query($koneksi,"INSERT INTO tb_supplier(ID_SUPPLIER,NAMA_SUPPLIER,ALAMAT,TELP)
			VALUES(null,'$_POST[NAMA_SUPPLIER]','$_POST[ALAMAT]','$_POST[TELP]')");			
		}	

	echo "<script>alert('berhasil di simpan')
		location.replace('../index.php?p=supplier')</script>";	
		exit;
?>