<?php
include '../../Model/ketnoi.php';
include '../../Model/datacategories.php';
include '../../Controller/functioncategories.php';

$parent_id = 0; $name = ""; $slug = ""; $description = ""; $id = 0;

$service = new functioncategories();

if(isset($_GET['id']))
{
    $id = intval($_GET['id']);

    $objdanhmuc = $service->laychitietdanhmuc($id);

    if ($objdanhmuc != null)
    {
        $id = $objdanhmuc->id;
        $name = $objdanhmuc->name;
        $parent_id = $objdanhmuc->parent_id;
        $slug = $objdanhmuc->slug;
        $description = $objdanhmuc->description;
    }
}

if(isset($_REQUEST['ok']))
{
    $objdanhmuc = new datacategories();

    $id = intval($_POST['id']);

    $objdanhmuc->name = $_POST['name'];
    $objdanhmuc->parent_id = $_POST['parent_id'];
    $objdanhmuc->slug = $_POST['slug'];
    $objdanhmuc->description = $_POST['description'];

    $objdanhmuc->id = intval($_POST['id']);

    if($id > 0)
    {
        $objdanhmuc->id = $id;
        $objdanhmuc->updated_at = date('Y-m-d H:i:s');
        $service->capNhat($objdanhmuc);
    }
    else{
        $objdanhmuc->created_at = date('Y-m-d H:i:s');
        $objdanhmuc->updated_at = date('Y-m-d H:i:s');
        $service->themMoi($objdanhmuc);
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
                    <form action="./addcategory.php" method="POST" role="form">
                        <div class="modal-header">
                            <h4 class="modal-title">Thêm danh mục</h4>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label for="name">Tên (*)</label>
                                <input type="text" name="name" class="form-control" value="<?php echo $name; ?>" id="name_add" placeholder="name">
                                <input type="hidden" name="id" value="<?php echo $id; ?>">
                            </div>
                            <div class="form-group">
                                <label for="parent_id">Danh mục cha (*)</label>
                                <input type="text" name="parent_id" class="form-control" value="<?php echo $parent_id; ?>" id="parent_id_add" placeholder="parent_id">
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
        window.location.href = "http://storehieu.local.com/View/admin/categories.php";
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