<?php
session_start();

if (isset($_SESSION['name']))
{
//    unset($_SESSION['email']);
    session_destroy();
    echo "<script>history.back();</script>";
}
?>