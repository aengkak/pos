<?php
	session_start();
	error_reporting(0);
    require_once("koneksi.php");
	$tgl=date("Y-m-d");
	$USERNAME = $_SESSION['USERNAME'];
	$id=$_GET['id'];
	$sql=mysqli_query($koneksi, "select * from tb_barang where ID_BARANG = '$id'");
	$cek=mysqli_fetch_array($sql);
	$stok=mysqli_num_rows($sql);
	$act=$_GET['act'];
	$link = "<script>window.open('../kasir')";
	
	if($act == "add"){
		if($cek['STOK']==0){
			echo "<script>alert('Stok Habis')
			location.replace('../kasir')</script>";
		}else{
			if (isset($id)) {
                $ID_BARANG = $id;
                if (isset($_SESSION['items'][$ID_BARANG])) {
                    $_SESSION['items'][$ID_BARANG] += 1;
                } else {
                    $_SESSION['items'][$ID_BARANG] = 1; 
                }
            }
		}
	}elseif	($act == "plus"){
		foreach ($_SESSION['items'] as $key => $val) {
			if($cek['STOK'] > 1 ){	
				if (isset($_GET['ID_BARANG'])) {
					$ID_BARANG = $_GET['ID_BARANG'];
					if (isset($_SESSION['items'][$ID_BARANG])) {
                    $_SESSION['items'][$ID_BARANG] += 1;
					}
				}
			}else{
			echo "<script>alert('Stok Habis')
			location.replace('../kasir')</script>";
			}	
		}	
    }elseif ($act == "min") {
            if (isset($_GET['ID_BARANG'])) {
                $ID_BARANG = $_GET['ID_BARANG'];
                if (isset($_SESSION['items'][$ID_BARANG])) {
                    $_SESSION['items'][$ID_BARANG] -= 1;
                }
            }
    }elseif ($act == "del") {
            if (isset($_GET['ID_BARANG'])) {
                $ID_BARANG = $_GET['ID_BARANG'];
                if (isset($_SESSION['items'][$ID_BARANG])) {
                    unset($_SESSION['items'][$ID_BARANG]);
                }
            }
    }elseif ($act == "clear") {
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
                    unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
    }elseif ($act == "saveclear") {	
            if (isset($_SESSION['items'])) {
                foreach ($_SESSION['items'] as $key => $val) {
				$query = mysqli_query ($koneksi,"select * from tb_barang where tb_barang.ID_BARANG = '$key'");
				$rs = mysqli_fetch_array ($query);
				$barang=$rs['ID_BARANG']; 
				$st=$rs['STOK'] - $val;
				$jumlah_harga = $rs['JUAL'] * $val;
				$total += $jumlah_harga;
				$q=mysqli_query($koneksi,"insert into tb_penjualan(ID_PENJUALAN,ID_BARANG,TGL_PENJUALAN,JML_BRG,TOTAL_PENJUALAN,USERNAME) VALUES(null,'$barang','$tgl','$val','$jumlah_harga','$USERNAME')");
				$r=mysqli_query($koneksi,"update tb_barang set STOK='$st' where ID_BARANG='$barang'");
				unset($_SESSION['items'][$key]);
                }
                unset($_SESSION['items']);
            }
        }
	echo "<script>location.replace('../kasir')</script>";
?>