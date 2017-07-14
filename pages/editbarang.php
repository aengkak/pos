<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Barang</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Barang</li>
              <li><a href="#">edit</a></li>
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
                  <div class="form-group">
                    <label class="control-label">Nama Barang</label>
                    <input type="text" placeholder="Enter name" value="<?php echo $res['NAMA_BARANG'] ;?>" name="NAMA_BARANG" class="form-control">
                  </div>
				  <div class="form-group">
                          <label class="control-label">Kategori</label><br>                         
                            <select name="ID_KATEGORI" class="form-control">
                              <?php
							  $query = mysqli_query($koneksi,"select * from tb_kategori");
								while ($r=mysqli_fetch_array($query)){
								echo"<option value='$r[ID_KATEGORI]'> $r[NAMA_KATEGORI]</option>";
								}
							  ?>
                            </select>
                          
                   </div>
                    <input type="hidden" placeholder="Enter price" value="<?php echo $res['BELI'] ;?>" name="BELI" class="form-control">
                    <div class="form-group">
                    <label class="control-label">Harga Jual</label>
					<input type="text" placeholder="Enter price" value="<?php echo $res['JUAL'] ;?>" name="JUAL" class="form-control">
                    </div>
					<input type="hidden" placeholder="Enter Stok" value="<?php echo $res['STOK'] ;?>" name="STOK" class="form-control">
                 
					<div class="card-footer">
					<button type="submit" name="update" class="btn btn-default">Simpan</button>
					</div>
                </form>
              </div>
              
            </div>
          </div>
         
          <div class="clearix"></div>
          
        </div>
      </div>