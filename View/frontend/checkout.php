<?php include('./header.php'); ?>
<?php
    if(empty($_SESSION['shopping_cart'])){
        echo "<script> window.location.href = 'http://storehieu.local.com/View/frontend/index.php' </script>";
    } else {
        $name = "";
        $phone = 0;
        $email = "";
        $address = "";
        if (!empty($_SESSION['email'])) {
            $serviceorder = new functionorders();
            $name = $_SESSION['name'];
            $phone = "0" . $_SESSION['phone'];
            $email = $_SESSION['email'];
            $address = $_SESSION['address'];

            if (isset($_POST['btnThanhToan'])) {
                if ($_POST['name'] == null && $_POST['phone'] == 0 && $_POST['email'] == null && $_POST['address'] == null) {
                    echo "<script>alert('Vui lòng điền đầy đủ thông tin');history.back();</script>";
                } else {
                    $objorder = new dataorders();
                    $code = rand(1, 10000);
                    $objorder->code = $code;
                    $objorder->customer_name = $name;
                    $objorder->customer_phone = $phone;
                    $objorder->customer_email = $email;
                    $objorder->customer_address = $address;
                    $objorder->status = "Đang chờ";

                    $objorder->created_at = date('Y-m-d H:i:s');
                    $objorder->updated_at = date('Y-m-d H:i:s');
                    $serviceorder->themMoi($objorder);

                    foreach ($_SESSION['shopping_cart'] as $shopping_cart) {
                        $serviceproduct = new functionproducts();
                        $serviceorderdetail = new functionorderdetails();
                        $serviceorder1 = new functionorders();
                        $fncorde = $serviceorder1->laychitietdonhangtheocode($code);
                        $objorderdetail = new dataorderdetails();
                        $proslug = $serviceproduct->laychitietsanphamtheoslug($shopping_cart['product_slug']);
                        $objorderdetail->product_id = $proslug->id;
                        $objorderdetail->quantity = $shopping_cart['product_quantity'];
                        $objorderdetail->price = $shopping_cart['product_price'];
                        $objorderdetail->order_id = $fncorde->id;

                        $objorderdetail->created_at = date('Y-m-d H:i:s');
                        $objorderdetail->updated_at = date('Y-m-d H:i:s');
                        $serviceorderdetail->themMoi($objorderdetail);
                    }
                }
            }
        } else {
            $serviceorder1 = new functionorders();
            if (isset($_POST['btnThanhToan'])) {
                if ($_POST['name'] == null && $_POST['phone'] == 0 && $_POST['email'] == null && $_POST['address'] == null) {
                    echo "<script>alert('Vui lòng điền đầy đủ thông tin');history.back();</script>";
                } else {
                    $objorder1 = new dataorders();
                    $code = rand(1, 10000);
                    $objorder1->code = $code;
                    $objorder1->customer_name = $_POST['name'];
                    $objorder1->customer_phone = $_POST['phone'];
                    $objorder1->customer_email = $_POST['email'];
                    $objorder1->customer_address = $_POST['address'];
                    $objorder1->status = "Đang chờ";

                    $objorder1->created_at = date('Y-m-d H:i:s');
                    $objorder1->updated_at = date('Y-m-d H:i:s');
                    $serviceorder1->themMoi($objorder1);

                    foreach ($_SESSION['shopping_cart'] as $shopping_cart) {
                        $serviceproduct1 = new functionproducts();
                        $serviceorderdetail1 = new functionorderdetails();
                        $serviceorder2 = new functionorders();
                        $fncorde1 = $serviceorder2->laychitietdonhangtheocode($code);
                        $objorderdetail1 = new dataorderdetails();
                        $proslug1 = $serviceproduct1->laychitietsanphamtheoslug($shopping_cart['product_slug']);
                        $objorderdetail1->product_id = $proslug1->id;
                        $objorderdetail1->quantity = $shopping_cart['product_quantity'];
                        $objorderdetail1->price = $shopping_cart['product_price'];
                        $objorderdetail1->order_id = $fncorde1->id;

                        $objorderdetail1->created_at = date('Y-m-d H:i:s');
                        $objorderdetail1->updated_at = date('Y-m-d H:i:s');
                        $serviceorderdetail1->themMoi($objorderdetail1);
                    }
                }
            }
        }
        ?>
        <!-- BREADCRUMB -->
        <div id="breadcrumb" class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="breadcrumb-header">Thanh toán</h3>
                        <ul class="breadcrumb-tree">
                            <li><a href="#">Trang chủ</a></li>
                            <li class="active">Thanh toán</li>
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
                <div class="row">
                    <form action="./checkout.php" method="post">
                        <div class="col-md-7">
                            <!-- Billing Details -->
                            <div class="billing-details">
                                <div class="section-title">
                                    <h3 class="title">Địa chỉ vận chuyển</h3>
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="name" placeholder="Name"
                                           value="<?php echo $name; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="tel" name="phone" placeholder="Phone"
                                           value="<?php echo $phone; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="email" name="email" placeholder="Email"
                                           value="<?php echo $email; ?>">
                                </div>
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Address"
                                           value="<?php echo $address; ?>">
                                </div>
                                <?php
                                if (empty($_SESSION['email'])) {
                                    ?>
                                    <div class="form-group">
                                        <a class="caption" href="../../View/frontend/register.php">Tạo tài khoản mới</a>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
                            <!-- /Billing Details -->
                        </div>

                        <!-- Order Details -->
                        <div class="col-md-5 order-details">
                            <div class="section-title text-center">
                                <h3 class="title">Đơn đặt hàng của bạn</h3>
                            </div>
                            <div class="order-summary">
                                <div class="order-col">
                                    <div><strong>SẢN PHẨM</strong></div>
                                    <div><strong>TỔNG</strong></div>
                                </div>
                                <div class="order-products">
                                    <?php
                                    $sum = 0;
                                    foreach ($_SESSION['shopping_cart'] as $shopping_cart) {
                                        $total = $shopping_cart['product_price'] * $shopping_cart['product_quantity'];
                                        ?>
                                        <div class="order-col">
                                            <div><?php echo $shopping_cart['product_name']; ?></div>
                                            <div><?php echo number_format($shopping_cart['product_price']); ?> VNĐ</div>
                                        </div>
                                        <?php
                                        $sum += $total;
                                    }
                                    ?>
                                </div>
                                <div class="order-col">
                                    <div>Vận chuyển</div>
                                    <div><strong>MIỄN PHÍ</strong></div>
                                </div>
                                <div class="order-col">
                                    <div><strong>TỔNG GIÁ</strong></div>
                                    <div>
                                        <strong class="order-total"><?php echo number_format($sum); ?></strong>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-method">
                                <div class="input-radio">
                                    <input type="radio" name="payment" id="payment-1" checked>
                                    <label for="payment-1">
                                        <span></span>
                                        Phương thức vận chuyển
                                    </label>
                                    <div class="caption">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                    </div>
                                </div>
                            </div>
                            <input type="submit" name="btnThanhToan" class="primary-btn order-submit"
                                   value="THANH TOÁN">
                        </div>
                        <!-- /Order Details -->
                    </form>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /SECTION -->
        <?php include('./footer.php'); ?>
        <?php
    }
?>
