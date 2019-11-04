<?php include ('./header.php');?>
<?php
$servicecon = new functioncontacts();
if(isset($_REQUEST['btnOK']))
{
    if($_POST['name'] == "" && $_POST['email'] == "" && $_POST['phone'] == "" && $_POST['message']) {
        ?>
        <script>
            alert('Vui lòng nhập đầy đủ thông tin');
            history.back();
        </script>
        <?php
    }
    else{
        $objlienhe = new datacontacts();

        $objlienhe->name = $_POST['name'];
        $objlienhe->email = $_POST['email'];
        $objlienhe->phone = $_POST['phone'];
        $objlienhe->message = $_POST['message'];

        $objlienhe->created_at = date('Y-m-d H:i:s');
        $objlienhe->updated_at = date('Y-m-d H:i:s');
        $servicecon->themMoi($objlienhe);
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
                <h3 class="breadcrumb-header">Liên hệ</h3>
                <ul class="breadcrumb-tree">
                    <li><a href="../../View/frontend/index.php">Home</a></li>
                    <li class="active">Liên hệ</li>
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
                        <h3 class="title">Liên hệ</h3>
                    </div>
                    <form action="../../View/frontend/contact.php" method="post">
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
                            <textarea class="input" name="message" id="message_add" placeholder="Tin nhắn"></textarea>
                        </div>
                        <div class="form-group">
                            <input class="input" type="submit" name="btnOK" id="btnOK" value="Gửi thông tin liên hệ">
                        </div>
                    </form>
                </div>
                <!-- /Billing Details -->
            </div>
            <div class="col-md-5">
                <div class="contact">
                    <div class="section-title">
                        <h3 class="title">Về chúng tôi</h3>
                    </div>
                    <p>
                        Nguyễn Minh Hiếu 06/03/1998<br/>
                        Nguyễn Hữu Huân 20/08/1998<br/>
                        Lê Văn Hưởng 24/12/1998
                    </p>
                    <ul class="footer-links">
                        <li><a href="#"><i class="fa fa-map-marker"></i>Hà Nội</a></li>
                        <li><a href="#"><i class="fa fa-phone"></i>0111-111-111</a></li>
                        <li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->
<?php include ('./footer.php');?>
<script>
    $('#btnOK').click(function(){
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
                            //validate message
                            var message = $('#message_add').val();
                            if (message !== '') {
                                return true;
                            } else {
                                alert('Bạn chưa điền tin nhắn!');
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
    })
</script>
