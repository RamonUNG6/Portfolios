<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/icone.png" type="image/png">
    <link rel="stylesheet" href="../css/pesquisaaluno.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Buscar Aluno</title>
</head>
<body>
    <h1>Buscar Aluno</h1>
    <img src="../img/logo.png" alt="Autoescola TCB" class="logo">
    <div id="busca">
    <form action="buscaraluno.php" method="post">
        Digite o nome do aluno: <i class="fas fa-question-circle" title="Obter detalhes do aluno."></i><br>
        <input type="text" name="cxpesquisa" id="cxpesquisa">
        <input type="submit" value="Buscar">
    </form>
    </div>
    <div class="alunos">
    <?php
    include_once '../factory/conexao.php';
    $result = mysqli_query($conn, "SELECT * FROM tbaluno");

    echo "<table border='1'>";
    echo "<tr><th>Nome</th><th>Excluir</th><th>Editar</th></tr>";

    while ($row = mysqli_fetch_array($result)){
        echo "<tr>";
        echo "<td>" . $row['nome'] . "</td>";
        echo "<td><form method='POST' action='excluir.php'><input type='hidden' name='id' value='" . $row['nome'] . "'><input type='hidden' name='cod' value='" . $row['cod'] . "'><input type='submit' value='Excluir'></form></td>";
        echo "<td><form method='POST' action='alteraraluno.php'><input type='hidden' name='id' value'" . $row['nome'] . "'><input type='hidden' name='cod' value='" . $row['cod'] . "'><input type='submit' value='Editar'></form></td>";
        echo "</tr>";
        
    }
    ?>
    </div>
</body>
</html>