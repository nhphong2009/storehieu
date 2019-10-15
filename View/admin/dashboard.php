<?php
    include('../../Model/ketnoi.php');
    include ('../../Model/datacustomers.php');
    include ('../../Controller/functioncustomers.php');
    include ('../../Model/dataproducts.php');
    include ('../../Controller/functionproducts.php');
    include ('../../Model/datacontacts.php');
    include ('../../Controller/functioncontacts.php');

    $servicecus = new functioncustomers();
    $cuss = $servicecus->laykhachhang();
    $servicepro = new functionproducts();
    $pros = $servicepro->laysanpham();
    $servicecon = new functioncontacts();
    $cons = $servicecon->laylienhe();
?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Bảng điều khiển</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./dashboard.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Bảng điều khiển</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo count($cons);?></h3>

                            <p>Khách hàng gửi thông tin liên hệ</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-address-card"></i>
                        </div>
                        <a href="#" class="small-box-footer">Đọc thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo count($pros); ?></h3>

                            <p>Sản phẩm</p>
                        </div>
                        <div class="icon">
                            <i class="fa fa-desktop"></i>
                        </div>
                        <a href="./products.php" class="small-box-footer">Đọc thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo count($cuss); ?></h3>

                            <p>Khách hàng đã đăng ký</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="./customers.php" class="small-box-footer">Đọc thêm <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </div>
    </section>
</div>
