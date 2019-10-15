<?php
	class functioncategories
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        public function timkiemdanhmuc($tuKhoa)
        {
            $lstdanhmuc = Array();
            
            $SQL = "Select * from categories where 1 = 1";
            
            if(strlen($tuKhoa) > 0)
            {
                $SQL .= " AND (name like '%" . $tuKhoa . "%')";
            }
            $result = mysqli_query($this->ketNoi, $SQL);
            
            while($row = mysqli_fetch_array($result))
            {
                $objdanhmuc = new datacategories();
                
                $objdanhmuc->id = $row['id'];

                $objdanhmuc->name = $row['name'];

                $objdanhmuc->parent_id = $row['parent_id'];

                $objdanhmuc->slug = $row['slug'];

                $objdanhmuc->description = $row['description'];

                $objdanhmuc->created_at = $row['created_at'];

                $objdanhmuc->updated_at = $row['updated_at'];

                array_push($lstdanhmuc, $objdanhmuc);
            }
            
            $this->ketNoi->close();
            
            return $lstdanhmuc;
        }

		function laydanhmuc()
		{
			$lstdanhmuc = Array();
            
            $SQL = "Select * from categories";
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objdanhmuc = new datacategories();

                $objdanhmuc->id = $row['id'];

                $objdanhmuc->name = $row['name'];

                $objdanhmuc->parent_id = $row['parent_id'];

                $objdanhmuc->slug = $row['slug'];

                $objdanhmuc->description = $row['description'];

                $objdanhmuc->created_at = $row['created_at'];

                $objdanhmuc->updated_at = $row['updated_at'];

                array_push($lstdanhmuc, $objdanhmuc);
            }

            $this->ketNoi->close();
            
            return $lstdanhmuc;
		}

		function laychitietdanhmuc($id)
		{
			$objdanhmuc = new datacategories();
            
            $SQL = "Select * from categories where id=".$id;
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objdanhmuc = new datacategories();

                $objdanhmuc->id = $row['id'];

                $objdanhmuc->name = $row['name'];

                $objdanhmuc->parent_id = $row['parent_id'];

                $objdanhmuc->slug = $row['slug'];

                $objdanhmuc->description = $row['description'];

                $objdanhmuc->created_at = $row['created_at'];

                $objdanhmuc->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();
            
            return $objdanhmuc;
		}

		function laychitietdanhmuctheoslug($slug)
		{
			$objdanhmuc = new datacategories();

            $SQL = "Select * from categories where slug='".$slug."'";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objdanhmuc = new datacategories();

                $objdanhmuc->id = $row['id'];

                $objdanhmuc->name = $row['name'];

                $objdanhmuc->parent_id = $row['parent_id'];

                $objdanhmuc->slug = $row['slug'];

                $objdanhmuc->description = $row['description'];

                $objdanhmuc->created_at = $row['created_at'];

                $objdanhmuc->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();

            return $objdanhmuc;
		}

		public function themMoi($danhmuc)
        {
            $sql = "INSERT INTO categories(name, parent_id, slug, description, created_at, updated_at) VALUES('$danhmuc->name', '$danhmuc->parent_id', '$danhmuc->slug', '$danhmuc->description', '$danhmuc->created_at', '$danhmuc->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới danh mục thành công!');history.back();</script>";
            }
        }

        public function capNhat($danhmuc)
        {
            $sql = "Update categories set name = '$danhmuc->name', parent_id = '$danhmuc->parent_id', slug = '$danhmuc->slug', description = '$danhmuc->description', updated_at = '$danhmuc->updated_at' where id = '$danhmuc->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật danh mục thành công');history.back();</script>";
            }
        }
        
        public function xoadanhmuc($id)
        {
            $sql = "Delete from categories where id = ".$id;
            
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