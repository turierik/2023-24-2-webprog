<?php
    $pdo = new PDO('sqlite:database.sqlite');

    // 1. egyszerű, paraméter nélküli lekérdezések
    $q = $pdo -> query("SELECT * FROM animals");
    $res = $q -> fetchAll();
    var_dump($res);

    // 2. paraméteres lekérdézés --> PREPARED STATEMENT!!!
    $minId = 3; // ez unsafe, lehet benne bármi (pl. sql injection)
    $stmt = $pdo -> prepare("SELECT * FROM animals WHERE id >= :minId");
    $stmt -> execute([ 'minId' => $minId ]);
    $res = $stmt -> fetchAll();
    var_dump($res);
?>