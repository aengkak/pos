<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Stok</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Barang</li>
              <li><a href="#">Stok</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Tambah</h3>
              <div class="card-body">
			  
					<?php
						$id = $_GET["id"];
						$q = "select * from tb_barang where ID_BARANG='$id'";
						$sql = mysqli_query($koneksi,$q);
						$res = mysqli_fetch_array($sql);
					?>
			  
                <form role="form" method="post" action="inc/barang.php">
					<input type="hidden" name="ID_BARANG" value="<?php echo $res['ID_BARANG'] ;?>" />
					<input type="hidden" name="USERNAME" value="<?php echo $_SESSION['USERNAME'] ;?>" />
                  <div class="form-group">
                    <label class="control-label">Nama Barang</label>
                    <input type="text" value="<?php echo $res['NAMA_BARANG'];?>" placeholder="Enter name" name="NAMA_BARANG" class="form-control">
                  </div>
				  <div class="form-group">
                          <label class="control-label">Supplier</label><br>                         
                            <select name="ID_SUPPLIER" class="form-control">
                              <?php
							  $q = mysqli_query($koneksi,"select * from tb_supplier");
								while ($data=mysqli_fetch_array($q)){
								echo"<option value='$data[ID_SUPPLIER]'> $data[NAMA_SUPPLIER]</option>";
								}
							  ?>
                            </select>
                          
                   </div>
				   <div class="form-group">
                    <label class="control-label">Jumlah Barang</label>
                    <input type="text" placeholder="Enter amount" name="JML_BELI" class="form-control a2" onkeyup="hitung2();" onkeypress="return isNumberKey(event)">
                  </div>
				  <div class="form-group">
                    <label class="control-label">Harga Satuan</label>
                    <input type="text" placeholder="Enter price" name="HARGA_SATUAN" class="form-control b2" onkeyup="hitung2();" onkeypress="return isNumberKey(event)">
                  </div>
				   <div class="form-group">
                    <label class="control-label">Harga Total</label>
                    <input type="text" placeholder="Enter price" name="TOTAL_BELI" class="form-control c2">
                  </div>
					<div class="card-footer">
					<button type="submit" name="stok" class="btn btn-default">Simpan</button>
					</div>
                </form>
              </div>
              
            </div>
          </div>
         
          <div class="clearix"></div>
          
        </div>
      </div>