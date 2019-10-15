<?php
	class functionproducts
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        public function timkiemsanpham($tuKhoa)
        {
            $lstsanpham = Array();
            
            $SQL = "Select * from products where 1 = 1";
            
            if(strlen($tuKhoa) > 0)
            {
                $SQL .= " AND (name like '%" . $tuKhoa . "%') order by id DESC";
            }
            else
            {
                $SQL .= " order by id DESC";
            }
            $result = mysqli_query($this->ketNoi, $SQL);
            
            while($row = mysqli_fetch_array($result))
            {
                $objsanpham = new dataproducts();
                
                $objsanpham->id = $row['id'];
                
                $objsanpham->code = $row['code'];

                $objsanpham->name = $row['name'];

                $objsanpham->slug = $row['slug'];

                $objsanpham->quantity = $row['quantity'];

                $objsanpham->price = $row['price'];

                $objsanpham->category_id = $row['category_id'];

                $objsanpham->content = $row['content'];

                $objsanpham->description = $row['description'];

                $objsanpham->thumbnail = $row['thumbnail'];

                $objsanpham->created_at = $row['created_at'];

                $objsanpham->updated_at = $row['updated_at'];

                array_push($lstsanpham, $objsanpham);
            }
            
            $this->ketNoi->close();
            
            return $lstsanpham;
        }

		function laysanpham()
		{
			$lstsanpham = Array();
            
            $SQL = "Select * from products";
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objsanpham = new dataproducts();

                $objsanpham->id = $row['id'];

                $objsanpham->code = $row['code'];

                $objsanpham->name = $row['name'];

                $objsanpham->slug = $row['slug'];

                $objsanpham->quantity = $row['quantity'];

                $objsanpham->price = $row['price'];

                $objsanpham->category_id = $row['category_id'];

                $objsanpham->content = $row['content'];

                $objsanpham->description = $row['description'];

                $objsanpham->thumbnail = $row['thumbnail'];

                $objsanpham->created_at = $row['created_at'];

                $objsanpham->updated_at = $row['updated_at'];

                array_push($lstsanpham, $objsanpham);
            }

            $this->ketNoi->close();
            
            return $lstsanpham;
		}

		function laysanphamtheoiddanhmuc($id)
		{
			$lstsanpham = Array();

            $SQL = "Select * from products where category_id=".$id;

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objsanpham = new dataproducts();

                $objsanpham->id = $row['id'];

                $objsanpham->code = $row['code'];

                $objsanpham->name = $row['name'];

                $objsanpham->slug = $row['slug'];

                $objsanpham->quantity = $row['quantity'];

                $objsanpham->price = $row['price'];

                $objsanpham->category_id = $row['category_id'];

                $objsanpham->content = $row['content'];

                $objsanpham->description = $row['description'];

                $objsanpham->thumbnail = $row['thumbnail'];

                $objsanpham->created_at = $row['created_at'];

                $objsanpham->updated_at = $row['updated_at'];

                array_push($lstsanpham, $objsanpham);
            }

            $this->ketNoi->close();

            return $lstsanpham;
		}

        function laychonsanpham($id)
        {
            $lstsanpham = Array();

            $SQL = "Select * from products where id=".$id;

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objsanpham = new dataproducts();

                $objsanpham->id = $row['id'];

                $objsanpham->code = $row['code'];

                $objsanpham->name = $row['name'];

                $objsanpham->slug = $row['slug'];

                $objsanpham->quantity = $row['quantity'];

                $objsanpham->price = $row['price'];

                $objsanpham->category_id = $row['category_id'];

                $objsanpham->content = $row['content'];

                $objsanpham->description = $row['description'];

                $objsanpham->thumbnail = $row['thumbnail'];

                $objsanpham->created_at = $row['created_at'];

                $objsanpham->updated_at = $row['updated_at'];

                array_push($lstsanpham, $objsanpham);
            }

            $this->ketNoi->close();

            return $lstsanpham;
        }

		function laychitietsanpham($id)
		{
			$objsanpham = new dataproducts();
            
            $SQL = "Select * from products where id=".$id;
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objsanpham = new dataproducts();

                $objsanpham->id = $row['id'];

                $objsanpham->code = $row['code'];

                $objsanpham->name = $row['name'];

                $objsanpham->slug = $row['slug'];

                $objsanpham->quantity = $row['quantity'];

                $objsanpham->price = $row['price'];

                $objsanpham->category_id = $row['category_id'];

                $objsanpham->content = $row['content'];

                $objsanpham->description = $row['description'];

                $objsanpham->thumbnail = $row['thumbnail'];

                $objsanpham->created_at = $row['created_at'];

                $objsanpham->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();
            
            return $objsanpham;
		}

		function laychitietsanphamtheoslug($slug)
		{
			$objsanpham = new dataproducts();

            $SQL = "Select * from products where slug='".$slug."'";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objsanpham = new dataproducts();

                $objsanpham->id = $row['id'];

                $objsanpham->code = $row['code'];

                $objsanpham->name = $row['name'];

                $objsanpham->slug = $row['slug'];

                $objsanpham->quantity = $row['quantity'];

                $objsanpham->price = $row['price'];

                $objsanpham->category_id = $row['category_id'];

                $objsanpham->content = $row['content'];

                $objsanpham->description = $row['description'];

                $objsanpham->thumbnail = $row['thumbnail'];

                $objsanpham->created_at = $row['created_at'];

                $objsanpham->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();

            return $objsanpham;
		}

		public function themMoi($sanpham)
        {
            $sql = "INSERT INTO products(code, name, slug, quantity, price, category_id, content, description, thumbnail, created_at, updated_at) VALUES('$sanpham->code', '$sanpham->name', '$sanpham->slug', '$sanpham->quantity', '$sanpham->price', '$sanpham->category_id', '$sanpham->content', '$sanpham->description', '$sanpham->thumbnail', '$sanpham->created_at', '$sanpham->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới sản phẩm thành công!');history.back();</script>";
            }
        }

        public function capNhat($sanpham)
        {
            $sql = "Update products set name = '$sanpham->name', slug = '$sanpham->slug', quantity = '$sanpham->quantity', price = '$sanpham->price', category_id = '$sanpham->category_id', content = '$sanpham->content', description = '$sanpham->description', thumbnail = '$sanpham->thumbnail', updated_at = '$sanpham->updated_at' where id = '$sanpham->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật sản phẩm thành công');history.back();</script>";
            }
        }
        
        public function xoasanpham($id)
        {
            $sql = "Delete from products where id = ".$id;
            
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