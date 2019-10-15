<?php
	class functioncontacts
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

		function laylienhe()
		{
			$lstlienhe = Array();
            
            $SQL = "Select * from contacts  order by id DESC";
            
            $q = mysqli_query($this->ketNoi,$SQL);
            
            while($row = mysqli_fetch_array($q))
            {
                $objlienhe = new datacontacts();

                $objlienhe->id = $row['id'];

                $objlienhe->name = $row['name'];

                $objlienhe->email = $row['email'];

                $objlienhe->phone = $row['phone'];

                $objlienhe->message = $row['message'];

                $objlienhe->created_at = $row['created_at'];

                $objlienhe->updated_at = $row['updated_at'];

                array_push($lstlienhe, $objlienhe);
            }

            $this->ketNoi->close();
            
            return $lstlienhe;
		}

		public function themMoi($lienhe)
        {
            $sql = "INSERT INTO contacts(name, email, phone, message, created_at, updated_at) VALUES('$lienhe->name', '$lienhe->email', '$lienhe->phone', '$lienhe->message', '$lienhe->created_at', '$lienhe->updated_at')";

            $q = mysqli_query($this->ketNoi,$sql);

            $this->ketNoi->close();

            if($q)
            {
                echo "<script>alert('Đã gửi liên hệ thành công!');;history.back();</script>";
            }
        }
        
        public function xoalienhe($id)
        {
            $sql = "Delete from contacts where id = ".$id;
            
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