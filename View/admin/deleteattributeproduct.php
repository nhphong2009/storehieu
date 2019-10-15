<?php
include '../../Model/ketnoi.php';
include '../../Controller/functionattributeproducts.php';

$id = $_GET['id'];

$service = new functionattributeproducts();

$ketQua = $service->xoachitietthuoctinh($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); history.back();</script>";
}
?>