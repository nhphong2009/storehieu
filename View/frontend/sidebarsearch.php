
<!-- ASIDE -->
<div id="aside" class="col-md-3">
    <!-- aside Widget -->
    <div class="aside">
        <h3 class="aside-title">Top selling</h3>
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
    <!-- /aside Widget -->
</div>
<!-- /ASIDE -->