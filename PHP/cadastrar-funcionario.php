<?php
session_start();
ob_start();
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Área de cadastro</title>
</head>
<body>

<?php

    //Incluindo classes que serao utilizadas
    require '../PHP/Conexao.php';
    require '../PHP/Funcionarios.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($formData['EnvioAddFuncionario'])){
        $createUser = new Funcionarios();
        $createUser->formData = $formData;
        $value = $createUser->inserir();

        if($value){
          header("Location: login.php");
        }else{
            echo "<p style='color: #f00;'>Erro: Usuário não cadastrado com sucesso!</p>";
        }

    }

?>

    <div class="form-area">
        <p class="title">Área de cadastro</p>
        <form name="CreateUser" action="" class="form" method="POST">

            <div class="campos">
                <i class="fa-solid fa-user fa-lg"></i>
                <input type="text" name="email" id="" placeholder="E-mail" required>
            </div>
                
            <div class="campos">
                <i class="fa-solid fa-user fa-lg"></i>
                <input type="text" name="nome" id="" placeholder="Digite seu nome" required>
            </div>

            <div class="campos">
                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" name="senha" id="senha" placeholder="Senha" required>
            </div>
            
            <div class="button">
              <button type="submit" name="EnvioAddFuncionario" value="Cadastrar" class="button-content">Cadastrar</button>
            </div>

        </form>


    </div>
    
</body>
</html>