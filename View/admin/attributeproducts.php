<?php
include '../../Model/ketnoi.php';
include '../../Model/dataattributeproducts.php';
include '../../Controller/functionattributeproducts.php';
include '../../Model/dataattributes.php';
include '../../Controller/functionattributes.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';
$service = new functionattributeproducts();
$tuKhoa = "";

if(isset($_REQUEST['btnTimKiem']))
{
    $tuKhoa = $_POST['txtTuKhoa'];
}

$attrpropros = $service->timkiemthuoctinhsanpham($tuKhoa);

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
                        <h1 class="m-0 text-dark">Thuộc tính sản phẩm</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Thuộc tính sản phẩm</li>
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
                    <a href="./addattributeproduct.php" class="btn btn-success btn-add">Add</a>
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
                                <th>Thuộc tính</th>
                                <th>Sản phẩm</th>
                                <th>Giá trị</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php
                                    foreach($attrpropros as $attrpro)
                                    {
                                        $service1 = new functionattributes();
                                        $service2 = new functionproducts();
                                        echo "<tr>";
                                        echo "<td>" . $attrpro->id . "</td>";
                                        echo "<td>" . $service1->laychitietthuoctinh($attrpro->attribute_id)->name . "</td>";
                                        echo "<td>" . $service2->laychitietsanpham($attrpro->product_id)->name . "</td>";
                                        echo "<td>" . $attrpro->value . "</td>";
                                        echo "<td><a href='addattributeproduct.php?id=$attrpro->id'>Sửa</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                            . "<a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deleteattributeproduct.php?id=$attrpro->id'>Xoá</a></td></tr>";
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