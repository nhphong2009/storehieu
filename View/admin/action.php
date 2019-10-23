<?php
include "../../Model/ketnoi.php";
include "../../Model/dataorders.php";
include "../../Controller/functionorders.php";

if(isset($_POST["action"]))
{
    if($_POST["action"] == "cancel")
    {
        $serviceorder = new functionorders();
        $order = $serviceorder->laychitietdonhangtheocode($_POST['code']);
        if($order->status == "Đang chờ" || $order->status == "Vận chuyển") {
            $serviceorder1 = new functionorders();
            $objorder = new dataorders();
            $objorder->id = $order->id;
            $objorder->status = "Hủy";
            $objorder->updated_at = date('Y-m-d H:i:s');
            $serviceorder1->capNhat($objorder);
            echo "Cập nhật đơn hàng thành công";
        } else {
            echo "fail";
        }
    }
    if($_POST["action"] == "shipping")
    {
        $serviceorder = new functionorders();
        $order = $serviceorder->laychitietdonhangtheocode($_POST['code']);
        if($order->status == "Đang chờ") {
            $serviceorder1 = new functionorders();
            $objorder = new dataorders();
            $objorder->id = $order->id;
            $objorder->status = "Vận chuyển";
            $objorder->updated_at = date('Y-m-d H:i:s');
            $serviceorder1->capNhat($objorder);
            echo "Cập nhật đơn hàng thành công";
        } else {
            echo "fail";
        }
    }
    if($_POST["action"] == "complete")
    {
        $serviceorder = new functionorders();
        $order = $serviceorder->laychitietdonhangtheocode($_POST['code']);
        if($order->status == "Vận chuyển") {
            $serviceorder1 = new functionorders();
            $objorder = new dataorders();
            $objorder->id = $order->id;
            $objorder->status = "Hoàn thành";
            $objorder->updated_at = date('Y-m-d H:i:s');
            $serviceorder1->capNhat($objorder);
            echo "Cập nhật đơn hàng thành công";
        } else {
            echo "fail";
        }
    }
    if($_POST["action"] == "reorder")
    {
        $serviceorder = new functionorders();
        $order = $serviceorder->laychitietdonhangtheocode($_POST['code']);
        if($order->status == "Hủy") {
            $serviceorder1 = new functionorders();
            $objorder = new dataorders();
            $objorder->id = $order->id;
            $objorder->status = "Đang chờ";
            $objorder->updated_at = date('Y-m-d H:i:s');
            $serviceorder1->capNhat($objorder);
            echo "Cập nhật đơn hàng thành công";
        } else {
            echo "fail";
        }
    }
}

?>