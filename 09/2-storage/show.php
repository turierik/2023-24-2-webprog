<?php
    $id = $_GET['id'] ?? -1;
    include_once('Storage.php');
    $stor = new Storage(new JsonIO('data.json'));
    $d = $stor -> findById($id);

    if ($d === null){
        header("location: index.php");
        exit();
    }
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