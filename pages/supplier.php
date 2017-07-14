
<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Supplier</a></li>
            </ul>
          </div>
          <div><a href="addsupplier" class="btn btn-primary btn-flat"><i class="fa fa-lg fa-plus"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Supplier</th>
					  <th>Alamat</th>
					  <th>Telp</th>
                      <th style="width:80px;">Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php
						$q = "select * from tb_supplier";
						$sql = mysqli_query($koneksi,$q);
						$no = 1;
						while ($data = mysqli_fetch_array($sql)) {
					?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $data['NAMA_SUPPLIER'];?></td>
                      <td><?php echo $data['ALAMAT'];?></td>
					  <td><?php echo $data['TELP'];?></td>
					  <td><a href="index.php?p=editsupplier&id=<?php echo $data['ID_SUPPLIER'];?>" class="btn btn-info btn-flat"><i class="fa fa-lg fa-edit"></i></a>
					  <a href="inc/supplier.php?delete=<?php echo $data['ID_SUPPLIER'];?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-warning btn-flat"><i class="fa fa-lg fa-trash"></i></a></td>
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
        </div>
      </div>
	  