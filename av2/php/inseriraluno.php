<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrado!</title>
    <link rel="stylesheet" type="text/css" href="../css/inseriraluno.css" media="screen" />
    <link rel="icon" href="../img/icone.png" type="image/png">
</head>
<body>
<?php
if($_POST["cxnome"] != "")
{
    include_once "../factory/conexao.php";
    $nome = $_POST["cxnome"];
    $data = $_POST["cxdata"];
    $rg = $_POST["cxrg"];
    $cpf = $_POST["cxcpf"];
    $telefone = $_POST["cxtel"];
    $email = $_POST["cxemail"];
    $cep = $_POST["cxcep"];
    $endereco = $_POST["cxend"];
    $estado = $_POST["cxestado"];
    $cidade = $_POST["cxcidade"];
    $pratica = $_POST["cxpratica"];
    $simulador = $_POST["cxsimulador"];
    if (isset($_POST['cxonline'])) {
        $online = $_POST["cxonline"];
    } else {
        $online = "Não";
    }
    if (isset($_POST['cxpresencial'])) {
        $presencial = $_POST["cxpresencial"];
    } else {
        $presencial = "Não";
    }
    if (isset($_POST['cxhaba'])) {
        $haba = $_POST["cxhaba"];
    } else {
        $haba = "Não";
    }
    if (isset($_POST['cxhabb'])) {
        $habb = $_POST["cxhabb"];
    } else {
        $habb = "Não";
    }
    if (isset($_POST['cxhabc'])) {
        $habc = $_POST["cxhabc"];
    } else {
        $habc = "Não";
    }
    if (isset($_POST['cxhabd'])) {
        $habd = $_POST["cxhabd"];
    } else {
        $habd = "Não";
    }
    if (isset($_POST['cxhabe'])) {
        $habe = $_POST["cxhabe"];
    } else {
        $habe = "Não";
    }

    $gravar = "insert into tbaluno (nome,datanasc,rg,cpf,tel,email,cep,end,cidade,estado,pratica,simulador,ead,presencial,hab_a,hab_b,hab_c,hab_d,hab_e) values ('$nome','$data','$rg','$cpf','$telefone','$email','$cep','$endereco','$cidade','$estado','$pratica','$simulador','$online','$presencial','$haba','$habb','$habc','$habd','$habe')";

    $executar = mysqli_query($conn,$gravar);
}
else{
    echo "Preencher o campo Nome";
}
?>
<img src="../img/logo.png" alt="Autoescola TCB" class="logo">
<p class="cadastro">Cadastrado com sucesso!<br><a href="../index.php">Voltar</a></p>
<?php
$valor_pratica = $pratica*35;
$valor_simulador = $simulador*30;
$total = $valor_pratica+$valor_simulador+400;
echo '<p class="msg">O Orçamento total é de R$'.$total.',00! Sendo R$'.$valor_pratica.',00 o valor das aulas práticas, R$'.$valor_simulador.',00 o valor das aulas no simulador e mais R$400,00 de taxas terceiras.</p>';
?>
</body>
</html>
