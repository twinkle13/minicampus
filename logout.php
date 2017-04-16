<?php
session_start();
session_destroy();
session_unset();
//nset($_SESSION['userid']);
//unset($_SESSION['username']);
header('Location: login.php');
?>