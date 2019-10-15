<?php
include ('../../Model/ketnoi.php');
include ('../../Model/dataadmins.php');
include ('../../Controller/functionadmins.php');

session_start();

$servicecus = new functionadmins();
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
        $cus = $servicecus->laychitietadmin($username, $password);
        $_SESSION['username'] = $cus->username;
        ?>
        <script>
            alert('Đăng nhập thành công');
            window.location.href = 'http://storehieu.local.com/View/admin/admin.php';
        </script>
        <?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Trang quản trị</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="../public/admin/images/icons/favicon.ico"/>
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/admin/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/admin/vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/admin/vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/admin/vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../public/admin/css/util.css">
    <link rel="stylesheet" type="text/css" href="../public/admin/css/main.css">
    <!--===============================================================================================-->
</head>
<body>

<div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">
            <div class="login100-pic js-tilt" data-tilt>
                <img src="../public/admin/images/img-01.png" alt="IMG">
            </div>

            <form class="login100-form validate-form" action="./login.php" method="post">
					<span class="login100-form-title">
						Trang quản trị
					</span>

                <div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                    <input class="input100" type="text" name="username" placeholder="Tên đăng nhập">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Password is required">
                    <input class="input100" type="password" name="password" placeholder="Mật khẩu">
                    <span class="focus-input100"></span>
                    <span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
                </div>

                <div class="container-login100-form-btn">
                    <input type="submit" class="login100-form-btn" name="btnOK" value="Đăng nhập">
                </div>

                <div class="text-center p-t-12">

                </div>

                <div class="text-center p-t-136">

                </div>
            </form>
        </div>
    </div>
</div>




<!--===============================================================================================-->
<script src="../public/admin/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="../public/admin/vendor/bootstrap/js/popper.js"></script>
<script src="../public/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="../public/admin/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="../public/admin/vendor/tilt/tilt.jquery.min.js"></script>
<script >
    $('.js-tilt').tilt({
        scale: 1.1
    })
</script>
<!--===============================================================================================-->
<script src="../public/admin/js/main.js"></script>

</body>
</html>