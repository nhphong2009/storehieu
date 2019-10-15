<?php
	class functionattributes
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

		function laythuoctinh()
		{
			$lstthuoctinh = Array();
            
            $SQL = "Select * from attributes  order by id DESC";
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinh = new dataattributes();

                $objthuoctinh->id = $row['id'];

                $objthuoctinh->code = $row['code'];

                $objthuoctinh->name = $row['name'];

                $objthuoctinh->created_at = $row['created_at'];

                $objthuoctinh->updated_at = $row['updated_at'];

                array_push($lstthuoctinh, $objthuoctinh);
            }

            $this->ketNoi->close();
            
            return $lstthuoctinh;
		}

		function laythuoctinhtheoidthuoctinh($id)
		{
			$lstthuoctinh = Array();

            $SQL = "Select * from attributes where id=".$id;

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinh = new dataattributes();

                $objthuoctinh->id = $row['id'];

                $objthuoctinh->code = $row['code'];

                $objthuoctinh->name = $row['name'];

                $objthuoctinh->created_at = $row['created_at'];

                $objthuoctinh->updated_at = $row['updated_at'];

                array_push($lstthuoctinh, $objthuoctinh);
            }

            $this->ketNoi->close();

            return $lstthuoctinh;
		}

		function laychitietthuoctinh($id)
		{
			$objthuoctinh = new dataattributes();
            
            $SQL = "Select * from attributes where id=".$id;
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objthuoctinh = new dataattributes();

                $objthuoctinh->id = $row['id'];

                $objthuoctinh->code = $row['code'];

                $objthuoctinh->name = $row['name'];

                $objthuoctinh->created_at = $row['created_at'];

                $objthuoctinh->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();
            
            return $objthuoctinh;
		}

		public function themMoi($thuoctinh)
        {
            $sql = "INSERT INTO attributes(code ,name, created_at, updated_at) VALUES('$thuoctinh->code', '$thuoctinh->name', '$thuoctinh->created_at', '$thuoctinh->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới thuộc tính thành công!');history.back();</script>";
            }
        }

        public function capNhat($thuoctinh)
        {
            $sql = "Update attributes set name = '$thuoctinh->name', updated_at = '$thuoctinh->updated_at' where id = '$thuoctinh->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật thuộc tính thành công');history.back();</script>";
            }
        }
        
        public function xoathuoctinh($id)
        {
            $sql = "Delete from attributes where id = ".$id;
            
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