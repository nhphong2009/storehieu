<?php
	class functionorderdetails
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        function laydonhangtheoid($id)
        {
            $lstchitietdonhang = Array();

            $SQL = "Select * from order_details where order_id=".$id;

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $chitietdonhang = new dataorderdetails();

                $chitietdonhang->id = $row['id'];

                $chitietdonhang->order_id = $row['order_id'];

                $chitietdonhang->product_id = $row['product_id'];

                $chitietdonhang->quantity = $row['quantity'];

                $chitietdonhang->price = $row['price'];

                $chitietdonhang->created_at = $row['created_at'];

                $chitietdonhang->updated_at = $row['updated_at'];

                array_push($lstchitietdonhang, $chitietdonhang);
            }

            $this->ketNoi->close();

            return $lstchitietdonhang;
        }

		public function themMoi($chitietdonhang)
        {
            $sql = "INSERT INTO order_details(order_id, product_id, quantity, price, created_at, updated_at) VALUES('$chitietdonhang->order_id', '$chitietdonhang->product_id', '$chitietdonhang->quantity', '$chitietdonhang->price', '$chitietdonhang->created_at', '$chitietdonhang->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                unset($_SESSION["shopping_cart"]);
            }
        }

        public function capNhat($chitietdonhang)
        {
            $sql = "Update order_details set quantity = '$chitietdonhang->quantity', updated_at = '$chitietdonhang->updated_at' where id = '$chitietdonhang->id'";
            
            $q = mysqli_query($this->ketNoi,$sql);
            
            $this->ketNoi->close();
       
            if($q)
            {
                echo "<script>alert('Cập nhật chi tiết đơn hàng thành công');</script>";
            }
        }
        
        public function xoachitietdonhang($id)
        {
            $sql = "Delete from order_details where id = ".$id;
            
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