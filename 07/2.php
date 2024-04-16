<?php
    date_default_timezone_set("Europe/Budapest");
    echo date("Y.m.d. H:i:s");

    function fakt($n){
        $res = 1;
        for ($i = 2; $i <= $n; $i++)
            $res *= $i;
        return $res;
    }

    function faktr($n){
        if ($n <= 1) return 1;
        return $n * faktr($n - 1);
    }

    echo fakt(5);
    echo faktr(5);

    $errors = [
        "Out of memory.",
        "Out of coffee.",
        "StackOverflow.",
        "Inside of coffee.",
        "IndexOutOfBoundsException"
    ];
?>

<?php for($s = 8; $s <= 28; $s += 2): ?>
    <p style="font-size: <?= $s ?>px">Helló világ!</p>
<?php endfor; ?>

<ul>
    <?php foreach($errors as $e): ?>
        <li><?= $e ?></li>
    <?php endforeach; ?>
</ul>