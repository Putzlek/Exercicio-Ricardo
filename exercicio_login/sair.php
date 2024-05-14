<?php
    session_start();
    unset($_SESSION['email']);
    unset($_SESSION['senha']);
    $_SESSION = array();
    session_destroy();
    header('Location: login.php')
?>