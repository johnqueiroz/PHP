<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style-login.css">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Área de login</title>
</head>
<body>

<?php

    require '../PHP/Conexao.php';
    require '../PHP/Funcionarios.php';

    $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

    if(!empty($formData['loginFuncionario'])){
        var_dump($formData);
        $listarFunc = new Funcionarios();
        $listarFunc->formData = $formData;
        $value = $listarFunc->verificarConta();

        if($value){
            foreach ($value as $row_user) {
                //var_dump($row_user);
                extract($row_user);

                echo $senha;
            }        

        }else{
            echo "<p style='color: #f00;'>Erro</p>";
        }

    }

?>


    <div class="form-area">
        <p class="title">Área de login</p>
        <form name="login" action="" class="form" method="POST">

            <div class="campos">
                <i class="fa-solid fa-user fa-lg"></i>
                <input type="text" name="email" id="" placeholder="E-mail">
            </div>
                
            <div class="campos">
                <i class="fa-solid fa-lock fa-lg"></i>
                <input type="password" name="senha" id="senha" placeholder="Senha">
            </div>
            
            <div class="button">
                <button type="submit" name="loginFuncionario" value="Acessar" class="button-content">Acessar</button>
            </div>

            <div class="rodape">
                <div class="foot-page-left">
                    <a href="cadastrar-funcionario.php">Cadastrar</a>
                </div>

                <div class="foot-page-right">
                    <a href="">Esqueceu a senha?</a>
                </div>
            </div>
        </form>


    </div>
    
</body>
</html>