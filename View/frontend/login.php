<?php include('./header.php'); ?>
<?php
    $servicecus = new functioncustomers();
    $username = $_POST['username']; $password = $_POST['password'];
    if(isset($_POST['btnOK'])) {
        if ($username == "" && $password == "") {
            ?>
            <script>
                alert('Vui lòng nhập tài khoản và mật khẩu');history.back();
            </script>
            <?php
        }
        else{
            $cus = $servicecus->laychitietkhachhangtheotaikhoanmatkhau($username, $password);
            $_SESSION['name'] = $cus->name;
            $_SESSION['email'] = $cus->email;
            $_SESSION['phone'] = $cus->phone;
            $_SESSION['address'] = $cus->address;
            ?>
            <script>
                alert('Đăng nhập thành công');
                window.location.href = 'http://storehieu.local.com/View/frontend/index.php';
            </script>
            <?php
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
