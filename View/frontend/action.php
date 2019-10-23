<?php
include '../../Model/ketnoi.php';
include '../../Model/dataorderdetails.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';
include '../../Controller/functionorderdetails.php';

session_start();

if(isset($_POST["action"]))
{
    if($_POST["action"] == "add")
    {
        if(isset($_SESSION["shopping_cart"]))
        {
            $is_available = 0;
            foreach($_SESSION["shopping_cart"] as $keys => $values)
            {
                if($_SESSION["shopping_cart"][$keys]['product_slug'] == $_POST["product_slug"])
                {
                    $is_available++;
                    $_SESSION["shopping_cart"][$keys]['product_quantity'] = $_SESSION["shopping_cart"][$keys]['product_quantity'] + $_POST["product_quantity"];
                }
            }
            if($is_available == 0)
            {
                $item_array = array(
                    'product_name'             =>     $_POST["product_name"],
                    'product_price'            =>     $_POST["product_price"],
                    'product_quantity'         =>     $_POST["product_quantity"],
                    'product_image'            =>     $_POST["product_image"],
                    'product_slug'             =>     $_POST["product_slug"]
                );
                $_SESSION["shopping_cart"][] = $item_array;
            }
        }
        else
        {
            $item_array = array(
                'product_name'             =>     $_POST["product_name"],
                'product_price'            =>     $_POST["product_price"],
                'product_quantity'         =>     $_POST["product_quantity"],
                'product_image'            =>     $_POST["product_image"],
                'product_slug'             =>     $_POST["product_slug"]
            );
            $_SESSION["shopping_cart"][] = $item_array;
        }
    }

    if($_POST["action"] == 'remove')
    {
        foreach($_SESSION["shopping_cart"] as $keys => $values)
        {
            if($values["product_slug"] == $_POST["product_slug"])
            {
                unset($_SESSION["shopping_cart"][$keys]);
            }
        }
    }
    if($_POST["action"] == 'empty')
    {
        unset($_SESSION["shopping_cart"]);
    }

    if($_POST['action'] == 'viewdetail')
    {
        $serviceorde = new functionorderdetails();
        $ordes = $serviceorde->laydonhangtheoid($_POST['order_id']);
        $sum = 0;
        foreach ($ordes as $orde) {
            $servicepro = new functionproducts();
            $getPro = $servicepro->laychitietsanpham($orde->product_id);
            $total = $orde->quantity * $orde->price;
            echo "<tr>";
            echo "<td style='text-align: center;'><img width='200px' height='200px' src='../public/frontend/img/". $getPro->thumbnail ."'></td>";
            echo "<td style='text-align: center; width: 30%;'>". $getPro->name ."</td>";
            echo "<td style='text-align: center;'>". $orde->quantity ."</td>";
            echo "<td style='text-align: center;'>". number_format($orde->price) ." VNĐ</td>";
            echo "</tr>";
            $sum += $total;
        }
        echo "<tr>";
        echo "<td colspan='3' align='right' style='font-weight: bold;'>Thành tiền</td>";
        echo "<td style='text-align: center; font-weight: bold'>". number_format($sum) ." VNĐ</td>";
        echo "</tr>";
    }
}

?>