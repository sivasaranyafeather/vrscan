<?php
session_start();

if (isset($_SESSION['user'])) {
 
    $_SESSION['msg'] = "You are successfully logged out";
    unset($_SESSION['user']);
    header('Location: login'); 
    exit(); 
}
session_destroy(); 
?>
