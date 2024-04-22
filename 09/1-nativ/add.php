<?php
    $plate = $_POST['plate'] ?? '';
    $color = $_POST['color'] ?? '';
    $year  = $_POST['year'] ?? '';
    if ($_POST){
        // validálj :)
        $data = json_decode(file_get_contents('data.json'), true);

        $data[] = [
            "plate" => $plate,
            "color" => $color,
            "year"  => intval($year)
        ];

        file_put_contents('data.json', json_encode($data, JSON_PRETTY_PRINT));
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
    <form action="add.php" method="POST">
        Rendszám: <input type="text" name="plate"><br>
        Szín: <input type="color" name="color"><br>
        Évjárat: <input type="number" name="year"><br>
        <button>Mentés</button>
    </form>
</body>
</html>