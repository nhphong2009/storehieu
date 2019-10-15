<?php
include '../../Model/ketnoi.php';
include '../../Model/dataproductimages.php';
include '../../Controller/functionproductimages.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';
$service = new functionproductimages();

$proimgs = $service->layanhsanpham();
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
                    <h1 class="m-0 text-dark">Ảnh sản phẩm</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Ảnh sản phẩm</li>
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
                <a href="./addproductimage.php" class="btn btn-success btn-add">Add</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Hình ảnh</th>
                            <th>Sản phẩm</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($proimgs as $proimg) {
                            $service1 = new functionproducts();
                            echo "<tr>";
                            echo "<td>" . $proimg->id . "</td>";
                            echo "<td> <img src='../public/frontend/img/". $proimg->link . "' alt=". $proimg->link . " width='200px' height='200px'></td>";
                            echo "<td>" . $service1->laychitietsanpham($proimg->product_id)->name . "</td>";
                            echo "<td><a href='addproductimage.php?id=$proimg->id'>Sửa</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                . "<a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deleteproductimage.php?id=$proimg->id'>Xoá</a></td></tr>";
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
<script>
    $('#sale_price_edit').keyup(function(){
        var sale_price = numeral($(this).val()).format('0,0');
        $(this).val(sale_price)
    })
</script>
