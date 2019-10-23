<?php include('./header.php'); ?>
<?php
    $slug = $_GET['slug'];
    $servicepro = new functionproducts();
    $serviceproimg = new functionproductimages();
    $servicecate7 = new functioncategories();
    $serviceattrpro = new functionattributeproducts();
    $pro = $servicepro->laychitietsanphamtheoslug($slug);
    $proimgs = $serviceproimg->laychitietcuaanhsanpham($pro->id);
    $cate1 = $servicecate7->laychitietdanhmuc($pro->category_id);
    $attrpros = $serviceattrpro->laysanphamtheoidsanpham($pro->id);
?>
<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Product main img -->
            <div class="col-md-5 col-md-push-2">
                <div id="product-main-img">
                    <?php
                        foreach($proimgs as $proimg) {
                            ?>
                            <div class="product-preview">
                                <img src="../../View/public/frontend/img/<?php echo $proimg->link; ?>" alt="">
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <!-- /Product main img -->

            <!-- Product thumb imgs -->
            <div class="col-md-2  col-md-pull-5">
                <div id="product-imgs">
                    <?php
                    foreach($proimgs as $proimg) {
                        ?>
                        <div class="product-preview">
                            <img src="../../View/public/frontend/img/<?php echo $proimg->link; ?>" class="proimg" alt="">
                        </div>
                        <?php
                    }
                    ?>
                </div>
            </div>
            <!-- /Product thumb imgs -->

            <!-- Product details -->
            <div class="col-md-5">
                <div class="product-details">
                    <h2 class="product-name"><?php echo $pro->name; ?></h2>
                    <div>
                        <h3 class="product-price"><?php echo number_format($pro->price); ?></h3>
                        <span class="product-available">
                            <?php
                                if($pro->quantity > 0)
                                {
                                    echo "Còn hàng";
                                }
                                else
                                {
                                    echo "Hết hàng";
                                }
                            ?>
                        </span>
                    </div>
                    <p><?php echo $pro->description; ?></p>

                    <div class="add-to-cart">
                        <div class="qty-label">
                            Qty
                            <div class="input-number">
                                <input type="number" class="quantity" value="1">
                                <span class="qty-up">+</span>
                                <span class="qty-down">-</span>
                            </div>
                        </div>
                        <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
                    </div>

                    <ul class="product-links">
                        <li>Danh mục:</li>
                        <li><a href="../../View/frontend/category.php?slug=<?php echo $cate1->slug; ?>"><?php echo $cate1->name; ?></a></li>
                    </ul>

                </div>
            </div>
            <!-- /Product details -->

            <!-- Product tab -->
            <div class="col-md-12">
                <div id="product-tab">
                    <!-- product tab nav -->
                    <ul class="tab-nav">
                        <li class="active"><a data-toggle="tab" href="#tab1">Chi tiết</a></li>
                        <li><a data-toggle="tab" href="#tab2">Mô tả</a></li>
                    </ul>
                    <!-- /product tab nav -->

                    <!-- product tab content -->
                    <div class="tab-content">
                        <!-- tab1  -->
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-md-12">
                                    <p><?php echo $pro->content; ?></p>
                                </div>
                            </div>
                        </div>
                        <!-- /tab1  -->

                        <!-- tab2  -->
                        <div id="tab2" class="tab-pane fade in">
                            <div class="row">
                                <div class="col-md-12">
                                    <h4 class="h4-attr-pro">Thông tin của sản phẩm</h4>
                                    <?php
                                        if($cate1->name != "CPU")
                                        {
                                            echo $pro->content;
                                        }
                                        else {
                                            ?>
                                            <table class="table-attr-pro">
                                                <?php
                                                foreach ($attrpros as $attrpro) {
                                                    $serviceattr = new functionattributes();
                                                    $attrs = $serviceattr->laythuoctinhtheoidthuoctinh($attrpro->attribute_id);
                                                    foreach ($attrs as $attr) {
                                                        ?>
                                                        <tr>
                                                            <td class="attr-pro"><?php echo $attr->name; ?></td>
                                                            <td class="attr-pro"><?php echo $attrpro->value; ?></td>
                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </table>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /tab2  -->
                    </div>
                    <!-- /product tab content  -->
                </div>
            </div>
            <!-- /product tab -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include('./footer.php'); ?>
<script>
    $('.add-to-cart-btn').click(function () {
        var pro_slug = "<?php echo $pro->slug; ?>";
        var pro_name = "<?php echo $pro->name; ?>";
        var pro_price = <?php echo $pro->price; ?>;
        var pro_qty = $('.quantity').val();
        var pro_img = "<?php echo $pro->thumbnail; ?>";
        var action = "add";
        $.ajax({
            url:"action.php",
            method:"POST",
            data:{
                product_slug:pro_slug,
                product_name:pro_name,
                product_price:pro_price,
                product_quantity:pro_qty,
                product_image:pro_img,
                action:action
            },
            success:function(response)
            {
                alert("Sản phẩm đã được thêm vào giỏ hàng");
            }
        });
    })
</script>
