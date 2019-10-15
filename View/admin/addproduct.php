<?php
include '../../Model/ketnoi.php';
include '../../Model/dataproducts.php';
include '../../Controller/functionproducts.php';
include '../../Model/datacategories.php';
include '../../Controller/functioncategories.php';

$code = ""; $category_id = 0; $quantity = 0; $content = ""; $name = ""; $slug = ""; $description = ""; $thumbnail = ""; $id = 0;

$service = new functionproducts();

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    $objsanpham = $service->laychitietsanpham($id);

    if ($objsanpham != null)
    {
        $id = $objsanpham->id;
        $code = $objsanpham->code;
        $name = $objsanpham->name;
        $price = $objsanpham->price;
        $category_id = $objsanpham->category_id;
        $content = $objsanpham->content;
        $thumbnail = $objsanpham->thumbnail;
        $slug = $objsanpham->slug;
        $quantity = $objsanpham->quantity;
        $description = $objsanpham->description;
    }
}

if(isset($_REQUEST['ok']))
{
    $objsanpham = new dataproducts();

    $id = intval($_POST['id']);

    $objsanpham->code = $_POST['code'];
    $objsanpham->name = $_POST['name'];
    $objsanpham->price = $_POST['price'];
    $objsanpham->content = $_POST['content'];
    $objsanpham->slug = $_POST['slug'];
    $objsanpham->quantity = $_POST['quantity'];
    $objsanpham->description = $_POST['description'];

    $thumbnail = "";
    if ( strlen($_FILES["fUpload"]["name"]) > 0)
    {
        if ($_FILES["fUpload"]["error"] > 0) {
            echo "Không thực hiện tải file được";
        } else {
            if (file_exists("../public/frontend/img/" . $_FILES["fUpload"]["name"])) {
                ?>
                <script>
                    alert('File dữ liệu đã tồn tại ' + <?php echo $_FILES["fUpload"]["name"]; ?>);
                </script>
                <?php
            } else {
                move_uploaded_file($_FILES["fUpload"]["tmp_name"], "../public/frontend/img/" . $_FILES["fUpload"]["name"]);
                $thumbnail = $_FILES["fUpload"]["name"];
            }
        }
    } else {
        $thumbnail = $_POST['hImage'];
    }
    $objsanpham->thumbnail = $thumbnail;
    $objsanpham->category_id = intval($_POST['category_id']);

    if($id > 0)
    {
        $objsanpham->id = $id;
        $objsanpham->updated_at = date('Y-m-d H:i:s');
        $service->capNhat($objsanpham);
    }
    else{
        $objsanpham->created_at = date('Y-m-d H:i:s');
        $objsanpham->updated_at = date('Y-m-d H:i:s');
        $service->themMoi($objsanpham);
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
                    <form action="./addproduct.php" method="POST" role="form" enctype="multipart/form-data">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm danh mục</h4>
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
                            <div class="form-group">
                                <label for="quantity">Số lượng (*)</label>
                                <input type="text" name="quantity" class="form-control" value="<?php echo $quantity; ?>" id="quantity_add" placeholder="quantity">
                            </div>
                            <div class="form-group">
                                <label for="price">Giá (*)</label>
                                <input type="text" name="price" class="form-control" value="<?php echo $price; ?>" id="price_add" placeholder="price">
                            </div>
                            <div class="form-group">
                                <label for="category_id">Danh mục cha (*)</label>
                                <select name="category_id" class="form-control">
                                    <?php
                                    $cates = new functioncategories();

                                    $dscates= $cates->laydanhmuc();

                                    foreach($dscates as $cate)
                                    {
                                        if($cate->id == $category_id)
                                        {
                                            echo "<option selected='selected' value='"
                                                . $cate->id . "'>" .
                                                $cate->name . "</option>";
                                        }
                                        else
                                        {
                                            echo "<option value='" . $cate->id . "'>" .
                                                $cate->name . "</option>";
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="thumbnail">Hình ảnh (*)</label>
                                <input type="file" name="fUpload"/>
                                <input type="hidden" name="hImage" value="<?php echo $thumbnail; ?>"/><?php echo $thumbnail; ?>
                            </div>
                            <div class="form-group">
                                <label for="content">Nội dung (*)</label>
                                <textarea name="content" id="content_add" class="form-control" rows="15">
                                    <?php echo $content; ?>
                                </textarea>
                            </div>
                            <div class="form-group">
                                <label for="slug">Đường dẫn (*)</label>
                                <input type="text" name="slug" class="form-control" value="<?php echo $slug; ?>" id="slug_add" placeholder="slug" readonly>
                            </div>
                            <div class="form-group">
                                <label for="description">Mô tả (*)</label>
                                <input type="text" name="description" class="form-control" value="<?php echo $description; ?>" id="description_add" placeholder="description">
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
        window.location.href = "http://storehieu.local.com/View/admin/products.php";
    });
    $(document).ready(function () {
        $('#name_add').keyup(function () {
            var name, slug;
            name = $(this).val();
            slug = name.toLowerCase();
            slug = slug.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a');
            slug = slug.replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/gi, 'e');
            slug = slug.replace(/i|í|ì|ỉ|ĩ|ị/gi, 'i');
            slug = slug.replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/gi, 'o');
            slug = slug.replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/gi, 'u');
            slug = slug.replace(/ý|ỳ|ỷ|ỹ|ỵ/gi, 'y');
            slug = slug.replace(/đ/gi, 'd');
            slug = slug.replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/gi, '');
            slug = slug.replace(/ /gi, "-");
            slug = slug.replace(/\-\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-\-/gi, '-');
            slug = slug.replace(/\-\-\-/gi, '-');
            slug = slug.replace(/\-\-/gi, '-');
            slug = '@' + slug + '@';
            slug = slug.replace(/\@\-|\-\@|\@/gi, '');
            $('#slug_add').val(slug);
        })
    })
</script>