<?php
include '../../Model/ketnoi.php';
include '../../Model/datacategories.php';
include '../../Controller/functioncategories.php';
$service = new functioncategories();

$cates = $service->laydanhmuc();
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
                        <h1 class="m-0 text-dark">Danh mục</h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                            <li class="breadcrumb-item active">Danh mục</li>
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
                    <a href="./addcategory.php" class="btn btn-success btn-add">Add</a>
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Tên</th>
                                <th>Danh mục cha</th>
                                <th>Tên đường dẫn</th>
                                <th>Mô tả</th>
                                <th>Hành động</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                            foreach ($cates as $cate) {
                                echo "<tr>";
                                echo "<td>" . $cate->id . "</td>";
                                echo "<td>" . $cate->name . "</td>";
                                echo "<td>" . $cate->parent_id . "</td>";
                                echo "<td>" . $cate->slug . "</td>";
                                echo "<td>" . $cate->description . "</td>";
                                echo "<td><a href='addcategory.php?id=$cate->id'>Sửa</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                    . "<a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deletecategory.php?id=$cate->id'>Xoá</a></td></tr>";
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
