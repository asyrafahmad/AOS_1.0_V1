 <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Agro Online System</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">
            


    <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="../admin/index.php">
          <img class="" src="../img/icon/dashboard.png" width="20%" height="20%">
          <span>Dashboard</span></a>
      </li>


    <!-- Nav Item - Product -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="../admin/product.php" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <img class="" src="../img/icon/Product.png" width="20%" height="20%">
          <span>Produk</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../admin/product.php">Senarai Produk</a>
            <a class="collapse-item" href="../admin/includes/add_product.php">Tambah Produk</a>
            <a class="collapse-item" href="../admin/edit_product.php">Ubahsuai Produk</a>
          </div>
        </div>
      </li> 


        <!-- Nav Item - Supplier -->
        <li class="nav-item">
        <a class="nav-link collapsed" href="../admin_supplier/Supplier_index.php" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <img class="" src="../img/icon/Buyer.png" width="20%" height="20%">
          <span>Petani</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../admin_supplier/supplier_index.php">Senarai Petani</a>
            <a class="collapse-item" href="../admin_supplier/add_supplier.php">Tambah Petani</a>
            <a class="collapse-item" href="../admin_supplier/edit_supplier.php">Ubahsuai Petani</a>
            <hr class="sidebar-divider">
            <a class="collapse-item" href="../admin_supplier/supplier_add_product.php">Tambah Produk</a>
            <a class="collapse-item" href="../admin_supplier/supplier_edit_product.php">Ubahsuai produk</a>
          </div>
        </div>
      </li>
        

    <!-- Nav Item - Buyer -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="../admin_buyer/buyer_index.php" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <img class="" src="../img/icon/supplier.png" width="20%" height="20%">
          <span>Pemborong</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar" style="">
          <div class="bg-white py-2 collapse-inner rounded">
            <a class="collapse-item" href="../admin_buyer/view_all_buyers.php">Senarai Pemborong</a>
            <a class="collapse-item" href="../admin_buyer/view_buyer.php">Maklumat Pemborong</a>
            <a class="collapse-item" href="../admin_buyer/add_buyer.php">Tambah Pemborong</a>
            <a class="collapse-item" href="../admin_buyer/edit_buyer.php">Ubahsuai Pemborong</a>
            <hr class="sidebar-divider">
            <a class="collapse-item" href="../admin_buyer/buyer_product.php">Produk Pemborong</a>
            <a class="collapse-item" href="../admin_buyer/buyer_shoppingCart.php">Jual Beli Produk</a>
            <a class="collapse-item" href="../admin_buyer/buyer_orderHistory.php">Transaksi Produk</a>
          </div>
        </div>
      </li>



        <!-- Nav Item - About Us -->
      <li class="nav-item">
        <a class="nav-link" href="#">
          <i class="fas fa-fw fa-table"></i>
          <span>Tentang kami</span></a>
      </li>

    
    <hr>
        <!-- Nav Item - Logout -->
        <li class="nav-item" >
            <a class="nav-link" href="../login.php" > 
                <span>Log Keluar</span></a>
        </li>

<div hidden>
      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Interface
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-cog"></i>
          <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item" href="buttons.html">Buttons</a>
            <a class="collapse-item" href="cards.html">Cards</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Utilities Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item" href="utilities-color.html">Colors</a>
            <a class="collapse-item" href="utilities-border.html">Borders</a>
            <a class="collapse-item" href="utilities-animation.html">Animations</a>
            <a class="collapse-item" href="utilities-other.html">Other</a>
          </div>
        </div>
      </li>

      <!-- Divider -->
      <hr class="sidebar-divider">

      <!-- Heading -->
      <div class="sidebar-heading">
        Addons
      </div>

      <!-- Nav Item - Pages Collapse Menu -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
          <i class="fas fa-fw fa-folder"></i>
          <span>Pages</span>
        </a>
        <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Login Screens:</h6>
            <a class="collapse-item" href="login.html">Login</a>
            <a class="collapse-item" href="register.html">Register</a>
            <a class="collapse-item" href="forgot-password.html">Forgot Password</a>
            <div class="collapse-divider"></div>
            <h6 class="collapse-header">Other Pages:</h6>
            <a class="collapse-item" href="404.html">404 Page</a>
            <a class="collapse-item" href="blank.html">Blank Page</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Charts -->
      <li class="nav-item">
        <a class="nav-link" href="charts.html">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Charts</span></a>
      </li>
</div>
    

        <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>


   
    </ul>
    <!-- End of Sidebar -->