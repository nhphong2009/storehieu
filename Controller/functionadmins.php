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
            session_start();
            $SQL = "Select * from admins where username='".$username."'";
            $result = mysqli_query($this->ketNoi, $SQL);
            if(mysqli_num_rows($result) > 0){
                $row = mysqli_fetch_assoc($result);
                if ($password == $row['password']){
                    $_SESSION['username'] = $row['username'];
                    echo "<script>alert('Đăng nhập thành công');window.location.href='http://storehieu.local.com/View/admin/admin.php';</script>";
                    return true;
                }
                else {
                    echo "<script>alert('Sai tài khoản hoặc mật khẩu');history.back();</script>";
                    return false;
                }
            }
            else{
                echo "<script>alert('Sai tài khoản hoặc mật khẩu');history.back();</script>";
                return false;
            }
        }
	}
?>