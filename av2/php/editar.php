<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Cadastro</title>
</head>
<body>
<?php
        include_once "../factory/conexao.php";
        $cod = $_POST['cxcod'];
        $nome = $_POST['cxnome'];
        $data = $_POST['cxdata'];
        $rg = $_POST['cxrg'];
        $cpf = $_POST['cxcpf'];
        $tel = $_POST['cxtel'];
        $email = $_POST['cxemail'];
        $cep = $_POST ['cxcep'];
        $estado = $_POST['cxestado'];
        $cidade = $_POST['cxcidade'];
        $end = $_POST['cxend'];
        $pratica = $_POST['cxpratica'];
        $simulador = $_POST['cxsimulador'];
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
        
        $sql = "UPDATE tbaluno SET
        cod = '$cod',
        nome = '$nome',
        datanasc = '$data',
        rg = '$rg',
        cpf = '$cpf',
        tel = '$tel',
        email = '$email',
        cep = '$cep',
        estado = '$estado',
        cidade = '$cidade',
        `end` = '$end',
        pratica = '$pratica',
        simulador = '$simulador',
        ead = '$online',
        presencial = '$presencial',
        hab_a = '$haba',
        hab_b = '$habb',
        hab_c = '$habc',
        hab_d = '$habd',
        hab_e = '$habe'
    
    where
    cod = '$cod';
    ";
        
       $executar = mysqli_query($conn,$sql);
       if ($sql){
        echo "<script>alert('Dados alterados com sucesso!'); history.back();</script>";
       } else {
        echo "<script>alert('Erro na alteração do cadastro!'); history.back();</script>";
       }
    ?>
</body>
</html>