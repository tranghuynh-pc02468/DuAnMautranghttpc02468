<?php
if (isset($_SESSION['user'])) {
    require 'login-info.php';
    
} else {
    
    require '../tai-khoan/login-form.php';
}

?>