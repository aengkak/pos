
<div class="content-wrapper">
        <div class="page-title">
          <div>
            <h1>Data Table</h1>
            <ul class="breadcrumb side">
              <li><i class="fa fa-home fa-lg"></i></li>
              <li>Tables</li>
              <li class="active"><a href="#">Barang</a></li>
            </ul>
          </div>
          <div><a href="addbarang" class="btn btn-primary btn-flat"><i class="fa fa-lg fa-plus"></i></a></div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-body">
                <table id="sampleTable" class="table table-hover table-bordered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama</th>
                      <th>Kategori</th>
                      <th>Hrg Beli</th>
                      <th>Hrg Jual</th>
					  <th>Stok</th>
                      <th>Opsi</th>
                    </tr>
                  </thead>
                  <tbody>
					<?php
						$q = "select * from tb_barang,tb_kategori where tb_barang.ID_KATEGORI=tb_kategori.ID_KATEGORI";
						$sql = mysqli_query($koneksi,$q);
						$no = 1;
						while ($data = mysqli_fetch_array($sql)) {
					?>
                    <tr>
                      <td><?php echo $no;?></td>
                      <td><?php echo $data['NAMA_BARANG'];?></td>
                      <td><?php echo $data['NAMA_KATEGORI'];?></td>
                      <td><?php echo $data['BELI'];?></td>
                      <td><?php echo $data['JUAL'];?></td>
					  <td><?php echo $data['STOK'];?></td>
                      <td><a href="index.php?p=addstok&id=<?php echo $data['ID_BARANG'];?>" class="btn btn-primary btn-flat"><i class="fa fa-lg fa-plus"></i></a>
					  <a href="index.php?p=editbarang&id=<?php echo $data['ID_BARANG'];?>" class="btn btn-info btn-flat"><i class="fa fa-lg fa-edit"></i></a>
					  <a href="inc/barang.php?delete=<?php echo $data['ID_BARANG'];?>" onclick="return confirm('Yakin mau di hapus?');" class="btn btn-warning btn-flat"><i class="fa fa-lg fa-trash"></i></a></td>
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
	  