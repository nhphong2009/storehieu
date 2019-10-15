<?php include('./header.php'); ?>
<?php
$servicecus = new functioncustomers();
if(isset($_REQUEST['btnOK']))
{
    if($_POST['username'] == "" && $_POST['password'] == "" && $_POST['confirmpassword'] == "" && $_POST['name'] == "" && $_POST['email'] == "" && $_POST['phone'] == "" && $_POST['address']) {
        ?>
        <script>
            alert('Vui lòng nhập đầy đủ thông tin');
            history.back();
        </script>
        <?php
    }
    else{
        if ($_POST['password'] == $_POST['confirmpassword']) {
            $objkhachhang = new datacustomers();

            $objkhachhang->username = $_POST['username'];
            $objkhachhang->password = $_POST['password'];
            $objkhachhang->name = $_POST['name'];
            $objkhachhang->email = $_POST['email'];
            $objkhachhang->phone = $_POST['phone'];
            $objkhachhang->address = $_POST['address'];

            $objkhachhang->created_at = date('Y-m-d H:i:s');
            $objkhachhang->updated_at = date('Y-m-d H:i:s');
            $servicecus->themMoi($objkhachhang);
        } else {
            ?>
            <script>
                alert('Mật khẩu và nhập lại mật khẩu không trùng khớp');
                history.back();
            </script>
            <?php
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
                <h3 class="breadcrumb-header">Đăng ký</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="../../View/frontend/index.php">Home</a></li>
                    <li class="active">Đăng ký</li>
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
                        <h3 class="title">Đăng ký</h3>
                    </div>
                    <form action="../../View/frontend/register.php" method="post">
                        <div class="form-group">
                            <input class="input" type="text" name="username" id="username_add" placeholder="Tài khoản">
                        </div>
                        <div class="form-group">
                            <input class="input" type="password" name="password" id="password_add" placeholder="Mật khẩu" minlength="6">
                        </div>
                        <div class="form-group">
                            <input class="input" type="password" name="confirmpassword" id="comfirmpassword_add" placeholder="Nhập lại mật khẩu" minlength="6">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="name" id="name_add" placeholder="Tên">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="email" id="email_add" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="phone" id="phone_add" placeholder="Số điện thoại">
                        </div>
                        <div class="form-group">
                            <input class="input" type="text" name="address" id="address_add" placeholder="Địa chỉ">
                        </div>
                        <div class="form-group">
                            <input class="input" type="submit" name="btnOK" id="btnOK" value="Đăng ký">
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
<script>
    $('#btnOK').click(function(){
        //validate username
        var username = $('#username_add').val();
        if(username !== ''){
            //validate password
            var password = $('#password_add').val();
            if(password !== ''){
                if(password.length <= 6){
                    alert('Mật khẩu nhập tối thiểu là 6!');
                    return false;
                }else{
                    //validate confirm password
                    var confirmpassword = $('#comfirmpassword_add').val();
                    if(confirmpassword !== ''){
                        if(confirmpassword.length <= 6){
                            alert('Nhập lại mật khẩu nhập tối thiểu là 6!');
                            return false;
                        }else{
                            if(confirmpassword !== password){
                                alert('Mật khẩu và nhập lại mật khẩu phải giống nhau');
                                return false;
                            }else {
                                //validate name
                                var name = $('#name_add').val();
                                if (name !== '') {
                                    //validate email
                                    var emails = $('#email_add').val();
                                    var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
                                    if (emails !== '') {
                                        if (regex.test(emails) == false) {
                                            alert('Email của bạn không đúng định dạng!');
                                            return false;
                                        } else {
                                            //validate mobile
                                            var vnf_regex = /(09|01[2|6|8|9])+([0-9]{7})\b/g;
                                            var mobile = $('#phone_add').val();
                                            if (mobile !== '') {
                                                if (vnf_regex.test(mobile) == false) {
                                                    alert('Số điện thoại của bạn không đúng định dạng!');
                                                    return false;
                                                } else {
                                                    //validate address
                                                    var address = $('#address_add').val();
                                                    if (address !== '') {
                                                        return true;
                                                    } else {
                                                        alert('Bạn chưa điền địa chỉ!');
                                                        return false;
                                                    }
                                                }
                                            } else {
                                                alert('Bạn chưa điền số điện thoại!');
                                                return false;
                                            }
                                        }
                                    } else {
                                        alert('Bạn chưa điền email!');
                                        return false;
                                    }
                                } else {
                                    alert('Bạn chưa đền tên!');
                                    return false;
                                }
                            }
                        }
                    }else{
                        alert('Bạn chưa điền nhập lại mật khẩu!');
                        return false;
                    }
                }
            }else{
                alert('Bạn chưa điền mật khẩu!');
                return false;
            }
        }else{
            alert('Bạn chưa điền tên đăng nhập!');
            return false;
        }
    })
</script>
