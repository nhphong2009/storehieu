<?php
include '../../Model/ketnoi.php';
include '../../Controller/functionattributes.php';

$id = $_GET['id'];

$service = new functionattributes();

$ketQua = $service->xoathuoctinh($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); window.location.href = '../admin/attributes.php'; </script>";
}
?>