<?php
	class functionadmins
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        public function ktraadmin($user, $pass)
        {
            session_start();

            $sql = "select * from admins where username='$user' and password='$pass'";

            $q = mysqli_query($this->ketNoi,$sql);

            $row = mysqli_fetch_array($q);

            $_SESSION['username'] = $row['username'];
        }
	}
?>