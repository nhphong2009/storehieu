<?php
session_start();

if (isset($_SESSION['name']))
{
    unset($_SESSION['name']);
    unset($_SESSION['email']);
    unset($_SESSION['phone']);
    unset($_SESSION['address']);
    echo "<script>window.location.href = 'http://storehieu.local.com/View/frontend/index.php';</script>";
}
?>