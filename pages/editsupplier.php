<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Supplier</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Supplier</li>
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
						$q = "select * from tb_supplier where ID_SUPPLIER='$id'";
						$sql = mysqli_query($koneksi,$q);
						$data = mysqli_fetch_array($sql);
					?>
			  
                <form role="form" method="post" action="inc/supplier.php">
				
					<input type="hidden" placeholder="Enter name" value="<?php echo $data['ID_SUPPLIER'];?>" name="ID_SUPPLIER" class="form-control">
				
                  <div class="form-group">
                    <label class="control-label">Nama Supplier</label>
                    <input type="text" placeholder="Enter name" value="<?php echo $data['NAMA_SUPPLIER'];?>" name="NAMA_SUPPLIER" class="form-control">
                  </div>
                   <div class="form-group">
                    <label class="control-label">Alamat</label>
                    <input type="text" placeholder="Enter Addres" value="<?php echo $data['ALAMAT'];?>" name="ALAMAT" class="form-control">
                  </div>
				  <div class="form-group">
                    <label class="control-label">Telp</label>
                    <input type="text" placeholder="Enter Number" value="<?php echo $data['TELP'];?>" name="TELP" class="form-control">
                  </div>
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