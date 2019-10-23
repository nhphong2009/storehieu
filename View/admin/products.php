<?php
include '../../Model/ketnoi.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';
include '../../Model/datacategories.php';
include '../../Controller/functioncategories.php';
$service = new functionproducts();

$tuKhoa = "";

if(isset($_REQUEST['btnTimKiem']))
{
    $tuKhoa = $_POST['txtTuKhoa'];
}

$pros = $service->timkiemsanpham($tuKhoa);
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
                        <h1 class="m-0 text-dark">Sản phẩm</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Sản phẩm</li>
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
                    <a href="./addproduct.php" class="btn btn-success btn-add">Add</a>
                    <form class="form-inline ml-3" method="post" style="display: inline-block">
                        <div class="input-group input-group-sm">
                            <input class="form-control form-control-navbar" type="search" name="txtTuKhoa" value="<?php echo $tuKhoa; ?>" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <input class="btn btn-navbar" type="submit" name="btnTimKiem" value="Tìm kiếm" style="display: none;"/>
                                <button class="btn btn-navbar" type="submit">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Hình ảnh</th>
                                <th width="20%">Mã</th>
                                <th width="20%">Tên</th>
                                <th>Số lượng</th>
                                <th>Giá</th>
                                <th>Danh mục</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach ($pros as $pro) {
                                        $service1 = new functioncategories();
                                        echo "<tr>";
                                        echo "<td>" . $pro->id . "</td>";
                                        echo "<td> <img src='../public/frontend/img/". $pro->thumbnail . "' alt=". $pro->thumbnail . " width='200px' height='200px'></td>";
                                        echo "<td>" . $pro->code . "</td>";
                                        echo "<td>" . $pro->name . "</td>";
                                        echo "<td>" . number_format($pro->quantity) . "</td>";
                                        echo "<td>" . number_format($pro->price) . "</td>";
                                        echo "<td>" . $service1->laychitietdanhmuc($pro->category_id)->name . "</td>";
                                        echo "<td><a href='productdetails.php?id=$pro->id'>Xem chi tiết</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                            . "<a href='showproductimages.php?id=$pro->id'>Xem hình ảnh</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                            . "<a href='addproduct.php?id=$pro->id'>Sửa</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                            . "<a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deleteproduct.php?id=$pro->id'>Xoá</a></td></tr>";
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
    });
</script>
