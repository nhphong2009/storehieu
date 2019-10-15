<?php
include '../../Model/ketnoi.php';
include '../../Controller/functioncategories.php';

$id = $_GET['id'];

$service = new functioncategories();

$ketQua = $service->xoadanhmuc($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); window.location.href = 'http://storehieu.local.com/View/admin/categories.php'; </script>";
}
?>