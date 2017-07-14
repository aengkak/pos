<?php
session_start();
error_reporting (E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));
	include"koneksi.php";
$query = mysqli_query($koneksi,"select * from tb_barang where ID_BARANG='$_POST[ID_BARANG]'");
	$res = mysqli_fetch_array($query);
	$cek = $res['STOK'] + $_POST['JML_BELI'];	
		
		if(isset($_GET['delete'])){
			$q = mysqli_query($koneksi,"delete from tb_barang where ID_BARANG = '$_GET[delete]'");
		
		}else if(isset($_POST['update'])) {
			$q = mysqli_query($koneksi,"UPDATE tb_barang SET ID_BARANG ='$_POST[ID_BARANG]',
			NAMA_BARANG = '$_POST[NAMA_BARANG]', ID_KATEGORI = '$_POST[ID_KATEGORI]', BELI = '$_POST[BELI]',
			JUAL = '$_POST[JUAL]', STOK = '$_POST[STOK]'
			WHERE ID_BARANG ='$_POST[ID_BARANG]'");
		}else if(isset($_POST['stok'])) {
			$q = mysqli_query($koneksi, "insert into tb_beli(ID_BELI,ID_SUPPLIER,ID_BARANG,TGL_BELI,JML_BELI,HARGA_SATUAN,TOTAL_BELI,USERNAME)
			VALUES (null,'$_POST[ID_SUPPLIER]','$_POST[ID_BARANG]',now(),'$_POST[JML_BELI]','$_POST[HARGA_SATUAN]','$_POST[TOTAL_BELI]','$_POST[USERNAME]')");
			$q2 = mysqli_query($koneksi, "update tb_barang set ID_BARANG ='$_POST[ID_BARANG]',BELI = '$_POST[HARGA_SATUAN]', STOK = '$cek' where ID_BARANG ='$_POST[ID_BARANG]'");
		}else{
			$q = mysqli_query($koneksi,"INSERT INTO tb_barang(ID_BARANG,NAMA_BARANG,ID_KATEGORI,BELI,JUAL,STOK)
			VALUES(null,'$_POST[NAMA_BARANG]','$_POST[ID_KATEGORI]','0','$_POST[JUAL]','0')");			
		}	

	echo "<script>alert('berhasil di simpan')
		location.replace('../index.php?p=barang')</script>";	
		exit;
?>