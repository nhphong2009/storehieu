<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="../../View/public/frontend/img/i5-3470.jpg" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Lựa chọn<br>CPU</h3>
                        <?php
                            $servicecate6 = new functioncategories();
                        ?>
                        <a href="../../View/frontend/category.php?slug=<?php echo $servicecate6->laychitietdanhmuc("2")->slug; ?>" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="../../View/public/frontend/img/msi-b450m-pro-vdh-plus.png" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Lựa chọn<br>Mainboard</h3>
                        <?php
                        $servicecate7 = new functioncategories();
                        ?>
                        <a href="../../View/frontend/category.php?slug=<?php echo $servicecate7->laychitietdanhmuc("3")->slug; ?>" class="cta-btn">Mua ngay <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->

            <!-- shop -->
            <div class="col-md-4 col-xs-6">
                <div class="shop">
                    <div class="shop-img">
                        <img src="../../View/public/frontend/img/vga-inno3d-geforce-rtx-2070-super-ichill-x3-ultra-giam-700k-khi-build-kem-case-.jpg" alt="">
                    </div>
                    <div class="shop-body">
                        <h3>Lựa chọn<br>VGA</h3>
                        <?php
                        $servicecate8 = new functioncategories();
                        ?>
                        <a href="../../View/frontend/category.php?slug=<?php echo $servicecate8->laychitietdanhmuc("4")->slug; ?>" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <!-- /shop -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản phẩm mới</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <?php
                                    $serviceattrpro = new functionattributeproducts();
                                    $dsattrpros = $serviceattrpro->laysanphammoi();
                                    foreach ($dsattrpros as $dsattrpro)
                                    {
                                        $servicepro = new functionproducts();
                                        $lstpros = $servicepro->laychonsanpham($dsattrpro->product_id);
                                        foreach ($lstpros as $lstpro) {
                                            $servicecate1 = new functioncategories();
                                            ?>
                                            <!-- product -->
                                            <div class="product">
                                                <div class="product-img">
                                                    <img class="thumbnail" src="../../View/public/frontend/img/<?php echo $lstpro->thumbnail; ?>" alt="">
                                                </div>
                                                <div class="product-body">
                                                    <p class="product-category"><?php echo $servicecate1->laychitietdanhmuc($lstpro->category_id)->name; ?></p>
                                                    <h3 class="product-name"><a href="../../View/frontend/productdetail.php?slug=<?php echo $lstpro->slug ?>"><?php echo $lstpro->code; ?></a></h3>
                                                    <h4 class="product-price"><?php echo number_format($lstpro->price); ?>VNĐ</h4>
                                                </div>
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn" onclick="moveToDetail('<?php echo $lstpro->slug; ?>')"><i class="fa fa-shopping-cart"></i>
                                                        thêm vào giỏ hàng
                                                    </button>
                                                </div>
                                            </div>
                                            <!-- /product -->
                                            <?php
                                        }
                                    }
                                ?>
                            </div>
                            <div id="slick-nav-1" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">

            <!-- section title -->
            <div class="col-md-12">
                <div class="section-title">
                    <h3 class="title">Sản phẩm bán chạy nhất</h3>
                </div>
            </div>
            <!-- /section title -->

            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab2" class="tab-pane fade in active">
                            <div class="products-slick" data-nav="#slick-nav-2">
                                <?php
                                $serviceattrpro1 = new functionattributeproducts();
                                $dsattrprotopsells = $serviceattrpro1->laysanphambanchay();
                                foreach ($dsattrprotopsells as $dsattrprotopsell)
                                {
                                    $servicepro1 = new functionproducts();
                                    $lstprotopsells = $servicepro1->laychonsanpham($dsattrprotopsell->product_id);
                                    foreach ($lstprotopsells as $lstprotopsell) {
                                        $servicecate2 = new functioncategories();
                                        ?>
                                        <!-- product -->
                                        <div class="product">
                                            <div class="product-img">
                                                <img src="../../View/public/frontend/img/<?php echo $lstprotopsell->thumbnail; ?>" alt="">
                                            </div>
                                            <div class="product-body">
                                                <div class="getData" style="display: none" data-thumbnail="<?php echo $lstprotopsell->thumbnail; ?>" data-name="<?php echo $lstprotopsell->name; ?>" data-price="<?php echo $lstprotopsell->price; ?>" data-slug="<?php echo $lstprotopsell->slug; ?>"></div>
                                                <p class="product-category"><?php echo $servicecate2->laychitietdanhmuc($lstprotopsell->category_id)->name; ?></p>
                                                <h3 class="product-name"><a href="../../View/frontend/productdetail.php?slug=<?php echo $lstprotopsell->slug ?>"><?php echo $lstprotopsell->code; ?></a></h3>
                                                <h4 class="product-price"><?php echo number_format($lstprotopsell->price); ?>VNĐ</h4>
                                            </div>
                                            <div class="add-to-cart">
                                                <button class="add-to-cart-btn" onclick="moveToDetail('<?php echo $lstprotopsell->slug; ?>')"><i class="fa fa-shopping-cart"></i> thêm vào giỏ hàng</button>
                                            </div>
                                        </div>
                                        <!-- /product -->
                                        <?php
                                    }
                                }
                                ?>
                            </div>
                            <div id="slick-nav-2" class="products-slick-nav"></div>
                        </div>
                        <!-- /tab -->
                    </div>
                </div>
            </div>
            <!-- /Products tab & slick -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Sản phẩm mới</h4>
                    <div class="section-nav">
                        <div id="slick-nav-3" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-3">
                    <div>
                        <?php
                        $serviceattrpro2 = new functionattributeproducts();
                        $dsattrpronews = $serviceattrpro2->laysanphammoi();
                        foreach ($dsattrpronews as $dsattrpronew)
                        {
                            $servicepro2 = new functionproducts();
                            $lstpronews = $servicepro2->laychonsanpham($dsattrpronew->product_id);
                            foreach ($lstpronews as $lstpronew) {
                                $servicecate3 = new functioncategories();
                                ?>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../View/public/frontend/img/<?php echo $lstpronew->thumbnail; ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $servicecate3->laychitietdanhmuc($lstpronew->category_id)->name; ?></p>
                                        <h3 class="product-name"><a href="../../View/frontend/productdetail.php?slug=<?php echo $lstpronew->slug ?>"><?php echo $lstpronew->code; ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($lstpronew->price); ?>VNĐ</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Sản phẩm bán chạy nhất</h4>
                    <div class="section-nav">
                        <div id="slick-nav-4" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-4">
                    <div>
                        <?php
                        $serviceattrpro3 = new functionattributeproducts();
                        $dsattrprotopsells1 = $serviceattrpro3->laysanphambanchay();
                        foreach ($dsattrprotopsells1 as $dsattrprotopsell1)
                        {
                            $servicepro3 = new functionproducts();
                            $lstprontopsells1 = $servicepro3->laychonsanpham($dsattrprotopsell1->product_id);
                            foreach ($lstprontopsells1 as $lstprontopsell1) {
                                $servicecate4 = new functioncategories();
                                ?>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../View/public/frontend/img/<?php echo $lstprontopsell1->thumbnail; ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $servicecate4->laychitietdanhmuc($lstprontopsell1->category_id)->name; ?></p>
                                        <h3 class="product-name"><a href="../../View/frontend/productdetail.php?slug=<?php echo $lstprontopsell1->slug ?>"><?php echo $lstprontopsell1->code; ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($lstprontopsell1->price); ?>VNĐ</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="clearfix visible-sm visible-xs"></div>

            <div class="col-md-4 col-xs-6">
                <div class="section-title">
                    <h4 class="title">Sản phẩm đặc tính</h4>
                    <div class="section-nav">
                        <div id="slick-nav-5" class="products-slick-nav"></div>
                    </div>
                </div>

                <div class="products-widget-slick" data-nav="#slick-nav-5">
                    <div>
                        <?php
                        $serviceattrpro4 = new functionattributeproducts();
                        $dsattrprofetus = $serviceattrpro4->laysanphamdactinh();
                        foreach ($dsattrprofetus as $dsattrprofetu)
                        {
                            $servicepro4 = new functionproducts();
                            $lstpronfetus = $servicepro4->laychonsanpham($dsattrprofetu->product_id);
                            foreach ($lstpronfetus as $lstpronfetu) {
                                $servicecate5 = new functioncategories();
                                ?>
                                <!-- product widget -->
                                <div class="product-widget">
                                    <div class="product-img">
                                        <img src="../../View/public/frontend/img/<?php echo $lstpronfetu->thumbnail; ?>" alt="">
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category"><?php echo $servicecate5->laychitietdanhmuc($lstpronfetu->category_id)->name; ?></p>
                                        <h3 class="product-name"><a href="../../View/frontend/productdetail.php?slug=<?php echo $lstpronfetu->slug ?>"><?php echo $lstpronfetu->code; ?></a></h3>
                                        <h4 class="product-price"><?php echo number_format($lstpronfetu->price); ?>VNĐ</h4>
                                    </div>
                                </div>
                                <!-- /product widget -->
                                <?php
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
