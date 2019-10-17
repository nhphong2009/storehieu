<?php include('./header.php'); ?>
<?php
    $servicecus = new functioncustomers();
    if(!isset($_SESSION['email'])) {
        if (isset($_POST['btnOK'])) {
            $servicecus->laychitietkhachhangtheotaikhoanmatkhau($_POST['username'], $_POST['password']);
        }
    } else {
        echo "<script>history.back();</script>";
    }
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <h3 class="breadcrumb-header">Đăng nhập</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="../../View/frontend/index.php">Home</a></li>
                    <li class="active">Đăng nhập</li>
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

            <div class="col-md-7">
                <!-- Billing Details -->
                <div class="billing-details">
                    <div class="section-title">
                        <h3 class="title">Đăng nhập</h3>
                    </div>
                    <form action="../../View/frontend/login.php" method="post">
                        <div class="form-group">
                            <input class="input" type="text" name="username" placeholder="Tài khoản">
                        </div>
                        <div class="form-group">
                            <input class="input" type="password" name="password" placeholder="Mật khẩu">
                        </div>
                        <div class="form-group">
                            <a class="caption" href="../../View/frontend/register.php">Tạo tài khoản mới</a>
                        </div>
                        <div class="form-group">
                            <input class="input" type="submit" name="btnOK" value="Đăng nhập">
                        </div>
                    </form>
                </div>
                <!-- /Billing Details -->
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include('./footer.php'); ?>
