<?php
    session_start();
    unset($_SESSION['nomeSobrenome']);
    unset($_SESSION['senha']);
    header("Location: login.php");
?>