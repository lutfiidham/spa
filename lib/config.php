<?php
ob_start();
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("jasasoft_spa", $con);
unset($_SESSION['menu_active']);
unset($_SESSION['sub_menu_active']); 
?>
