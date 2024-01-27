<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Sistema</title>
    <link rel="stylesheet" href="../css/loginsistema.css">
    <link rel="icon" href="../img/icone.png" type="image/png">
</head>
<body>
    <img src="../img/logo.png" alt="Autoescola TCB" class="logo">
    <div class="login">
    <form action="verificarlogin.php" method="post">
    <label for="user">Usuário: </label><br>
    <input type="text" name="user" id="user" placeholder='Digite: "Anselmo"'><br><br>
    <label for="password">Senha: </label><br>
    <input type="password" name="password" id="password" placeholder='Digite: "1234"'><br><br>
    <input type="submit" value="Login">
    </form>
    </div>
</body>
</html>