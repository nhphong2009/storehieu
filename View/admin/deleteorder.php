<?php
include '../../Model/ketnoi.php';
include '../../Controller/functionorders.php';
include "../../Model/dataorderdetails.php";
include '../../Controller/functionorderdetails.php';

$id = $_GET['id'];

$serviceorder = new functionorders();
$serviceorderdetail = new functionorderdetails();

$ketQua = $serviceorder->xoadonhang($id);

$oderdetails = $serviceorderdetail->laydonhangtheoid($id);
foreach ($oderdetails as $oderdetail) {
    $serviceordetail = new functionorderdetails();
    $serviceordetail->xoachitietdonhang($oderdetail->id);
}

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); window.location.href = 'http://storehieu.local.com/View/admin/orders.php'; </script>";
}
?>