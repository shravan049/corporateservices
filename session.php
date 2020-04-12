<?php

//session_start();
if (empty($_SESSION['userid'])) {
    header('location:admin_login.php');
    exit();
} 