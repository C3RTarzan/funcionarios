<?php
session_start();
include("../connection.php");


$_SESSION['todos'] = true;
header('Location: index.php');
exit();
?>