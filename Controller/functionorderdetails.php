<?php
	class functionorderdetails
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

		function laychitietchitietdonhang($id)
		{
			$objchitietdonhang = new dataorderdetails();
            
            $SQL = "Select * from orderdetails where id=".$id;
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objchitietdonhang = new dataorderdetails();

                $objchitietdonhang->id = $row['id'];

                $objchitietdonhang->order_id = $row['order_id'];

                $objchitietdonhang->product_id = $row['product_id'];

                $objchitietdonhang->quantity = $row['quantity'];

                $objchitietdonhang->created_at = $row['created_at'];

                $objchitietdonhang->updated_at = $row['updated_at'];
            }

            $this->ketNoi->close();
            
            return $objchitietdonhang;
		}

		public function themMoi($chitietdonhang)
        {
            $sql = "INSERT INTO orderdetails(product_id, order_id, quantity, created_at, updated_at) VALUES('$chitietdonhang->product_id', '$chitietdonhang->order_id', '$chitietdonhang->quantity', '$chitietdonhang->created_at', '$chitietdonhang->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Thêm mới chi tiết đơn hàng thành công!');</script>";
            }
        }

        public function capNhat($chitietdonhang)
        {
            $sql = "Update orderdetails set quantity = '$chitietdonhang->quantity', updated_at = '$chitietdonhang->updated_at' where id = '$chitietdonhang->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật chi tiết đơn hàng thành công');</script>";
            }
        }
        
        public function xoachitietdonhang($id)
        {
            $sql = "Delete from orderdetails where id = ".$id;
            
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