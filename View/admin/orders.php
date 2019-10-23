<?php
include '../../Model/ketnoi.php';
include '../../Model/dataorders.php';
include '../../Controller/functionorders.php';
$serviceorder = new functionorders();

$orders = $serviceorder->laydonhang();
?>
<?php include('./header.php'); ?>
<?php include('./sidebar.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Đơn hàng</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="./admin.php">Trang chủ</a></li>
                        <li class="breadcrumb-item active">Đơn hàng</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div style="width: 95%; margin:auto;">
                <a href="./addcustomer.php" class="btn btn-success btn-add">Add</a>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Mã đơn hàng</th>
                            <th>Tên khách hàng</th>
                            <th>Email khách hàng</th>
                            <th>Điện thoại khách hàng</th>
                            <th>Địa chỉ khách hàng</th>
                            <th>Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        foreach ($orders as $order) {
                            echo "<tr>";
                            echo "<td>" . $order->code . "</td>";
                            echo "<td>" . $order->customer_name . "</td>";
                            echo "<td>" . $order->customer_email . "</td>";
                            echo "<td>0" . $order->customer_phone . "</td>";
                            echo "<td>" . $order->customer_address . "</td>";
                            echo "<td id='status-". $order->code ."'>" . $order->status . "</td>";
                            echo "<td><button type='button' data-code='".$order->code."' class='btn btn-danger cancel'>Hủy</button>&nbsp;&nbsp;&nbsp;&nbsp;"
                                . "<button type='button' data-code='".$order->code."' class='btn btn-info reorder'>Đặt lại đơn</button>&nbsp;&nbsp;&nbsp;&nbsp;"
                                . "<button type='button' data-code='".$order->code."' class='btn btn-default shipping'>Vận chuyển</button>&nbsp;&nbsp;&nbsp;&nbsp;"
                                . "<button type='button' data-code='".$order->code."' class='btn btn-success complete'>Hoàn thành</button>&nbsp;&nbsp;&nbsp;&nbsp;"
                                . "<a href='orderdetails.php?id=$order->id'>Xem chi tiết</a>&nbsp;&nbsp;&nbsp;&nbsp;"
                                . "<a onclick='return confirm(\"Bạn có chắc chắn xoá không ?\");' href='deleteorder.php?id=$order->id'>Xoá</a></td></tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
<?php include('./footer.php'); ?>
<script>
    $('.cancel').click(function (e) {
        e.preventDefault();
        var action = "cancel";
        var code = $(this).attr('data-code');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{
                code:code,
                action:action
            },
            success:function(response)
            {
                if(response == "fail") {
                    alert('Đơn hàng đang không ở trạng thái "Đang chờ" hoặc "Vận chuyển"');
                } else {
                    $('#status-' + code).html("Hủy");
                    alert(response);
                }
            }
        });
    });
    $('.shipping').click(function (e) {
        e.preventDefault();
        var action = "shipping";
        var code = $(this).attr('data-code');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{
                code:code,
                action:action
            },
            success:function(response)
            {
                if(response == "fail") {
                    alert('Đơn hàng đang không ở trạng thái "Đang chờ"');
                } else {
                    $('#status-' + code).html("Vận chuyển");
                    alert(response);
                }
            }
        });
    });
    $('.complete').click(function (e) {
        e.preventDefault();
        var action = "complete";
        var code = $(this).attr('data-code');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{
                code:code,
                action:action
            },
            success:function(response)
            {
                if(response == "fail") {
                    alert('Đơn hàng đang không ở trạng thái "Vận chuyển"');
                } else {
                    $('#status-' + code).html("Hoàn thành");
                    alert(response);
                }
            }
        });
    });
    $('.reorder').click(function (e) {
        e.preventDefault();
        var action = "reorder";
        var code = $(this).attr('data-code');
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{
                code:code,
                action:action
            },
            success:function(response)
            {
                if(response == "fail") {
                    alert('Đơn hàng đang không ở trạng thái "Hủy"');
                } else {
                    $('#status-'+code).html("Đang chờ");
                    alert(response);
                }
            }
        });
    })
</script>
