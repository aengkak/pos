<!-- Sidebar Menu-->
          <ul class="sidebar-menu">
		  <li><a href="home"><i class="fa fa-dashboard"></i><span>Dashboard</span></a></li>
		  <?php if($_SESSION['LEVEL']=='Admin'){  
		  echo '<li><a href="user"><i class="fa fa-dashboard"></i><span>User</span></a></li> ';
		  echo '<li class="treeview"><a href="#"><i class="fa fa-share"></i><span>Laporan</span><i class="fa fa-angle-right"></i></a>
              <ul class="treeview-menu">
                <li class="treeview"><a href="lapjual"><i class="fa fa-circle-o"></i><span> Penjualan</span><i class="fa fa-angle-right"></i></a>
                  
                </li>
                <li class="treeview"><a href="lapbeli"><i class="fa fa-circle-o"></i><span> Pembelian</span><i class="fa fa-angle-right"></i></a>
                  
                </li>
              </ul>
            </li>';
		  }else if($_SESSION['LEVEL']=='Gudang'){
		 
		  echo '<li><a href="barang"><i class="fa fa-pie-chart"></i><span>Barang</span></a></li> ';
		  echo '<li><a href="kategori"><i class="fa fa-pie-chart"></i><span>Kategori</span></a></li> ';
		  echo '<li><a href="supplier"><i class="fa fa-pie-chart"></i><span>Supplier</span></a></li> ';
		  }else if($_SESSION['LEVEL']=='Kasir'){
		  
		  echo '<li><a href="kasir"><i class="fa fa-pie-chart"></i><span>Kasir</span></a></li> ';  
		  }?>		
          </ul>