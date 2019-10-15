<?php
include '../../Model/ketnoi.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';
include '../../Model/dataattributeproducts.php';
include '../../Controller/functionattributeproducts.php';
include '../../Model/dataattributes.php';
include '../../Controller/functionattributes.php';

$product_id = 0; $attribute_id = 0; $value = ""; $id = 0;

$service = new functionattributeproducts();

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    $objattrpro = $service->laychitietthuoctinhsanphan($id);

    if ($objattrpro != null)
    {
        $id = $objattrpro->id;
        $product_id = $objattrpro->product_id;
        $attribute_id = $objattrpro->attribute_id;
        $value = $objattrpro->value;
    }
}

if(isset($_REQUEST['ok']))
{
    $objattrpro = new dataattributeproducts();

    $id = intval($_POST['id']);

    $objattrpro->value = $_POST['value'];
    $objattrpro->product_id = intval($_POST['product_id']);
    $objattrpro->attribute_id = intval($_POST['attribute_id']);

    if($id > 0)
    {
        $objattrpro->id = $id;
        $service->capNhat($objattrpro);
    }
    else{
        $service->themMoi($objattrpro);
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
                    <form action="./addattributeproduct.php" method="POST" role="form" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm danh mục</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="product_id">Sản phẩm (*)</label>
                                <select name="product_id" class="form-control">
                                    <?php
                                    $pros = new functionproducts();

                                    $dspros= $pros->laysanpham();

                                    foreach($dspros as $dspro)
                                    {
                                        if($dspro->id == $product_id)
                                        {
                                            echo "<option selected='selected' value='"
                                                . $dspro->id . "'>" .
                                                $dspro->name . "</option>";
                                        }
                                        else
                                        {
                                            echo "<option value='" . $dspro->id . "'>" .
                                                $dspro->name . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>
                            <div class="form-group">
                                <label for="attribute_id">Thuộc tính (*)</label>
                                <select name="attribute_id" class="form-control">
                                    <?php
                                    $attrs = new functionattributes();

                                    $dsattrs= $attrs->laythuoctinh();

                                    foreach($dsattrs as $dsattr)
                                    {
                                        if($dsattr->id == $attribute_id)
                                        {
                                            echo "<option selected='selected' value='"
                                                . $dsattr->id . "'>" .
                                                $dsattr->name . "</option>";
                                        }
                                        else
                                        {
                                            echo "<option value='" . $dsattr->id . "'>" .
                                                $dsattr->name . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="value">Giá trị (*)</label>
                                <input type="text" name="value" class="form-control" value="<?php echo $value; ?>" id="value_add" placeholder="value">
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
        history.back();
    });
</script>