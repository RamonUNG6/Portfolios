<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificar Login</title>
</head>
<body>
<?php
    $user = $_POST["user"];
    $password = $_POST["password"];
    if($user == "Anselmo" && $password == "1234"){
        header('Location: pesquisaaluno.php');
    } else {
        echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
    }
    ?>  
</body>
</html>