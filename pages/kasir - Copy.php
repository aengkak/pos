
<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Data Table</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          
            <div class="col-lg-6">
			<div class="card">
			<form action="inc/cart.php?act=add&amp;ref=../?p=kasir" method="post">
				<div class="form-group">
                    <label class="control-label">Search</label>
                    <input type="text" placeholder="Barang" id="search" name="ID_BARANG" class="form-control">
                </div>
					
					<button type="submit" class="btn btn-default">Search</button>

			</form>
			<a href="inc/cart.php?act=saveclear&amp;ref=../kasir" onclick="return showDetails('inc/print.php?cash=<?php echo $get;?>')" class="btn btn-primary">Save & Clear</a>
			<a href="" class="btn btn-primary">Daftar Barang</a>
			</div>
			</div>
			<div class="col-lg-6">
			<div class="card">
			<form>
				<div class="form-group">
                    <label class="control-label">Cash</label>
                    <input type="text" placeholder="Barang" class="form-control x2" onkeyup="hitung3();">
                </div>
					
					<div class="form-group">
                    <label class="control-label">Kembalian</label>
                    <input type="text" placeholder="Barang" class="form-control z2">
                </div>

			</form>
			</div>
			</div>
			<div class="col-md-12">
			<div class="card">
              <div class="table-responsive">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Kode</th>
                      <th>Nama</th>
                      <th>Harga</th>
                      <th>Qty</th>
					  <th>Jumlah</th>
					  <th>Act</th>
                    </tr>
                  </thead>
				  <?php
					$total = 0;
					if (isset($_SESSION['items'])) {
					foreach ($_SESSION['items'] as $key => $val){
					$query = mysqli_query ($koneksi,"select * from tb_barang where tb_barang.ID_BARANG = '$key'");
					$rs = mysqli_fetch_array ($query);
             
					$jumlah_harga = $rs['JUAL'] * $val;
					$total += $jumlah_harga;
					?>
                  <tbody>
                      <tr>
						<td><?php echo $rs['ID_BARANG']; ?></td>
						<td><?php echo $rs['NAMA_BARANG']; ?></td>
						<td><?php echo "Rp." .number_format($rs['JUAL']); ?></td>
						<td><?php echo number_format($val); ?></td>
						<td><?php echo "Rp. " .number_format($jumlah_harga); ?></td>
						<td> <a href="inc/cart.php?act=min&amp;ID_BARANG=<?php echo $key; ?>&amp;ref=../?p=kasir">Kurangi</a> | <a href="inc/cart.php?act=del&amp;ID_BARANG=<?php echo $key; ?>&amp;ref=../?p=kasir">Hapus</a></td>
					  </tr>
					  <?php
						mysqli_free_result($query);
						}
						}
						?>
						
                  </tbody>
                </table>
				<div class="form-group">
                    <label class="control-label">Harga Total</label>
                    <input type="text" placeholder="Enter price" name="TOTAL_BELI" value="<?php echo $total; ?>" class="form-control y2" onkeyup="hitung3();">
                </div>
				  
              </div>
            </div>
          </div>
        </div>
      </div>
	  