<?php 

session_destroy();  
session_unset();
header("Location:admin_login.php");
?>  