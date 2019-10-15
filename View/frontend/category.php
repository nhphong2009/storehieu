<?php include('./header.php'); ?>
<?php
    $slug = $_GET['slug'];
    $servicecate1 = new functioncategories();
    $servicepro = new functionproducts();
    $cate1 = $servicecate1->laychitietdanhmuctheoslug($slug);
    $pros = $servicepro->laysanphamtheoiddanhmuc($cate1->id);
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="#">Home</a></li>
                    <li class="active"><?php echo $cate1->name ."  (". count($pros) ." sản phẩm)"; ?></li>
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
            <?php
                include './sidebarsearch.php';
            ?>
            <!-- STORE -->
            <div id="store" class="col-md-9">
                <!-- store products -->
                <div class="row">
                    <?php
                    foreach($pros as $pro) {
                    $servicecate3 = new functioncategories();
                    $cate3 = $servicecate3->laychitietdanhmuc($pro->category_id);
                    ?><!-- product -->
                    <div class="col-md-4 col-xs-6">
                        <div class="product">
                            <div class="product-img">
                                <img src="../../View/public/frontend/img/<?php echo $pro->thumbnail; ?>" alt="">
                            </div>
                            <div class="product-body">
                                <p class="product-category"><?php echo $cate3->name; ?></p>
                                <h3 class="product-name"><a href="../../View/frontend/productdetail.php?slug=<?php echo $pro->slug; ?>"><?php echo $pro->name; ?></a></h3>
                                <h4 class="product-price"><?php echo number_format($pro->price); ?> VNĐ</h4>
                            </div>
                            <div class="add-to-cart">
                                <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> thêm vào giỏ
                                    hàng
                                </button>
                            </div>
                        </div>
                    </div>
                    <!-- /product -->
                    <?php
                    }
                    ?>
                </div>
                <!-- /store products -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include('./footer.php'); ?>
