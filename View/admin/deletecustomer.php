<?php
include '../../Model/ketnoi.php';
include '../../Controller/functioncustomers.php';

$id = $_GET['id'];

$service = new functioncustomers();

$ketQua = $service->xoakhachhang($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); window.location.href = '../admin/customers.php'; </script>";
}
?>