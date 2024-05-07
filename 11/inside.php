<?php
    session_start();
    // ha nincs bejelentkezve, akkor takarodjon innen!!!
    if (!isset($_SESSION['user_id'])){
        header('location: login.php');
        exit();
    }
    $users = json_decode(file_get_contents("users.json"), true);
    $matches = array_filter($users, fn($u) => $u['id'] === $_SESSION['user_id']);
    $key = array_keys($matches)[0];
    $user = $matches[$key];
?>

<h1>Nagyon titkos oldal.</h1>

Szia, <?= $user['username'] ?>!
<a href="logout.php">Kijelentkezés</a>