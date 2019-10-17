<?php
    include('../../Model/ketnoi.php');
    include('../../Model/dataproducts.php');
    include('../../Model/dataproductimages.php');
    include('../../Model/dataattributes.php');
    include('../../Model/dataattributeproducts.php');
    include('../../Model/datacategories.php');
    include('../../Model/datacustomers.php');
    include('../../Model/datacontacts.php');
    include('../../Controller/functionproducts.php');
    include('../../Controller/functionproductimages.php');
    include('../../Controller/functionattributes.php');
    include('../../Controller/functionattributeproducts.php');
    include('../../Controller/functioncategories.php');
    include('../../Controller/functioncustomers.php');
    include('../../Controller/functioncontacts.php');
$servicecate = new functioncategories();

session_start();

$tuKhoa = "";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Electro</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="../../View/public/frontend/css/bootstrap.min.css"/>

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="../../View/public/frontend/css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="../../View/public/frontend/css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="../../View/public/frontend/css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="../../View/public/frontend/css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="../../View/public/frontend/css/style.css"/>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="../../View/public/frontend/img/AdminLTELogo.png">
</head>
<body>
<!-- HEADER -->
<header>
    <!-- TOP HEADER -->
    <div id="top-header">
        <div class="container">
            <ul class="header-links pull-right">
                <li><a href="#"><i class="fa fa-dollar"></i> VND</a></li>
                <?php
                    if(empty($_SESSION) || !isset($_SESSION['email'])) {
                        ?>
                        <li><a href="../../View/frontend/login.php"><i class="fa fa-sign-in"></i> Đăng nhập</a></li>
                        <li><a href="../../View/frontend/register.php"><i class="fa fa-registered"></i> Đăng ký</a></li>
                        <?php
                    }
                    else {
                        ?>
                        <li><a href="../../View/frontend/userdetail.php?email=<?php echo $_SESSION['email']; ?>">Xin chào, <?php echo $_SESSION['name']; ?> <i class="fa fa-user-o"></i> Tài khoản</a></li>
                        <li><a href="../../View/frontend/logout.php"><i class="fa fa-sign-out"></i> Đăng xuất</a></li>
                        <?php
                    }
                ?>
            </ul>
        </div>
    </div>
    <!-- /TOP HEADER -->

    <!-- MAIN HEADER -->
    <div id="header">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <!-- LOGO -->
                <div class="col-md-3">
                    <div class="header-logo">
                        <a href="../../View/frontend/index.php" class="logo">
                            <img src="../../View/public/frontend/img/logo.png" alt="">
                        </a>
                    </div>
                </div>
                <!-- /LOGO -->

                <!-- SEARCH BAR -->
                <div class="col-md-6">
                    <div class="header-search">
                        <form method="get" action="../../View/frontend/search.php">
                            <input class="input" type="search" name="txtTuKhoa" value="<?php echo $tuKhoa; ?>" placeholder="Điền tên sản phẩm ..." aria-label="Search">
                            <input class="search-btn" type="submit" name="btnTimKiem" value="Tìm kiếm"/>
                        </form>
                    </div>
                </div>
                <!-- /SEARCH BAR -->

                <!-- ACCOUNT -->
                <div class="col-md-3 clearfix">
                    <div class="header-ctn">
                        <!-- Cart -->
                        <div>
                            <a href="#" aria-expanded="true">
                                <i class="fa fa-shopping-cart"></i>
                                <span>Giỏ hàng</span>
                            </a>
                        </div>
                        <!-- /Cart -->

                        <!-- Menu Toogle -->
                        <div class="menu-toggle">
                            <a href="#">
                                <i class="fa fa-bars"></i>
                                <span>Menu</span>
                            </a>
                        </div>
                        <!-- /Menu Toogle -->
                    </div>
                </div>
                <!-- /ACCOUNT -->
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </div>
    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->
<!-- NAVIGATION -->
<nav id="navigation">
    <!-- container -->
    <div class="container">
        <!-- responsive-nav -->
        <div id="responsive-nav">
            <!-- NAV -->
            <ul class="main-nav nav navbar-nav">
                <?php
                $lstdms = $servicecate->laydanhmuc();
                foreach ($lstdms as $lstdm)
                {
                    if($lstdm->name == "Home")
                    {
                        ?>
                        <li class="active"><a href="../../View/frontend/index.php"><?php echo $lstdm->name; ?></a></li>
                        <?php
                    }
                    else
                    {
                        ?>
                        <li><a href="../../View/frontend/category.php?slug=<?php echo $lstdm->slug; ?>"><?php echo $lstdm->name; ?></a></li>
                        <?php
                    }
                }
                ?>
            </ul>
            <!-- /NAV -->
        </div>
        <!-- /responsive-nav -->
    </div>
    <!-- /container -->
</nav>
<!-- /NAVIGATION -->