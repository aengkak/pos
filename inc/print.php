<?php
session_start();
error_reporting(0);
include 'koneksi.php';
if (!isset($_SESSION)) {
        session_start();
    }
$get=$_GET['cash'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Print</title>
<style type="text/css">
body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 8pt;
	color: #000;
	text-transform: uppercase;}
</style>
</head>

<body>
<table width="250" border="0" align="center">
  <tr>
    <td colspan="4" align="center">Nama toko <br> Alamat <br> Telp &nbsp;</td>
  </tr>
  <tr>
    <td colspan="4">RECEIPT <?php echo $no_faktur." ".date('d-m-Y'); ?></td>
  </tr>
  <tr>
    <td height="17">BRG</td>
    <td>QTY</td>
    <td>HRG</td>
    <td>SUB TTL</td>
  </tr>
  <?php
  $total = 0;
  if (isset($_SESSION['items'])) {
        foreach ($_SESSION['items'] as $key => $val){
            $query = mysqli_query ($koneksi,"select * from tb_barang where tb_barang.ID_BARANG = '$key'");
            $rs = mysqli_fetch_array ($query);
             
            $jumlah_harga = $rs['JUAL'] * $val;
            $total += $jumlah_harga;
		
  ?>
  <tr>
    <td><?php echo $rs['NAMA_BARANG']; ?>&nbsp;</td>
    <td><?php echo number_format($val); ?>&nbsp;</td>
    <td><?php echo "Rp." .number_format($rs['JUAL']); ?>&nbsp;</td>
    <td><?php echo "Rp. " .number_format($jumlah_harga); ?></td>
  </tr>
  <?php
            mysqli_free_result($query);
        }
  }
  ?>
  <tr>
    <td>TOTAL</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td> <?php echo "Rp. " .number_format($total); ?></td>
  </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>CASH</td>
    <td> <?php echo "Rp. " .number_format($get); ?></td>
  </tr>
  <?php 
  $kembali=$get-$total;
  ?>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>KEMBALI</td>
    <td> <?php echo "Rp. " .number_format($kembali); ?></td>
  </tr>

  <tr>
    <td colspan="4" align="center"><p>&nbsp;</p>
    <p>TERIMA KASIH ATAS KUNJUNGAN ANDA</p></td>
  </tr>
</table>
</body>
</html>