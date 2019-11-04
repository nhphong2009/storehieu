<?php
include '../../Model/ketnoi.php';
include '../../Controller/functioncategories.php';

$id = $_GET['id'];

$service = new functioncategories();

$ketQua = $service->xoadanhmuc($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); window.location.href = '../admin/categories.php'; </script>";
}
?>