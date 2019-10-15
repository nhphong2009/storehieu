<?php
	class functioncustomers
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        public function timkiemkhachhang($tuKhoa)
        {
            $lstkhachhang = Array();
            
            $SQL = "Select * from customers where 1 = 1";
            
            if(strlen($tuKhoa) > 0)
            {
                $SQL .= " AND (name like '%" . $tuKhoa . "%')";
            }
            $result = mysqli_query($this->ketNoi, $SQL);
            
            while($row = mysqli_fetch_array($result))
            {
                $objkhachhang = new datacustomers();
                
                $objkhachhang->id = $row['id'];

                $objkhachhang->name = $row['name'];

                $objkhachhang->email = $row['email'];

                $objkhachhang->phone = $row['phone'];

                $objkhachhang->address = $row['address'];

                $objkhachhang->created_at = $row['created_at'];

                $objkhachhang->updated_at = $row['updated_at'];

                array_push($lstkhachhang, $objkhachhang);
            }
            
            $this->ketNoi->close();
            
            return $lstkhachhang;
        }

		function laykhachhang()
		{
			$lstkhachhang = Array();
            
            $SQL = "Select * from customers  order by id DESC";
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objkhachhang = new datacustomers();

                $objkhachhang->id = $row['id'];

                $objkhachhang->username = $row['username'];

                $objkhachhang->name = $row['name'];

                $objkhachhang->email = $row['email'];

                $objkhachhang->phone = $row['phone'];

                $objkhachhang->address = $row['address'];

                $objkhachhang->created_at = $row['created_at'];

                $objkhachhang->updated_at = $row['updated_at'];

                array_push($lstkhachhang, $objkhachhang);
            }

            $this->ketNoi->close();
            
            return $lstkhachhang;
		}

		function laychitietkhachhang($id)
		{
			$objkhachhang = new datacustomers();
            
            $SQL = "Select * from customers where id=".$id;
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objkhachhang = new datacustomers();

                $objkhachhang->id = $row['id'];

                $objkhachhang->username = $row['username'];

                $objkhachhang->name = $row['name'];

                $objkhachhang->email = $row['email'];

                $objkhachhang->phone = $row['phone'];

                $objkhachhang->address = $row['address'];

                $objkhachhang->created_at = $row['created_at'];

                $objkhachhang->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();
            
            return $objkhachhang;
		}

		function laychitietkhachhangtheotaikhoanmatkhau($username, $password)
		{
			$objkhachhang = new datacustomers();

            $SQL = "Select * from customers where username='".$username."' and password='".$password."'";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objkhachhang = new datacustomers();

                $objkhachhang->id = $row['id'];

                $objkhachhang->username = $row['username'];

                $objkhachhang->name = $row['name'];

                $objkhachhang->email = $row['email'];

                $objkhachhang->phone = $row['phone'];

                $objkhachhang->address = $row['address'];

                $objkhachhang->created_at = $row['created_at'];

                $objkhachhang->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();

            return $objkhachhang;
		}

		function laychitietkhachhangtheoemail($email)
		{
			$objkhachhang = new datacustomers();

            $SQL = "Select * from customers where email='".$email."'";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objkhachhang = new datacustomers();

                $objkhachhang->id = $row['id'];

                $objkhachhang->username = $row['username'];

                $objkhachhang->name = $row['name'];

                $objkhachhang->email = $row['email'];

                $objkhachhang->phone = $row['phone'];

                $objkhachhang->address = $row['address'];

                $objkhachhang->created_at = $row['created_at'];

                $objkhachhang->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();

            return $objkhachhang;
		}

		public function themMoi($khachhang)
        {
            $sql = "INSERT INTO customers(username, password, name, email, phone, address, created_at, updated_at) VALUES('$khachhang->username', '$khachhang->password', '$khachhang->name', '$khachhang->email', '$khachhang->phone', '$khachhang->address', '$khachhang->created_at', '$khachhang->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới khách hàng thành công!');;history.back();</script>";
            }
        }

        public function capNhatkhongmatkhau($khachhang)
        {
            $sql = "Update customers set username = '$khachhang->username', name = '$khachhang->name', email = '$khachhang->email', phone = '$khachhang->phone', address = '$khachhang->address', updated_at = '$khachhang->updated_at' where id = '$khachhang->id'";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Cập nhật khách hàng thành công');history.back();</script>";
            }
        }

        public function capNhat($khachhang)
        {
            $sql = "Update customers set username = '$khachhang->username', password = '$khachhang->password', name = '$khachhang->name', email = '$khachhang->email', phone = '$khachhang->phone', address = '$khachhang->address', updated_at = '$khachhang->updated_at' where id = '$khachhang->id'";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Cập nhật khách hàng thành công');history.back();</script>";
            }
        }
        
        public function xoakhachhang($id)
        {
            $sql = "Delete from customers where id = ".$id;
            
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