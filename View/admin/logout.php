<?php
session_start();

if (isset($_SESSION['username']))
{
    unset($_SESSION['username']);
    echo "<script>window.location.href = '../admin/admin.php';</script>";
}
?>