<?php
	class functionadmins
	{
		private $ketNoi;
	        
	    function __construct() 
	    {
	        $this->ketNoi = ketnoi::getConnection();
	    }

        function laychitietadmin($username, $password)
        {
            $objadmin = new dataadmins();

            $SQL = "Select * from admins where username='".$username."'and password='".$password."'";

            $q = mysqli_query($this->ketNoi,$SQL);

            while($row = mysqli_fetch_array($q))
            {
                $objadmin = new dataadmins();

                $objadmin->id = $row['id'];

                $objadmin->username = $row['username'];
            }

            $this->ketNoi->close();

            return $objadmin;
        }
	}
?>