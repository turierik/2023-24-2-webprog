<?php
    $a = $_POST['a'] ?? '';
    $b = $_POST['b'] ?? '';
    $errors = [];
    
    if ($_POST){
        if ($a === '')
            $errors['a'] = 'Az A megadása kötelező!';
        else if ( filter_var($a, FILTER_VALIDATE_FLOAT) === false )
            $errors['a'] = 'A nem szám!';

        if ($b === '')
            $errors['b'] = 'Az B megadása kötelező!';
        else if ( filter_var($b, FILTER_VALIDATE_FLOAT) === false )
            $errors['b'] = 'B nem szám!';
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
    <form action="1.php" method="POST">
        a = <input type="text" name="a" value="<?= $a ?>">
        <?= $errors['a'] ?? '' ?><br>
        b = <input type="text" name="b" value="<?= $b ?>">
        <?= $errors['b'] ?? '' ?><br>
        <button type="submit">OK</button>
    </form>

    <?php if ($_POST && count($errors) === 0): ?>
        a + b = <?= $a + $b ?>
    <?php else: ?>
    <ul>
        <?php foreach($errors as $e): ?>
            <li><?= $e ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
</body>
</html> 