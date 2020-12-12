<?php
    session_start();
    unset($_SESSION['name']);
    header("location: Admin_Login.php");
?>