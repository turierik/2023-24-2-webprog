<?php
    $plate = $_POST['plate'] ?? '';
    $color = $_POST['color'] ?? '';
    $year  = $_POST['year'] ?? '';

    $id = $_GET['id'] ?? -1;
    include_once('Storage.php');
    $stor = new Storage(new JsonIO('data.json'));
    $d = $stor -> findById($id);

    if ($d === null){
        header("location: index.php");
        exit();
    }

    if ($_POST){
        // validálj :)
        $stor -> update($id, [
            "plate" => $plate,
            "color" => $color,
            "year"  => intval($year)
        ]);
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
    <form action="edit.php?id=<?= $id ?>" method="POST">
        Rendszám: <input type="text" value="<?= $d['plate'] ?>" name="plate"><br>
        Szín: <input type="color" value="<?= $d['color'] ?>" name="color"><br>
        Évjárat: <input type="number" value="<?= $d['year'] ?>" name="year"><br>
        <button>Mentés</button>
    </form>
</body>
</html>