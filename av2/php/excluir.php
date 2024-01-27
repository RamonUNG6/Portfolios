<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/excluir.css" media="screen" />
    <link rel="icon" href="../img/icone.png" type="image/png">
    <title>Exclusão de Aluno</title>
</head>
<body>
    <img src="../img/logo.png" alt="Autoescola TCB" class="logo">
    <p>Excluído com sucesso!<br><a href="pesquisaaluno.php">Voltar</a></p>
</body>
</html>

<?php
include_once "../factory/conexao.php";
$cod = $_POST['cod'];
$sql = "DELETE FROM tbaluno WHERE cod = $cod";
mysqli_query($conn,$sql);
?>