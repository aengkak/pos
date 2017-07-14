<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> User</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>User</li>
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
						$q = "select * from tb_admin where USERNAME='$id'";
						$sql = mysqli_query($koneksi,$q);
						$data = mysqli_fetch_array($sql);
					?>
			  
                <form role="form" method="post" action="inc/user.php">
                  <div class="form-group">
                    <label class="control-label">Username</label>
                    <input type="text" placeholder="Enter name" value="<?php echo $data['USERNAME'];?>" name="USERNAME" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" placeholder="Enter Password" value="<?php $data['PASSWORD'];?>" name="PASSWORD" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Level</label>
                    <div class="radio">
                      <label>
                        <input type="radio" value="Admin" name="LEVEL">Admin
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" value="Gudang" name="LEVEL">Gudang
                      </label>
                    </div>
					<div class="radio">
                      <label>
                        <input type="radio" value="Kasir" name="LEVEL">Kasir
                      </label>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label">Alamat</label>
                    <input type="text" placeholder="Enter Adress" value="<?php echo $data['ALAMAT'];?>" name="ALAMAT" class="form-control">
                  </div>
				  <div class="form-group">
                    <label class="control-label">No Telp</label>
                    <input type="text" placeholder="Enter Number" value="<?php echo $data['NO_TELP'];?>" name="NO_TELP" class="form-control">
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