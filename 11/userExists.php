<?php
    $user = $_GET['username'] ?? '';
    $users = json_decode(file_get_contents("users.json"), true);
    $matches = array_filter($users, fn($u) => $u['username'] === $user);
    echo count($matches);
?>