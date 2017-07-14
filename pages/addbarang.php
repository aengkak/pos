<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Barang</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Barang</li>
              <li><a href="#">add</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Tambah</h3>
              <div class="card-body">
			  
                <form role="form" method="post" action="inc/barang.php">
                  <div class="form-group">
                    <label class="control-label">Nama Barang</label>
                    <input type="text" placeholder="Enter name" name="NAMA_BARANG" class="form-control">
                  </div>
				  <div class="form-group">
                          <label class="control-label">Kategori</label><br>                         
                            <select name="ID_KATEGORI" class="form-control">
                              <?php
							  $q = mysqli_query($koneksi,"select * from tb_kategori");
								while ($data=mysqli_fetch_array($q)){
								echo"<option value='$data[ID_KATEGORI]'> $data[NAMA_KATEGORI]</option>";
								}
							  ?>
                            </select>
                          
                   </div>
				   <div class="form-group">
                    <label class="control-label">Harga Jual</label>
                    <input type="text" placeholder="Enter Price" name="JUAL" class="form-control">
                  </div>
					<div class="card-footer">
					<button type="submit" class="btn btn-default">Simpan</button>
					</div>
                </form>
              </div>
              
            </div>
          </div>
         
          <div class="clearix"></div>
          
        </div>
      </div>