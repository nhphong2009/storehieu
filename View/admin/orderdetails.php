<?php
include '../../Model/ketnoi.php';
include '../../Model/dataorderdetails.php';
include '../../Model/dataproducts.php';
include '../../Model/dataorders.php';
include '../../Controller/functionorderdetails.php';
include '../../Controller/functionproducts.php';
include '../../Controller/functionorders.php';
$serviceorderdetail = new functionorderdetails();

$id = intval($_GET['id']);

$orderdetails = $serviceorderdetail->laydonhangtheoid($id);
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
                    <button class="form-control btn-back" style="width: 10%; float: right;">Quay lại</button>
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Ảnh sản phẩm</th>
                            <th>Tên sản phẩm</th>
                            <th>Số lượng</th>
                            <th>Giá</th>
                            <th>Tổng tiền</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sum = 0;
                        foreach ($orderdetails as $orderdetail) {
                            $serviceproduct = new functionproducts();
                            $serviceorder = new functionorders();
                            $getOrder = $serviceorder->laychitietdonhang($orderdetail->order_id);
                            $getProduct = $serviceproduct->laychitietsanpham($orderdetail->product_id);
                            $total = $orderdetail->quantity * $orderdetail->price;
                            echo "<tr>";
                            echo "<td>" . $getOrder->code . "</td>";
                            echo "<td><img width='200px' height='200px' src='../public/frontend/img/" . $getProduct->thumbnail . "'></td>";
                            echo "<td>" . $getProduct->name . "</td>";
                            echo "<td>" . $orderdetail->quantity . "</td>";
                            echo "<td>" . number_format($orderdetail->price) . "</td>";
                            echo "<td>" . number_format($total) . "</td>";
                            echo "</tr>";
                            $sum += $total;
                        }
                        echo "<tr>";
                        echo "<th colspan='5' style='text-align: right;'>Thành tiền</th>";
                        echo "<th>" . number_format($sum) . "</th>";
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
<script>
    $('.btn-back').click(function () {
        history.back();
    })
</script>