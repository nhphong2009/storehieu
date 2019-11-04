<?php
include '../../Model/ketnoi.php';
include '../../Model/datacustomers.php';
include '../../Controller/functioncustomers.php';

$username = ""; $password = ""; $confirmpassword = ""; $name = ""; $email = ""; $phone = 0; $address = ""; $id = 0;

$service = new functioncustomers();

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    $objkhachhang = $service->laychitietkhachhang($id);

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

if($_POST['password'] == $_POST['confirmpassword'])
{
    if(isset($_REQUEST['ok']))
    {
        $objkhachhang = new datacustomers();

        $id = intval($_POST['id']);

        $objkhachhang->username = $_POST['username'];
        $objkhachhang->password = $_POST['password'];
        $objkhachhang->name = $_POST['name'];
        $objkhachhang->email = $_POST['email'];
        $objkhachhang->phone = $_POST['phone'];
        $objkhachhang->address = $_POST['address'];

        $objkhachhang->id = intval($_POST['id']);

        if($id > 0)
        {
            $objkhachhang->id = $id;
            $objkhachhang->updated_at = date('Y-m-d H:i:s');
            $service->capNhat($objkhachhang);
        }
        else{
            $objkhachhang->created_at = date('Y-m-d H:i:s');
            $objkhachhang->updated_at = date('Y-m-d H:i:s');
            $service->themMoi($objkhachhang);
        }
    }
}
else
{
    ?>
    <script>
        alert('Mật khẩu và nhập lại mật khẩu không trùng khớp');
        window.location.href = '../admin/addcustomer.php';
    </script>
    <?php
}
?>
<?php include('./header.php'); ?>
<?php include('./sidebar.php'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <section class="content">
        <div class="container-fluid">
            <div style="width: 95%; margin:auto;">
                <form action="./addcustomer.php" method="POST" role="form" name="addcustomer">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm khách hàng</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="username">Tên đăng nhập (*)</label>
                            <input type="text" name="username" class="form-control" value="<?php echo $username; ?>" id="username_add" placeholder="username">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="password">Mật khẩu (*)</label>
                            <input type="password" name="password" class="form-control" minlength="6">
                        </div>
                        <div class="form-group">
                            <label for="confirmpassword">Nhập lại mật khẩu (*)</label>
                            <input type="password" name="confirmpassword" class="form-control" minlength="6">
                        </div>
                        <div class="form-group">
                            <label for="name">Tên (*)</label>
                            <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" id="name_add" placeholder="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email (*)</label>
                            <input type="text" name="email" class="form-control" value="<?php echo $email; ?>" id="email_add" placeholder="email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Điện thoại (*)</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $phone; ?>" id="phone_add" placeholder="phone">
                        </div>
                        <div class="form-group">
                            <label for="address">Địa chỉ (*)</label>
                            <input type="text" name="address" class="form-control" value="<?php echo $address; ?>" id="address_add" placeholder="address">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="back_page" class="btn btn-default" data-dismiss="modal">Back</button>
                        <input type="submit" id="btnValidate" class="btn btn-primary" name="ok" value="Lưu">
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
<?php include('./footer.php'); ?>
<script>
    $('#back_page').click(function(){
        window.location.href = "../admin/customers.php";
    });
    $('#btnValidate').click(function(){
        //validate email
        var emails = $('#email_add').val();
        var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        if(emails !==''){
            if (regex.test(emails) == false)
            {
                alert('Email của bạn không đúng định dạng!');
                return false;
            }
            else {
                return true;
            }
        }else{
            alert('Bạn chưa điền email!');
            return false;
        }
        //validate mobile
        var vnf_regex = /((09|03|07|08|05)+([0-9]{8})\b)/g;
        var mobile = $('#phone_add').val();
        if(mobile !==''){
            if (vnf_regex.test(mobile) == false)
            {
                alert('Số điện thoại của bạn không đúng định dạng!');
                return false;
            }
            else {
                return true;
            }
        }else{
            alert('Bạn chưa điền số điện thoại!');
            return false;
        }
    })
</script>