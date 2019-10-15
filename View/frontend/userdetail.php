<?php include('./header.php'); ?>
<?php
$username = ""; $email = ""; $phone = ""; $address = ""; $name = ""; $id = 0; $password = ""; $confirmpassword = "";
$service = new functioncustomers();

if(isset($_GET['email']))
{
    $email = $_GET['email'];

    $objkhachhang = $service->laychitietkhachhangtheoemail($email);

    if ($objkhachhang != null)
    {
        $id = $objkhachhang->id;
        $username = $objkhachhang->username;
        $name = $objkhachhang->name;
        $email = $objkhachhang->email;
        $phone = $objkhachhang->phone;
        $address = $objkhachhang->address;
    }
}

if(isset($_REQUEST['btnOK'])) {
    if ($_POST['password'] == $_POST['confirmpassword']) {
        $objkhachhang = new datacustomers();

        $id = intval($_POST['id']);

        $objkhachhang->username = $_POST['username'];
        $objkhachhang->password = $_POST['password'];
        $objkhachhang->name = $_POST['name'];
        $objkhachhang->email = $_POST['email'];
        $objkhachhang->phone = $_POST['phone'];
        $objkhachhang->address = $_POST['address'];

        $objkhachhang->id = intval($_POST['id']);

        if ($id > 0) {
            if (isset($_POST['resetpassword'])) {
                $objkhachhang->id = $id;
                $objkhachhang->updated_at = date('Y-m-d H:i:s');
                $service->capNhat($objkhachhang);
            } else {
                $objkhachhang->id = $id;
                $objkhachhang->updated_at = date('Y-m-d H:i:s');
                $service->capNhatkhongmatkhau($objkhachhang);
            }
        }
    } else {
        ?>
        <script>
            alert('Mật khẩu và nhập lại mật khẩu không trùng khớp');
            window.location.href = 'http://storehieu.local.com/View/admin/addcustomer.php';
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
                <h3 class="breadcrumb-header">Thông tin tài khoản</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="../../View/frontend/index.php">Trang chủ</a></li>
                    <li class="active">Thông tin tài khoản</li>
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
                        <h3 class="title">Sửa thông tin</h3>
                    </div>
                    <form action="./userdetail.php" method="post">
                        <div class="form-group">
                            <input class="input" type="text" name="username" id="username_add" value="<?php echo $username; ?>" placeholder="Tài khoản">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group">
                            <div class="input-checkbox">
                                <input type="checkbox" name="resetpassword" id="reset-password">
                                <label for="reset-password">
                                    <span></span>
                                    Đặt lại mật khẩu?
                                </label>
                                <div class="caption">
                                    <input class="input" type="password" name="password" id="password_add" placeholder="Mật khẩu" minlength="6">
                                </div>
                                <div class="caption">
                                    <input class="input" type="password" name="confirmpassword" id="comfirmpassword_add" placeholder="Nhập lại mật khẩu" minlength="6">
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="name" id="name_add" value="<?php echo $name; ?>" placeholder="Tên">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="email" id="email_add" value="<?php echo $email; ?>" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="phone" id="phone_add" value="<?php echo $phone; ?>" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" id="address_add" value="<?php echo $address; ?>" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <input class="input" type="submit" name="btnOK" id="btnOK" value="Thay đổi thông tin">
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
