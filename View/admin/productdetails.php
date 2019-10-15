<?php
include '../../Model/ketnoi.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';
$service = new functionproducts();

$id = intval($_GET['id']);

$pro = $service->laychitietsanpham($id);
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
                    <h1 class="m-0 text-dark">Chi tiết sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Chi tiết sản phẩm</li>
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
                            <th>Tên sản phẩm</th>
                            <th>Đường dẫn</th>
                            <th>Nội dung</th>
                            <th>Miêu tả</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        echo "<tr>";
                        echo "<td>" . $pro->id . "</td>";
                        echo "<td>" . $pro->name . "</td>";
                        echo "<td>" . $pro->slug . "</td>";
                        echo "<td>" . $pro->content . "</td>";
                        echo "<td>" . $pro->description . "</td>";
                        echo "</tr>";
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('./footer.php'); ?>
