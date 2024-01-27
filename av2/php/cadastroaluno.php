<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Cadastro Aluno</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="stylesheet" href="../css/cadastroaluno.css">
        <link rel="icon" href="../img/icone.png" type="image/png">
    </head>
    <body>
        <h2>Autoescola TCB</h2>
        <h4>Faça seu cadastro!</h4>
        <img src="../img/logo.png" alt="Autoescola" class="logo">
        <img src="../img/hab.png" alt="Habilitação" class="hab">
        <form action="inseriraluno.php" method="post">
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

            <label>Inserir quantas aulas (50 minutos) para cada modalidade:</label>
            <label for="cxpratica">Práticas: </label>
            <input type="number" name="cxpratica" id="cxpratica"><br>
            <label for="cxsimulador">Com simulador: </label>
            <input type="number" name="cxsimulador" id="cxsimulador">  <i class="fas fa-question-circle" title="No máximo 25 aulas no total, com no mínimo 18 aulas práticas"></i>

            <p>Fazer CFC online ou presencial?</p>
            <label for="cxonline">Online</label>
            <input type="checkbox" name="cxonline" id="cxonline" value="Sim">
            <label for="cxpresencial">Presencial</label>
            <input type="checkbox" name="cxpresencial" id="cxpresencial" value="Sim">

            <p>Tipo de habilitação desejada: </p>
            <label for="cxhaba">Tipo A </label>
            <input type="checkbox" name="cxhaba" class="inputhab" id="cxhaba" value="Sim"><i class="fas fa-question-circle" title="Idade mínima de 18 anos."></i><br>
            <label for="cxhabb">Tipo B </label>
            <input type="checkbox" name="cxhabb" class="inputhab" id="cxhabb" value="Sim"><i class="fas fa-question-circle" title="Idade mínima de 18 anos."></i><br>
            <label for="cxhabc">Tipo C </label>
            <input type="checkbox" name="cxhabc" class="inputhab" id="cxhabc" value="Sim"><i class="fas fa-question-circle" title="Habilitado por pelo menos 1 ano na categoria B, sem ter cometido infração grave, gravíssima ou mais de uma média nos últimos 12 meses."></i><br>
            <label for="cxhabd">Tipo D </label>
            <input type="checkbox" name="cxhabd" class="inputhab" id="cxhabd" value="Sim"><i class="fas fa-question-circle" title="Idade mínima de 21 anos, habilitado por no mínimo 2 anos na categoria B ou no mínimo 1 ano na categoria C, não ter cometido infração grave, gravíssima ou mais de uma média nos últimos 12 meses."></i><br>
            <label for="cxhabe">Tipo E </label>
            <input type="checkbox" name="cxhabe" class="inputhab" id="cxhabe" value="Sim"><i class="fas fa-question-circle" title="Habilitado por no mínimo 1 ano na categoria C e não ter cometido infração grave, gravíssima ou mais de uma média nos últimos 12 meses. Necessário ser aprovado em curso especializado e em curso de treinamento de prática veicular e em situação de risco, nos termos da normatização do CONTRAN."></i><br><br>
            <input type="submit" value="Cadastrar">
        </form>
    </body>
</html>