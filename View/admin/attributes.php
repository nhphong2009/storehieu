<?php
include '../../Model/ketnoi.php';
include '../../Model/dataattributes.php';
include '../../Controller/functionattributes.php';
$service = new functionattributes();

$attrs = $service->laythuoctinh();
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
                        <h1 class="m-0 text-dark">Thuộc tính</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Thuộc tính</li>
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
                    <a href="./addattribute.php" class="btn btn-success btn-add">Add</a>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Mã</th>
                                <th>Tên</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($attrs as $attr) {
                                        echo "<tr>";
                                        echo "<td>" . $attr->id . "</td>";
                                        echo "<td>" . $attr->code . "</td>";
                                        echo "<td>" . $attr->name . "</td>";
                                        echo "<td><a href='addattribute.php?id=$attr->id'>Sửa</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                            . "<a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deleteattribute.php?id=$attr->id'>Xoá</a></td></tr>";
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