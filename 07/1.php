<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "Hello";
        echo("Hello");
        print "Hello";
        print("Hello");

        $x = 3;
        echo $x;
        
        $t = [5, 6, 2, 3, 1, 0, 12, 1, 8];
        echo $t;

        //for ($i = 0; $i < count($t); $i++){
        //    echo $t[$i];
        //}

        foreach($t as $el){
            echo $el . " ";
        }

        foreach($t as $i => $el){
            echo $i . "-edik elem: " . $el . "<br>";
        }

        $ember = [
            "neve" => "Minta Péter",
            "kora" => 45,
            "házas" => true
        ];
        foreach($ember as $i => $el){
            echo $i . ": " . $el . "<br>";
        }

        var_dump($t);
        

        $two = 2;
        var_dump(array_filter($t, function ($n) use ($two) {
            return $n % $two === 0;
        }));

        var_dump(array_filter($t, fn($n) => $n % 2 === 0));

        var_dump(array_map(fn($n) => $n * $n, $t));
    ?>
</body>
</html>