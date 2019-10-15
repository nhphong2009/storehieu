<?php
include '../../Model/ketnoi.php';
include '../../Controller/functionproductimages.php';

$id = $_GET['id'];

$service = new functionproductimages();

$ketQua = $service->xoaanhsanpham($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!');history.back();</script>";
}
?>