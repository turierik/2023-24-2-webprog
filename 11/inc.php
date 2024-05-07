<?php
    session_start();
    $_SESSION['counter']++;
    header('location: counter.php');
?>