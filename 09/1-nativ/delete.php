<?php
    $id = $_GET['id'] ?? -1;
    $data = json_decode(file_get_contents('data.json'), true);
    if (isset($data[$id])){
        unset($data[$id]);
        file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
    }
    header("location: index.php");
    exit();
?>