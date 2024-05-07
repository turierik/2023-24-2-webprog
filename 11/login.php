<?php
    session_start();
    if (isset($_SESSION['user_id'])){
        header('location: inside.php');
        exit();
    }
    $user = $_POST['user'] ?? '';
    $pass = $_POST['pass'] ?? '';
    $error = "";
    if ($_POST) {
        $users = json_decode(file_get_contents("users.json"), true);
        $matches = array_filter($users, fn($u) => $u['username'] === $user);
        if (count($matches) > 0) {
            $key = array_keys($matches)[0];
            $wannaLoginUser = $matches[$key];
            if (password_verify($pass, $wannaLoginUser['password'])){
                // jó a jelszó
                $_SESSION['user_id'] = $wannaLoginUser['id'];
                header('location: inside.php');
            } else {
                // rossz a jelszó
                $error = "Hibás jelszó!";
            }
        } else {
            $error = "Hibás felhasználónév!";
        }
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
    <h1>Bejelentkezés</h1>

    <?= $error ?>

    <form action="login.php" method="POST">
        User: <input type="text" name="user"> <span id="userExists"> </span><br>
        Pass: <input type="password" name="pass"><br>
        <button type="submit">OK</button>
    </form>
    <script>
        const userInput = document.querySelector('input');
        const userExistsSpan = document.querySelector('#userExists');
        
        async function handleUserInput(){
            const resp = await fetch('userExists.php?username=' + userInput.value)
            const data = await resp.json()
            userExistsSpan.innerText = data == 0 ? '❌' : '✔️';
        }

        userInput.addEventListener('input', handleUserInput);

    </script>
</body>
</html>