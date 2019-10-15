<?php
include '../../Model/ketnoi.php';
include '../../Model/datacustomers.php';
include '../../Controller/functioncustomers.php';
$service = new functioncustomers();

$custs = $service->laykhachhang();
?>
<?php include('./header.php'); ?>
<?php include('./sidebar.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Khách hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Khách hàng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div style="width: 95%; margin:auto;">
                <a href="./addcustomer.php" class="btn btn-success btn-add">Add</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên tài khoản</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Địa chỉ</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($custs as $cust) {
                            echo "<tr>";
                            echo "<td>" . $cust->id . "</td>";
                            echo "<td>" . $cust->username . "</td>";
                            echo "<td>" . $cust->name . "</td>";
                            echo "<td>" . $cust->email . "</td>";
                            echo "<td>0" . $cust->phone . "</td>";
                            echo "<td>" . $cust->address . "</td>";
                            echo "<td><a href='addcustomer.php?id=$cust->id'>Sửa</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                . "<a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deletecustomer.php?id=$cust->id'>Xoá</a></td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('./footer.php'); ?>
