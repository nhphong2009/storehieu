<?php include('./header.php'); ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Giỏ hàng</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="#">Trang chủ</a></li>
                    <li class="active">Giỏ hàng</li>
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row" id="show_all_card">
            <?php
            if(empty($_SESSION['shopping_cart'])) {
                echo "<h3>Bạn chưa thêm sản phẩm nào vào giỏ hàng</h3>";
            } else {
            ?>
            <button class="form-control empty">Xóa giỏ hàng</button>
            <table width="100%" border="1px solid #aaa" class="show_cart">
                <thead>
                    <tr>
                        <th width="20%" style="text-align: center">Hình ảnh</th>
                        <th width="30%" style="text-align: center">Tên sản phẩm</th>
                        <th style="text-align: center">Số lượng</th>
                        <th style="text-align: center">Giá sản phẩm</th>
                        <th style="text-align: center">Thành tiền</th>
                        <th style="text-align: center">Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sum = 0;
                        foreach ($_SESSION['shopping_cart'] as $shopping_cart)
                        {
                            $total = $shopping_cart['product_quantity'] * $shopping_cart['product_price'];
                            ?>
                            <tr id="<?php echo $shopping_cart['product_slug']; ?>">
                                <td style="text-align: center"><img width="200px" height="200px" src="../public/frontend/img/<?php echo $shopping_cart['product_image']; ?>" alt="<?php echo $shopping_cart['product_image']; ?>"></td>
                                <td style="text-align: center"><?php echo $shopping_cart['product_name']; ?></td>
                                <td style="text-align: center"><?php echo $shopping_cart['product_quantity']; ?></td>
                                <td style="text-align: center"><?php echo number_format($shopping_cart['product_price']); ?></td>
                                <td style="text-align: center"><?php echo number_format($total); ?></td>
                                <td style="text-align: center">
                                    <button data-slug="<?php echo $shopping_cart['product_slug']; ?>" class="form-control remove">Xóa</button>
                                </td>
                            </tr>
                            <?php
                            $sum += $total;
                        }
                    ?>
                    <tr>
                        <td colspan="4" style="text-align: right">Tổng tiền</td>
                        <td colspan="2" style="text-align: center"><?php echo number_format($sum); ?></td>
                    </tr>
                </tbody>
            </table>
            <button class="form-control checkout">Thanh toán</button>
            <?php } ?>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include('./footer.php'); ?>
<script>
    $('.checkout').click(function () {
        window.location.href = 'http://storehieu.local.com/View/frontend/checkout.php';
    })
    $('.empty').click(function () {
        var action = "empty";
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{
                action:action
            },
            success:function(response)
            {
                $('.show_cart').remove();
                $('.checkout').remove();
                $('.empty').remove();
                $('#show_all_card').append('<h3>Bạn chưa thêm sản phẩm nào vào giỏ hàng</h3>');
                alert("Đã xóa giỏ hàng");
            }
        });
    });
    $('.remove').click(function () {
        var product_slug = $(this).attr("data-slug");
        var action = "remove";
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{
                product_slug:product_slug,
                action:action
            },
            success:function(response)
            {
                $("#"+ product_slug).remove();
                alert("Đã xóa sản phẩm trong giỏ hàng");
            }
        });
    });
</script>
