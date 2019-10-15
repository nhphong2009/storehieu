<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="./admin.php" class="brand-link">
        <img src="../public/admin/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Trang quản trị</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="info">
                <a href="#" class="d-block"><?php echo $_SESSION['username']; ?></a>
                <a href="./logout.php" class="d-block">Đăng xuất</a>
            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="./admin.php" class="nav-link">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Bảng điều khiển
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./attributes.php" class="nav-link">
                        <i class="nav-icon fas fa-magnet"></i>
                        <p>
                            Thuộc tính
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./categories.php" class="nav-link">
                        <i class="nav-icon fa fa-calendar"></i>
                        <p>
                            Danh mục
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./customers.php" class="nav-link">
                        <i class="nav-icon fa fa-user"></i>
                        <p>
                            Khách hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./orders.php" class="nav-link">
                        <i class="nav-icon fa fa-shopping-cart"></i>
                        <p>
                            Đơn hàng
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./products.php" class="nav-link">
                        <i class="nav-icon fa fa-desktop"></i>
                        <p>
                            Sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./attributeproducts.php" class="nav-link">
                        <i class="nav-icon fa fa-info"></i>
                        <p>
                            Thuộc tính sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./productimages.php" class="nav-link">
                        <i class="nav-icon fa fa-images"></i>
                        <p>
                            Ảnh sản phẩm
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="./contacts.php" class="nav-link">
                        <i class="nav-icon fa fa-compress"></i>
                        <p>
                            Liên hệ
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>