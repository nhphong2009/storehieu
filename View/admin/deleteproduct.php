<?php
include '../../Model/ketnoi.php';
include '../../Controller/functionproducts.php';

$id = $_GET['id'];

$service = new functionproducts();

$ketQua = $service->xoasanpham($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); window.location.href = '../admin/products.php'; </script>";
}
?>