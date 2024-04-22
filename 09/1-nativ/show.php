<?php
    $id = $_GET['id'] ?? -1;
    $data = json_decode(file_get_contents('data.json'), true);

    if (!isset($data[$id])){
        header("location: index.php");
        exit();
    }

    $d = $data[$id];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    Rendszám: <?= $d['plate'] ?><br>
    Szín: <?= $d['color'] ?><br>
    Évjárat: <?= $d['year'] ?><br>

    Szerkesztés
    <a href="delete.php?id=<?= $id ?>">Törlés</a>
</body>
</html>