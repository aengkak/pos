<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1><i class="fa fa-edit"></i> User</h1>
          </div>
          <div>
            <ul class="breadcrumb">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>User</li>
              <li><a href="#">add</a></li>
            </ul>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6">
            <div class="card">
              <h3 class="card-title">Tambah</h3>
              <div class="card-body">
                <form role="form" method="post" action="inc/user.php">
                  <div class="form-group">
                    <label class="control-label">Username</label>
                    <input type="text" placeholder="Enter name" name="USERNAME" class="form-control">
                  </div>
                  <div class="form-group">
                    <label class="control-label">Password</label>
                    <input type="password" placeholder="Enter Password" name="PASSWORD" class="form-control">
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
                    <input type="text" placeholder="Enter Adress" name="ALAMAT" class="form-control">
                  </div>
				  <div class="form-group">
                    <label class="control-label">No Telp</label>
                    <input type="text" placeholder="Enter Number" name="NO_TELP" class="form-control">
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