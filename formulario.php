<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'formulario-mm'

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName)

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario | MM</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    
    <div class="box">
        <form action="formulario.php" method="POST">
            <fieldset>
                <legend><b>Formulário</b></legend>

                <div class="inputBox">
                <input type="text" name="nome" id="nome" class="inputUser" required>
                <label for="nome" class="labelInput">Nome Completo</label>
                </div>
                    <br>
                <div class="inputBox">
                <input type="text" name="email" id="email" class="inputUser" required>
                <label for="email" class="labelInput">Email</label>
                </div>
                    <br>
                <div class="inputBox">
                <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                <label for="telefone" class="labelInput">Telefone</label>
                </div>

                <p>Sexo</p>
                <input type="radio"  name="genero" value="feminino" required>
                <label for="feminino">Feminino</label>

                <input type="radio"  name="genero" value="masculino" required>
                <label for="masculino">Masculino</label>

                <input type="radio"  name="genero" value="outro" required>
                <label for="outro">Outro</label>

                <br><br>
                
                <label for="data_nascimento"><b>Data de Nascimento:</b></label>
                <input type="date" name="data_nascimento" id="data_nascimento" class="inputUser" required>
                
                <br><br>
                
                <div class="inputBox">
                <input type="text" name="cidade" id="cidade" class="inputUser" required>
                <label for="cidade" class="labelInput">Cidade</label>
                </div>
                    <br>
                <div class="inputBox">
                <input type="text" name="estado" id="estado" class="inputUser" required>
                <label for="estado" class="labelInput">Estado</label>
                </div>
                    <br>
                <div class="inputBox">
                <input type="text" name="endereco" id="endereco" class="inputUser" required>
                <label for="endereco" class="labelInput">Endereço</label>
                </div>
                    <br>
                <input type="submit" name="submit" id="submit">
            </fieldset>
        </form>
    </div>
</body>
</html>