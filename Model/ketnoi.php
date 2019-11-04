<?php
	class ketnoi
	{
		public static function getConnection()
		{
			$con = new mysqli("localhost","root","phong119988","storehieu");
			if($con->connect_error)
			{
				die("Kết nối đến MySQL bị lỗi. Chi tiết: " . 
                $con->connect_error);
			}
			$con->query("SET NAMES 'utf8'");
		    return $con;
		}
	}
?>