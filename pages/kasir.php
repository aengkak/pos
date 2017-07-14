
<div class="content-wrapper">
        
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Harga</th>
					  <th>Stok</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php
						$q = "select * from tb_barang,tb_kategori where tb_barang.ID_KATEGORI=tb_kategori.ID_KATEGORI ";
						$sql = mysqli_query($koneksi,$q);
						$no = 1;
						while ($data = mysqli_fetch_array($sql)) {
					?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $data['NAMA_BARANG'];?></td>
                      <td><?php echo $data['JUAL'];?></td>
					  <td><?php echo $data['STOK'];?></td>
                      <td><a href="inc/cart.php?act=add&id=<?php echo $data['ID_BARANG'];?>" class="btn btn-primary btn-flat"><i class="fa fa-lg fa-plus"></i></a>
					  </tr>
					<?php
					$no++;
						}
					?>
                  </tbody>
                </table>
              </div>
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
						<td> <a href="inc/cart.php?act=min&amp;ID_BARANG=<?php echo $key; ?>">Kurangi</a> | <a href="inc/cart.php?act=del&amp;ID_BARANG=<?php echo $key; ?>">Hapus</a></td>
					  </tr>
					  <?php
						mysqli_free_result($query);
						}
						}
						?>
						
                  </tbody>
                </table>
				<div class="card-body3">
				<div class="form-inline" >
				<form method="post" action="">
				<div class="form-group">
                    <label>Bayar :</label>
                    <input type="text" placeholder="Enter price" name="bayar" class="form-control" >
				</div>
				<div class="form-group">
					<label>Harga Total :</label>
                    <input type="text" placeholder="Enter price" name="total" value="<?php echo $total; ?>" class="form-control " >
                </div>
				<div class="form-group">
					<label>Kembalian :</label>
                    <input type="text" placeholder="Enter price" name="kembali" value="<?php echo $cash-$total ;?>" class="form-control " >
                </div>
				<div class="form-group">
                    <button type="submit" class="btn btn-primary icon-btn">Hitung</button>
					<a href="inc/cart.php?act=saveclear" onclick="javascript:return window.open('inc/print.php?cash=<?php echo $cash ;?>','1492738737226','width=300,height=300,toolbar=0,menubar=0,location=0,status=1,scrollbars=1,resizable=0,left=0,top=0');return false;" class="btn btn-primary icon-btn"><i class="fa fa-fw fa-lg fa-check-circle"></i>Print</a>
                  </div>
				</form>
				</div>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
	  