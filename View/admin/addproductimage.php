<?php
include '../../Model/ketnoi.php';
include '../../Model/dataproductimages.php';
include '../../Controller/functionproductimages.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';

$product_id = ""; $link = ""; $id = 0;

$service = new functionproductimages();

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    $objanhsanpham = $service->laychitietanhsanpham($id);

    if ($objanhsanpham != null)
    {
        $id = $objanhsanpham->id;
        $product_id = $objanhsanpham->product_id;
        $link = $objanhsanpham->link;
    }
}

if(isset($_REQUEST['ok']))
{
    $objanhsanpham = new dataproductimages();

    $id = intval($_POST['id']);

    $link = "";
    if ( strlen($_FILES["fUpload"]["name"]) > 0)
    {
        move_uploaded_file($_FILES["fUpload"]["tmp_name"], "../public/frontend/img/". date('m-d-Y_H_i_s') . $_FILES["fUpload"]["name"]);
        $link = date('m-d-Y_H_i_s').$_FILES["fUpload"]["name"];
    } else {
        $link = $_POST['hImage'];
    }
    $objanhsanpham->link = $link;
    $objanhsanpham->product_id = intval($_POST['product_id']);
    if($id > 0)
    {
        $objanhsanpham->id = $id;
        $objanhsanpham->updated_at = date('Y-m-d H:i:s');
        $service->capNhat($objanhsanpham);
    }
    else{
        $objanhsanpham->created_at = date('Y-m-d H:i:s');
        $objanhsanpham->updated_at = date('Y-m-d H:i:s');
        $service->themMoi($objanhsanpham);
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
                <form action="./addproductimage.php" method="POST" role="form" enctype="multipart/form-data">
                    <div class="modal-header">
                        <h4 class="modal-title">Thêm thuộc tính</h4>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="product_id">Sản phẩm (*)</label>
                            <select name="product_id" class="form-control">
                                <?php
                                $funcpro = new functionproducts();

                                $listpros= $funcpro->laysanpham();

                                foreach($listpros as $listpro)
                                {
                                    if($listpro->id == $product_id)
                                    {
                                        echo "<option selected='selected' value='"
                                            . $listpro->id . "'>" .
                                            $listpro->name . "</option>";
                                    }
                                    else
                                    {
                                        echo "<option value='" . $listpro->id . "'>" .
                                            $listpro->name . "</option>";
                                    }
                                }
                                ?>
                            </select>
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="value">Ảnh (*)</label>
                            <input type="file" name="fUpload"/>
                            <input type="hidden" name="hImage" value="<?php echo $link; ?>"/><?php echo $link; ?>
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