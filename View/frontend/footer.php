<!-- FOOTER -->
<footer id="footer">
    <!-- top footer -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Về chúng tôi</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
                        <ul class="footer-links">
                            <li><a href="#"><i class="fa fa-map-marker"></i>Hà Nội</a></li>
                            <li><a href="#"><i class="fa fa-phone"></i>0111-111-111</a></li>
                            <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Danh mục</h3>
                        <ul class="footer-links">
                            <?php
                            $servicecate6 = new functioncategories();
                            $lstcates = $servicecate6->laydanhmuc();
                            foreach($lstcates as $lstcate)
                            {
                                if($lstcate->name != "Home")
                                {
                                    echo "<li><a href='../../View/frontend/category.php?slug=". $lstcate->slug ."'>". $lstcate->name ."</a></li>";
                                }
                            }
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="clearfix visible-xs"></div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Thông tin</h3>
                        <ul class="footer-links">
                            <li><a href="../../View/frontend/contact.php">Liên hệ</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-md-3 col-xs-6">
                    <div class="footer">
                        <h3 class="footer-title">Dịch vụ</h3>
                        <ul class="footer-links">
                            <?php
                                if(!empty($_SESSION)) {
                                    ?>
                                    <li><a href="../../View/frontend/userdetail.php?email=<?php echo $_SESSION['email']; ?>">Tài khoản</a></li>
                                    <?php
                                }
                                else {
                                    ?>
                                    <li><a href="../../View/frontend/login.php">Đăng nhập</a></li>
                                    <li><a href="../../View/frontend/register.php">Đăng ký</a></li>
                                    <?php
                                }
                            ?>
                            <li><a href="./addtocart.php">Xem giỏ hàng</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /top footer -->
</footer>
<!-- /FOOTER -->
<!-- jQuery Plugins -->
<script src="../../View/public/frontend/js/jquery.min.js"></script>
<script src="../../View/public/frontend/js/bootstrap.min.js"></script>
<script src="../../View/public/frontend/js/slick.min.js"></script>
<script src="../../View/public/frontend/js/nouislider.min.js"></script>
<script src="../../View/public/frontend/js/jquery.zoom.min.js"></script>
<script src="../../View/public/frontend/js/main.js"></script>
<script>
    function moveToDetail(slug) {
        window.location.href = "http://storehieu.local.com/View/frontend/productdetail.php?slug="+ slug;
    }
</script>
</body>
</html>
