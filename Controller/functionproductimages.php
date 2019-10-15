<?php
	class functionproductimages
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        function layanhsanpham()
        {
            $lstanhsanpham = Array();

            $SQL = "Select * from product_images order by id DESC";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objanhsanpham = new dataproductimages();

                $objanhsanpham->id = $row['id'];

                $objanhsanpham->product_id = $row['product_id'];

                $objanhsanpham->link = $row['link'];

                array_push($lstanhsanpham, $objanhsanpham);
            }

            $this->ketNoi->close();

            return $lstanhsanpham;
        }

        function laychitietcuaanhsanpham($id)
        {
            $lstanhsanpham = Array();

            $SQL = "Select * from product_images where product_id=". $id ." order by id DESC";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objanhsanpham = new dataproductimages();

                $objanhsanpham->id = $row['id'];

                $objanhsanpham->product_id = $row['product_id'];

                $objanhsanpham->link = $row['link'];

                array_push($lstanhsanpham, $objanhsanpham);
            }

            $this->ketNoi->close();

            return $lstanhsanpham;
        }

		function laychitietanhsanpham($id)
		{
			$objanhsanpham = new dataproductimages();
            
            $SQL = "Select * from product_images where id=".$id;
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objanhsanpham = new dataproductimages();

                $objanhsanpham->id = $row['id'];

                $objanhsanpham->product_id = $row['product_id'];

                $objanhsanpham->link = $row['link'];

                $objanhsanpham->created_at = $row['created_at'];

                $objanhsanpham->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();
            
            return $objanhsanpham;
		}

		public function themMoi($anhsanpham)
        {
            $sql = "INSERT INTO product_images(product_id, link, created_at, updated_at) VALUES('$anhsanpham->product_id', '$anhsanpham->link', '$anhsanpham->created_at', '$anhsanpham->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới ảnh sản phẩm thành công!');history.back();</script>";
            }
        }

        public function capNhat($anhsanpham)
        {
            $sql = "Update product_images set product_id = '$anhsanpham->product_id', link = '$anhsanpham->link', updated_at = '$anhsanpham->updated_at' where id = '$anhsanpham->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật ảnh sản phẩm thành công');history.back();</script>";
            }
        }
        
        public function xoaanhsanpham($id)
        {
            $sql = "Delete from product_images where id = ".$id;
            
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