<?php
include "koneksi.php";
$dari = $_POST['dari'];
$sampai = $_POST['sampai'];
?>
<html>
<head>
<title>Laporan</title>
<link rel="stylesheet" type="text/css" href="../assets/css/main.css">
</head>
<body>
<div class="col-md-12">
            <div class="card">
              <h3 class="card-title">Laporan <?php echo $dari ;?> Sampai <?php echo $sampai ;?></h3>
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Brg</th>
                      <th>Tgl</th>
                      <th>Qty</th>
					  <th>Total</th>
					  <th>User</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				  $q = mysqli_query($koneksi, "select * from tb_penjualan,tb_barang where tb_penjualan.ID_BARANG=tb_barang.ID_BARANG and TGL_PENJUALAN BETWEEN '$dari' AND '$sampai'");
				  if(mysqli_num_rows($q) == 0){
					echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
					}else{	
						$no = 1;	//membuat variabel $no untuk membuat nomor urut
						while($data = mysqli_fetch_assoc($q)){	
							echo '<tr>';
							echo '<td>'.$no.'</td>';	//menampilkan nomor urut
							echo '<td>'.$data['NAMA_BARANG'].'</td>';	
							echo '<td>'.$data['TGL_PENJUALAN'].'</td>';	
							echo '<td>'.$data['JML_BRG'].'</td>';
							echo '<td>'.$data['TOTAL_PENJUALAN'].'</td>';
							echo '<td>'.$data['USERNAME'].'</td>';
							echo '</tr>';
						$no++;	//menambah jumlah nomor urut setiap row
						}
				  }
				?>
                  </tbody>
                </table>
              </div>
            </div>
          </div
		  
		  <!-- Javascripts-->
    <script src="../assetsjs/jquery-2.1.4.min.js"></script>
    <script src="../assetsjs/essential-plugins.js"></script>
    <script src="../assetsjs/bootstrap.min.js"></script>
    <script src="../assetsjs/plugins/pace.min.js"></script>
    <script src="../assetsjs/main.js"></script>
</body>
</html>