<?php
    $full_name = $_POST['full_name'] ?? '';
    $email = $_POST['email'] ?? '';
    $age = $_POST['age'] ?? '';
    $gender = $_POST['gender'] ?? '';

    $errors = [];
    if ($_POST){
        if ($full_name === '')
            $errors['full_name'] = 'Név megadása kötelező!';
        else if ( count(explode(' ', $full_name)) < 2 )
            $errors['full_name'] = 'Név legalább 2 szó legyen!';

        if ($email === '')
            $errors['email'] = 'Email megadása kötelező!';
        else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $errors['email'] = 'Email helytelen!';

        if ($age === '')
            $errors['age'] = 'Kor megadása kötelező!';
        else if (filter_var($age, FILTER_VALIDATE_INT) === false)
            $errors['age'] = 'Kor egész szám kell legyen!';
        else if ($age < 18)
            $errors['age'] = 'Kor legalább 18 év kell legyen!';

        if ($gender === '')
            $errors['gender'] = 'Nem megadása kötelező!';
        else if ( !in_array($gender, ['m', 'f']) )
            $errors['gender'] = 'Érvénytelen nem!';
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
    <form action="2.php" method="POST" novalidate>
        Teljes név: <input type="text" name="full_name" value="<?= $full_name ?>">
        <?= $errors['full_name'] ?? '' ?> <br>
        <!-- val: kötelező, legalább 2 szóból áll -->

        E-mail: <input type="text" name="email" value="<?= $email ?>">
        <?= $errors['email'] ?? '' ?> <br>
        <!-- val: kötelező, formailag helyes email -->

        Kor: <input type="text" name="age" value="<?= $age ?>">
        <?= $errors['age'] ?? '' ?> <br>
        <!-- val: kötelező, egész szám, min. 18 -->

        Nem: 
        <?= $errors['gender'] ?? '' ?> <br>
        <input type="radio" name="gender" value="m"
        <?= $gender === 'm' ? 'checked' : '' ?>
        > férfi <br>
        <input type="radio" name="gender" value="f"
        <?= $gender === 'f' ? 'checked' : '' ?>
        > nő <br>
        <!-- val: kötelező, m vagy f -->

        <button type="submit">OK</button>

    </form>

    <?php if ($_POST && count($errors) === 0): ?>
        Üdv, <?= $full_name ?> <?= $gender === 'm' ? 'bácsi' : 'néni'?>!
    <?php endif; ?>
</body>
</html>