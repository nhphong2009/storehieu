<?php
	class functionorders
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        public function timkiemdonhang($tuKhoa)
        {
            $lstdonhang = Array();
            
            $SQL = "Select * from orders where 1 = 1";
            
            if(strlen($tuKhoa) > 0)
            {
                $SQL .= " AND (code like '%" . $tuKhoa . "%')";
            }
            $result = mysqli_query($this->ketNoi, $SQL);
            
            while($row = mysqli_fetch_array($result))
            {
                $objdonhang = new dataorders();
                
                $objdonhang->id = $row['id'];
                
                $objdonhang->code = $row['code'];

                $objdonhang->customer_name = $row['customer_name'];

                $objdonhang->customer_email = $row['customer_email'];

                $objdonhang->customer_phone = $row['customer_phone'];

                $objdonhang->customer_address = $row['customer_address'];

                $objdonhang->status = $row['status'];

                $objdonhang->created_at = $row['created_at'];

                $objdonhang->updated_at = $row['updated_at'];

                array_push($lstdonhang, $objdonhang);
            }
            
            $this->ketNoi->close();
            
            return $lstdonhang;
        }

		function laydonhang()
		{
			$lstdonhang = Array();
            
            $SQL = "Select * from orders";
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objdonhang = new dataorders();

                $objdonhang->id = $row['id'];

                $objdonhang->code = $row['code'];

                $objdonhang->customer_name = $row['customer_name'];

                $objdonhang->customer_email = $row['customer_email'];

                $objdonhang->customer_phone = $row['customer_phone'];

                $objdonhang->customer_address = $row['customer_address'];

                $objdonhang->status = $row['status'];

                $objdonhang->created_at = $row['created_at'];

                $objdonhang->updated_at = $row['updated_at'];

                array_push($lstdonhang, $objdonhang);
            }

            $this->ketNoi->close();
            
            return $lstdonhang;
		}

		function laydonhangtheoemail($email)
		{
			$lstdonhang = Array();

            $SQL = "Select * from orders where customer_email = '". $email ."'";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objdonhang = new dataorders();

                $objdonhang->id = $row['id'];

                $objdonhang->code = $row['code'];

                $objdonhang->customer_name = $row['customer_name'];

                $objdonhang->customer_email = $row['customer_email'];

                $objdonhang->customer_phone = $row['customer_phone'];

                $objdonhang->customer_address = $row['customer_address'];

                $objdonhang->status = $row['status'];

                $objdonhang->created_at = $row['created_at'];

                $objdonhang->updated_at = $row['updated_at'];

                array_push($lstdonhang, $objdonhang);
            }

            $this->ketNoi->close();

            return $lstdonhang;
		}

		function laychitietdonhang($id)
		{
			$objdonhang = new dataorders();
            
            $SQL = "Select * from orders where id=".$id;
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objdonhang = new dataorders();

                $objdonhang->id = $row['id'];

                $objdonhang->code = $row['code'];

                $objdonhang->customer_name = $row['customer_name'];

                $objdonhang->customer_email = $row['customer_email'];

                $objdonhang->customer_phone = $row['customer_phone'];

                $objdonhang->customer_address = $row['customer_address'];

                $objdonhang->status = $row['status'];

                $objdonhang->created_at = $row['created_at'];

                $objdonhang->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();
            
            return $objdonhang;
		}

		function laychitietdonhangtheocode($code)
		{
			$objdonhang = new dataorders();

            $SQL = "Select * from orders where code=".$code;

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objdonhang = new dataorders();

                $objdonhang->id = $row['id'];

                $objdonhang->code = $row['code'];

                $objdonhang->customer_name = $row['customer_name'];

                $objdonhang->customer_email = $row['customer_email'];

                $objdonhang->customer_phone = $row['customer_phone'];

                $objdonhang->customer_address = $row['customer_address'];

                $objdonhang->status = $row['status'];

                $objdonhang->created_at = $row['created_at'];

                $objdonhang->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();

            return $objdonhang;
		}

		public function themMoi($donhang)
        {
            $sql = "INSERT INTO orders(code, customer_name, customer_email, customer_phone, customer_address, status, created_at, updated_at) VALUES('$donhang->code', '$donhang->customer_name', '$donhang->customer_email', '$donhang->customer_phone', '$donhang->customer_address', '$donhang->status', '$donhang->created_at', '$donhang->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới đơn hàng thành công!');history.back();</script>";
            }
        }

        public function capNhat($donhang)
        {
            $sql = "Update orders set status = '$donhang->status', updated_at = '$donhang->updated_at' where id = '$donhang->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật đơn hàng thành công');</script>";
            }
        }
        
        public function xoadonhang($id)
        {
            $sql = "Delete from orders where id = ".$id;
            
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