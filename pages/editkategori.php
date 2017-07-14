<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> Kategori</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Kategori</li>
              <li><a href="#">edit</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title"> Edit</h3>
              <div class="card-body">
			  
					<?php
						$id = $_GET["id"];
						$q = "select * from tb_kategori where ID_KATEGORI='$id'";
						$sql = mysqli_query($koneksi,$q);
						$data = mysqli_fetch_array($sql);
					?>
			  
                <form role="form" method="post" action="inc/kategori.php">
                    
                    <input type="hidden" placeholder="Enter name" value="<?php echo $data['ID_KATEGORI'];?>" name="ID_KATEGORI" class="form-control">
              
                  <div class="form-group">
                    <label class="control-label">Nama Kategori</label>
                    <input type="text" placeholder="Enter Kategori" value="<?php $data['NAMA_KATEGORI'];?>" name="NAMA_KATEGORI" class="form-control">
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