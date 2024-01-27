<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="../css/cadastroaluno.css" media="screen" />
    <link rel="icon" href="../img/icone.png" type="image/png">
    <title>Editar aluno</title>
</head>
<body>
    <h1>Alterar cadastro do aluno</h1>
    <img src="../img/logo.png" alt="Autoescola TCB" class="logo">
<form action="editar.php" method="POST">
            <label for="cxcod">Código: </label>
            <input type="number" name="cxcod" id="cxcod"><br><br>

            <label for="cxnome">Nome: </label>
            <input type="text" name="cxnome" id="cxnome"><br><br>

            <label for="cxdata">Data de Nascimento: </label>
            <input type="date" name="cxdata" id="cxdata"><br><br>

            <label for="cxrg">RG: </label>
            <input type="text" name="cxrg" id="cxrg"> (Apenas números)<br><br>

            <label for="cxcpf">CPF: </label>
            <input type="text" name="cxcpf" id="cxcpf"> (Apenas números) <br><br>
            <label for="cxtel">Telefone: </label>
            <input type="text" name="cxtel" id="cxtel"><br><br>

            <label for="cxemail">E-mail: </label>
            <input type="email" name="cxemail" id="cxemail"><br><br>
            
            <label for="cxcep">CEP: </label>
            <input type="text" name="cxcep" id="cxcep"> (Apenas números)<br><br>

            <label for="cxestado">Estado: </label>
            <select name="cxestado" id="cxestado">
                <option>  </option>
                <option>AC</option>
                <option>AL</option>
                <option>AP</option>
                <option>AM</option>
                <option>BA</option>
                <option>CE</option>
                <option>DF</option>
                <option>ES</option>
                <option>GO</option>
                <option>MA</option>
                <option>MT</option>
                <option>MS</option>
                <option>MG</option>
                <option>PA</option>
                <option>PB</option>
                <option>PR</option>
                <option>PE</option>
                <option>PI</option>
                <option>RJ</option>
                <option>RN</option>
                <option>RS</option>
                <option>RO</option>
                <option>RR</option>
                <option>SC</option>
                <option>SP</option>
                <option>SE</option>
                <option>TO</option>
            </select>

            <label for="cxcidade">Cidade: </label>
            <input type="text" name="cxcidade" id="cxcidade"><br><br>


            <label for="cxend">Endereço: </label>
            <input type="text" name="cxend" id="cxend"><br><br>

            <label for="aulas">Quantidade de aulas práticas e em simulador: </label><i class="fas fa-question-circle" title="No máximo 25 aulas no total, com no mínimo 18 aulas práticas"></i>
            <input type="number" name="cxpratica" id="cxpratica">
            <input type="number" name="cxsimulador" id="cxsimulador">



            <p>Tipo de habilitação: </p>
            <label for="cxhaba">Tipo A </label>
            <input type="checkbox" name="cxhaba" class="inputhab" id="cxhaba" value="Sim"><br>
            <label for="cxhabb">Tipo B </label>
            <input type="checkbox" name="cxhabb" class="inputhab" id="cxhabb" value="Sim"><br>
            <label for="cxhabc">Tipo C </label>
            <input type="checkbox" name="cxhabc" class="inputhab" id="cxhabc" value="Sim"><br>
            <label for="cxhabd">Tipo D </label>
            <input type="checkbox" name="cxhabd" class="inputhab" id="cxhabd" value="Sim"><br>
            <label for="cxhabe">Tipo E </label>
            <input type="checkbox" name="cxhabe" class="inputhab" id="cxhabe" value="Sim"><br><br>
            <input type="submit" value="Cadastrar">
        </form>
</body>
</html>