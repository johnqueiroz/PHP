<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style-cadastros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Cadastro de pensionistas</title>
</head>
<body>

    <nav class="navbar">

        <div class="max-width"> <!-- Iniciando cabecalho do site-->
            <div class="logo"><a href="index.php">IMPRESB</a></div> 

            <ul class="menu" id="menu-site">
                <li class="dropdown">
                    <a href="#aposentados" class="dropbtn"><b>Aposentados</b></a>
                    <div class="dropdown-content">
                      <a href="cadastrar-aposentados.php">Cadastrar Aposentados</a>
                      <a href="gerenciar-aposentados.php">Gerenciar Aposentados</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#pensionistas" class="dropbtn"><b>Pensionistas</b></a>
                    <div class="dropdown-content">
                      <a href="cadastrar-pensionista.html">Cadastrar Pensionistas</a>
                      <a href="gerenciar-pensionista.html">Gerenciar Pensionistas</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="#pensionistas" class="dropbtn"><b>Cálculo Atuarial</b></a>
                    <div class="dropdown-content">
                      <a href="#">Gerenciar Cálculo Atuarial</a>
                      <a href="#">Ver Cálculo Atuarial</a>
                    </div>
                </li>

                <li class="dropdown">
                    <a href="login.html"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                 </li>
            </ul>

            <div class="menu-btn" id="menu-btn">
                <i class="fa-solid fa-bars" id="menu-icon"></i>
            </div>
        </div> <!-- Fechando cabecalho -->
    </nav>

  <!-- Inicio do corpo da pagina, com a imagem e o formulario-->
    <article class="formato-pagina-corpo-imagem">

        <!--Imagem-->
        <div class="imagem">
            <img src="../images/undraw_my_files_swob (1).svg">
        </div>   
        
        <?php
            //Incluindo classes que serao utilizadas
            require '../PHP/Conexao.php';
            require '../PHP/Pensionistas.php';

            $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            if(!empty($formData['infoPensionista'])){
                $createPensionista = new Pensionistas();
                $createPensionista->formData = $formData;
                $cadastroPensionista = $createPensionista->inserirPensionista();
                $cadastroEndereco = $createPensionista->inserirEnderecoPensionista();
    
                if($cadastroPensionista and $cadastroEndereco){
                    header("Location: index.php");
                }else{
                     echo "<p style='color: #f00;'>Erro: Pensionista não cadastrado com sucesso!</p>";
                }
            }
        
            


        ?>


     <!-- Inicio do formulario -->
        <div class="form">

        <form action="" name="criarPensionista" method="POST">

                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de pensionistas</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome completo</label>
                        <input id="nome" type="text" name="nome" placeholder="Digite o nome completo" required>
                    </div>
                    
                    <div class="input-box">
                        <label for="rg">Carteira de Identidade</label>
                        <input id="rg" type="number" name="rg" placeholder="Digite o RG" required>
                    </div>

                    <div class="input-box">
                        <label for="data-casamento">Data de casamento</label>
                        <input id="data-casamento" type="date" name="data-casamento" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="number" name="cpf" placeholder="Digite o CPF" required>
                    </div>

                    <div class="input-box">
                        <label for="data-obito">Data de obito</label>
                        <input id="data-obito" type="date" name="data-obito" required>
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite o e-mail">
                    </div>

                    <div class="input-box">
                        <label for="rua">Rua</label>
                        <input id="rua" type="text" name="rua" placeholder="Rua Adolfo Maia, 102" required>
                    </div>

                    <div class="input-box">
                        <label for="number">Celular</label>
                        <input id="number" type="tel" name="number" placeholder="(xx) 9xxxx-xxxx" required>
                    </div>

                    <div class="input-box">
                        <label for="data-nascimento">Data de nascimento</label>
                        <input id="data-nascimento" type="date" name="data-nascimento" required>
                    </div>

                </div>

                <div class="input-box">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo">
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                        </select>
                    </div>

                <div class="continue-button">
                    <button class="button-content" type="submit" name="infoPensionista" value="Continuar">Continuar</button>
                </div>
            </form>
            <!-- Fim do formulario -->
        </div>
    </article>

    <script src="../JS/script-index.js"></script>
</body>
</html>