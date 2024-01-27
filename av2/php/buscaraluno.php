<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Pesquisa</title>
    <link rel="stylesheet" type="text/css" href="../css/buscaraluno.css" media="screen" />
    <link rel="icon" href="../img/icone.png" type="image/png">
</head>
<body>
    <h1>Dados Cadastrados</h1>
    <?php
    include_once '../factory/conexao.php';
    $nome = $_POST["cxpesquisa"];
    $consulta = "select * from tbaluno where nome='$nome'";
    $executar = mysqli_query($conn,$consulta);
    $dados = mysqli_fetch_array($executar);
    ?>
    <img src="../img/logo.png" alt="Autoescola TCB" id="logo">
    <p>Nome do aluno: <br></p>
    <input type="text" disable="true" class="form" value="<?php echo $dados["nome"]?>"><br>
    <p>Data de Nascimento: </p>
    <input type="date" disable="true" class="form" value="<?php echo $dados["datanasc"]?>"><br>
    <p>RG: </p>
    <input type="text" disable="true" class="form" value="<?php echo $dados["rg"]?>"><br>
    <p>CPF: </p>
    <input type="text" disable="true" class="form" value="<?php echo $dados["cpf"]?>"><br>
    <p>Telefone: </p>
    <input type="text" disable="true" class="form" value="<?php echo $dados["tel"]?>"><br>
    <p>E-mail: </p>
    <input type="text" disable="true" class="form" id="email" value="<?php echo $dados["email"]?>"><br>
    <p>Endereço: </p> 
    <input type="text" disable="true" class="form" value="<?php echo $dados["end"]?>"><br>
    <p>Cidade: </p>
    <input type="text" disable="true" class="form" value="<?php echo $dados["cidade"]?>"><br>
    <p>Estado: </p>
    <input type="text" disable="true" class="form" value="<?php echo $dados["estado"]?>"><br>
    <p>CEP: </p>
    <input type="text" disable="true" class="form" value="<?php echo $dados["cep"]?>"><br><br>
    <p>Tipo de Habilitação: </p>
    <p>Tipo A: </p><input type="text" id="hab" class="form" disable="true" value="<?php echo $dados["hab_a"]?>"><br>
    <p>Tipo B: </p><input type="text" id="hab" class="form" disable="true" value="<?php echo $dados["hab_b"]?>"><br>
    <p>Tipo C: </p><input type="text" id="hab" class="form" disable="true" value="<?php echo $dados["hab_c"]?>"><br>
    <p>Tipo D: </p><input type="text" id="hab" class="form" disable="true" value="<?php echo $dados["hab_d"]?>"><br>
    <p>Tipo E: </p><input type="text" id="hab" class="form" disable="true" value="<?php echo $dados["hab_e"]?>">
</body>
</html>