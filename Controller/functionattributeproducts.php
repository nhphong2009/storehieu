<?php
	class functionattributeproducts
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        public function timkiemthuoctinhsanpham($tuKhoa)
        {
            $lstthuoctinhsanpham = Array();

            $SQL = "Select *, attribute_products.id as attrpro_id from products inner join attribute_products on products.id = attribute_products.product_id inner join attributes on attribute_products.attribute_id = attributes.id where 1 = 1";

            if(strlen($tuKhoa) > 0)
            {
                $SQL .= " AND (products.name like '%" . $tuKhoa . "%') order by attribute_products.id DESC";
            }
            else
            {
                $SQL .= " order by attribute_products.id DESC";
            }

            $result = mysqli_query($this->ketNoi, $SQL);


            while($row = mysqli_fetch_array($result))
            {
                $objthuoctinhsanpham = new dataattributeproducts();

                $objthuoctinhsanpham->id = $row['attrpro_id'];

                $objthuoctinhsanpham->attribute_id = $row['attribute_id'];

                $objthuoctinhsanpham->product_id = $row['product_id'];

                $objthuoctinhsanpham->value = $row['value'];

                array_push($lstthuoctinhsanpham, $objthuoctinhsanpham);
            }

            $this->ketNoi->close();

            return $lstthuoctinhsanpham;
        }

        function laysanphammoi()
        {
            $lstthuoctinhsanpham = Array();

            $SQL = "Select attribute_products.id as attrpro_id, attribute_id, product_id, value, code, name from attribute_products inner join attributes on attribute_products.attribute_id = attributes.id where value='Mở' and name='New Product'order by attrpro_id desc limit 5";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinhsanpham = new dataattributeproducts();

                $objthuoctinhsanpham->id = $row['attrpro_id'];

                $objthuoctinhsanpham->attribute_id = $row['attribute_id'];

                $objthuoctinhsanpham->product_id = $row['product_id'];

                $objthuoctinhsanpham->value = $row['value'];

                array_push($lstthuoctinhsanpham, $objthuoctinhsanpham);
            }

            $this->ketNoi->close();

            return $lstthuoctinhsanpham;
        }

        function laysanphambanchay()
        {
            $lstthuoctinhsanpham = Array();

            $SQL = "Select attribute_products.id as attrpro_id, attribute_id, product_id, value, code, name from attribute_products inner join attributes on attribute_products.attribute_id = attributes.id where value='Mở' and name='Top Selling' order by attrpro_id desc limit 5";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinhsanpham = new dataattributeproducts();

                $objthuoctinhsanpham->id = $row['attrpro_id'];

                $objthuoctinhsanpham->attribute_id = $row['attribute_id'];

                $objthuoctinhsanpham->product_id = $row['product_id'];

                $objthuoctinhsanpham->value = $row['value'];

                array_push($lstthuoctinhsanpham, $objthuoctinhsanpham);
            }

            $this->ketNoi->close();

            return $lstthuoctinhsanpham;
        }

        function laysanphamdactinh()
        {
            $lstthuoctinhsanpham = Array();

            $SQL = "Select attribute_products.id as attrpro_id, attribute_id, product_id, value, code, name from attribute_products inner join attributes on attribute_products.attribute_id = attributes.id where value='Mở' and name='Feature Product'order by attrpro_id desc limit 5";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinhsanpham = new dataattributeproducts();

                $objthuoctinhsanpham->id = $row['attrpro_id'];

                $objthuoctinhsanpham->attribute_id = $row['attribute_id'];

                $objthuoctinhsanpham->product_id = $row['product_id'];

                $objthuoctinhsanpham->value = $row['value'];

                array_push($lstthuoctinhsanpham, $objthuoctinhsanpham);
            }

            $this->ketNoi->close();

            return $lstthuoctinhsanpham;
        }

        function laysanphamtheoidsanpham($id)
        {
            $lstthuoctinhsanpham = Array();

            $SQL = "Select * from attribute_products where product_id='".$id."' and value != 'Mở'";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinhsanpham = new dataattributeproducts();

                $objthuoctinhsanpham->id = $row['id'];

                $objthuoctinhsanpham->attribute_id = $row['attribute_id'];

                $objthuoctinhsanpham->product_id = $row['product_id'];

                $objthuoctinhsanpham->value = $row['value'];

                array_push($lstthuoctinhsanpham, $objthuoctinhsanpham);
            }

            $this->ketNoi->close();

            return $lstthuoctinhsanpham;
        }

        function laychitietthuoctinhsanphan($id)
        {
            $objthuoctinhsanpham = new dataattributeproducts();

            $SQL = "Select * from attribute_products where id=".$id;

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinhsanpham = new dataattributeproducts();

                $objthuoctinhsanpham->id = $row['id'];

                $objthuoctinhsanpham->attribute_id = $row['attribute_id'];

                $objthuoctinhsanpham->product_id = $row['product_id'];

                $objthuoctinhsanpham->value = $row['value'];
            }

            $this->ketNoi->close();

            return $objthuoctinhsanpham;
        }

        function laychitietthuoctinhsanphamtheoidsanpham($product_id)
        {
            $objthuoctinhsanpham = new dataattributeproducts();

            $SQL = "Select attribute_products.id as attrpro_id, attribute_id, product_id, value, code, name from attribute_products inner join attributes on attribute_products.attribute_id = attributes.id where value='Mở' and name='New Product' and product_id=". $product_id;

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinhsanpham = new dataattributeproducts();

                $objthuoctinhsanpham->id = $row['id'];

                $objthuoctinhsanpham->attribute_id = $row['attribute_id'];

                $objthuoctinhsanpham->product_id = $row['product_id'];

                $objthuoctinhsanpham->value = $row['value'];
            }

            $this->ketNoi->close();

            return $objthuoctinhsanpham;
        }

		public function themMoi($chitietthuoctinh)
        {
            $sql = "INSERT INTO attribute_products(attribute_id, product_id, value) VALUES('$chitietthuoctinh->attribute_id', '$chitietthuoctinh->product_id', '$chitietthuoctinh->value')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới chi tiết thuộc tính thành công!');history.back();</script>";
            }
        }

		public function themMoiincheckout($chitietthuoctinh)
        {
            $sql = "INSERT INTO attribute_products(attribute_id, product_id, value) VALUES('$chitietthuoctinh->attribute_id', '$chitietthuoctinh->product_id', '$chitietthuoctinh->value')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();
        }

        public function capNhat($chitietthuoctinh)
        {
            $sql = "Update attribute_products set attribute_id = '$chitietthuoctinh->attribute_id', product_id = '$chitietthuoctinh->product_id', value = '$chitietthuoctinh->value' where id = '$chitietthuoctinh->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật chi tiết thuộc tính thành công');history.back();</script>";
            }
        }
        
        public function xoachitietthuoctinh($id)
        {
            $sql = "Delete from attribute_products where id = ".$id;
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
            
            if($q)
            {
               return true;
            }
            
            return false;
        }
	}
?>