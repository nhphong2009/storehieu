<?php
include '../../Model/ketnoi.php';
include '../../Model/datacontacts.php';
include '../../Controller/functioncontacts.php';
$service = new functioncontacts();

$cons = $service->laylienhe();
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
                    <h1 class="m-0 text-dark">Liên hệ</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Liên hệ</li>
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
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Tên</th>
                            <th>Email</th>
                            <th>Điện thoại</th>
                            <th>Tin nhắn</th>
                            <th>Gửi vào</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($cons as $con) {
                            echo "<tr>";
                            echo "<td>" . $con->id . "</td>";
                            echo "<td>" . $con->name . "</td>";
                            echo "<td>" . $con->email . "</td>";
                            echo "<td>0" . $con->phone . "</td>";
                            echo "<td>" . $con->message . "</td>";
                            echo "<td>" . $con->created_at . "</td>";
                            echo "<td><a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deletecontact.php?id=$con->id'>Xoá</a></td></tr>";
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
