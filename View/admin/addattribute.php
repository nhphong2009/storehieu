<?php
include '../../Model/ketnoi.php';
include '../../Model/dataattributes.php';
include '../../Controller/functionattributes.php';

$code = ""; $name = ""; $id = 0;

$service = new functionattributes();

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    $objthuoctinh = $service->laychitietthuoctinh($id);

    if ($objthuoctinh != null)
    {
        $id = $objthuoctinh->id;
        $code = $objthuoctinh->code;
        $name = $objthuoctinh->name;
    }
}
if(isset($_REQUEST['ok']))
{
    if($_POST['code'] != null && $_POST['name'] != null)
    {
        $objthuoctinh = new dataattributes();

        $id = intval($_POST['id']);

        $objthuoctinh->code = $_POST['code'];
        $objthuoctinh->name = $_POST['name'];

        $objthuoctinh->id = intval($_POST['id']);

        if($id > 0)
        {
            $objthuoctinh->id = $id;
            $objthuoctinh->updated_at = date('Y-m-d H:i:s');
            $service->capNhat($objthuoctinh);
        }
        else{
            $objthuoctinh->created_at = date('Y-m-d H:i:s');
            $objthuoctinh->updated_at = date('Y-m-d H:i:s');
            $service->themMoi($objthuoctinh);
        }
    }
    else
    {
        ?>
        <script>
            alert('Nhập đầy đủ các thông tin'); history.back();
        </script>
        <?php
    }
}

?>
<?php include('./header.php'); ?>
<?php include('./sidebar.php'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            <div class="container-fluid">
                <div style="width: 95%; margin:auto;">
                    <form action="./addattribute.php" method="POST" role="form">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm thuộc tính</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="code">Mã (*)</label>
                                <input type="text" name="code" class="form-control" value="<?php echo $code; ?>" id="code_add" placeholder="code">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>
                            <div class="form-group">
                                <label for="name">Tên (*)</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" id="name_add" placeholder="name">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" id="back_page" class="btn btn-default" data-dismiss="modal">Back</button>
                            <input type="submit" class="btn btn-primary" name="ok" value="Lưu">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </div>
<?php include('./footer.php'); ?>
<script>
    $('#back_page').click(function(){
        window.location.href = "http://storehieu.local.com/View/admin/attributes.php";
    });
</script>