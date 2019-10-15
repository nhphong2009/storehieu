<?php
include '../../Model/ketnoi.php';
include '../../Controller/functioncontacts.php';

$id = $_GET['id'];

$service = new functioncontacts();

$ketQua = $service->xoalienhe($id);

if($ketQua)
{
    echo "<script>alert('Xóa thành công!'); window.location.href = 'http://storehieu.local.com/View/admin/contacts.php'; </script>";
}
?>