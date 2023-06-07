<!DOCTYPE html>
<html lang="pt-br">

<!-- Cabeçalho com links e titulo da pagina-->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style-cadastros.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <title>Cadastro de aposentados</title>
</head>


<body>

    <!-- Inicio da navbar-->
    <nav class="navbar">

        <div class="max-width">
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
                      <a href="cadastrar-pensionista.php">Cadastrar Pensionistas</a>
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
                    <a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                 </li>
            </ul>

            <div class="menu-btn" id="menu-btn">
                <i class="fa-solid fa-bars" id="menu-icon"></i>
            </div>
        </div> 
    </nav>
    <!-- Fim da navbar-->


    <!-- Inicio do corpo da pagina, com a imagem e o formulario-->
    <article class="formato-pagina-corpo-imagem">

    <!--Imagem-->
        <div class="imagem">
            <img src="../images/undraw_personal_site_re_c4bp (1).svg">
        </div>
        
        <?php
            //Incluindo classes que serao utilizadas
            require '../PHP/Conexao.php';
            require '../PHP/Aposentados.php';

            $formData = filter_input_array(INPUT_POST, FILTER_DEFAULT);

            if(!empty($formData['infoAposentado'])){
                $createAposentado = new Aposentados();
                $createAposentado->formData = $formData;
                $cadastroAposentado = $createAposentado->inserirAposentado();
                $cadastroEndereco = $createAposentado->inserirEnderecoAposentado();
    
                if($cadastroAposentado and $cadastroEndereco){
                    header("Location: index.php");
                }else{
                     echo "<p style='color: #f00;'>Erro: Aposentado não cadastrado com sucesso!</p>";
                }
            }
        
            


        ?>
        <!-- Inicio do formulario -->
        <div class="form">
            <form action="" name="criarAposentado" method="POST">

                <div class="form-header">
                    <div class="title">
                        <h1>Cadastro de aposentados</h1>
                    </div>
                </div>

                <div class="input-group">
                    <div class="input-box">
                        <label for="nome">Nome completo</label>
                        <input id="nome" type="text" name="nome" required>
                    </div>

                    <div class="input-box">
                        <label for="data_nascimento">Data de nascimento</label>
                        <input id="data_nascimento" type="date" name="data_nascimento" required>
                    </div>

                    <div class="input-box">
                        <label for="rg">Carteira de Identidade</label>
                        <input id="rg" type="number" name="rg" required>
                    </div>

                    <div class="input-box">
                        <label for="cpf">CPF</label>
                        <input id="cpf" type="number" name="cpf" required>
                    </div>

                    <div class="input-box">
                        <label for="ctps">Carteira de trabalho</label>
                        <input id="ctps" type="text" name="ctps" >
                    </div>
                    
                    <div class="input-box">
                        <label for="salario">Salário</label>
                        <input id="salario" type="number" name="salario">
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" >
                    </div>

                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input id="celular" type="tel" name="celular">
                    </div>

                    <div class="input-box">
                        <label for="logradouro">Rua</label>
                        <input id="logradouro" type="text" name="logradouro">
                    </div>

                    <div class="input-box">
                        <label for="numero">Número da casa</label>
                        <input id="numero" type="number" name="numero" >
                    </div>

                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" >
                    </div>

                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" >
                    </div>

                    <div class="input-box">
                        <label for="estado">Estado</label>
                        <select id="estado" name="estado">
                            <option value="AC">Acre</option>
                            <option value="AL">Alagoas</option>
                            <option value="AP">Amapá</option>
                            <option value="AM">Amazonas</option>
                            <option value="BA">Bahia</option>
                            <option value="CE">Ceará</option>
                            <option value="DF">Distrito Federal</option>
                            <option value="ES">Espírito Santo</option>
                            <option value="GO">Goiás</option>
                            <option value="MA">Maranhão</option>
                            <option value="MT">Mato Grosso</option>
                            <option value="MS">Mato Grosso do Sul</option>
                            <option value="MG">Minas Gerais</option>
                            <option value="PA">Pará</option>
                            <option value="PB">Paraíba</option>
                            <option value="PR">Paraná</option>
                            <option value="PE">Pernambuco</option>
                            <option value="PI">Piauí</option>
                            <option value="RJ">Rio de Janeiro</option>
                            <option value="RN">Rio Grande do Norte</option>
                            <option value="RS">Rio Grande do Sul</option>
                            <option value="RO">Rondônia</option>
                            <option value="RR">Roraima</option>
                            <option value="SC">Santa Catarina</option>
                            <option value="SP">São Paulo</option>
                            <option value="SE">Sergipe</option>
                            <option value="TO">Tocantins</option>
                        </select>
                    </div>
                    
                    <div class="input-box">
                        <label for="sexo">Sexo</label>
                        <select id="sexo" name="sexo">
                            <option value="1">Masculino</option>
                            <option value="2">Feminino</option>
                        </select>
                    </div>
                </div>

                <div class="continue-button">
                    <button class="button-content" type="submit" name="infoAposentado" value="Continuar">Continuar</button>
                </div>
            </form>

            <!-- Fim do formulario -->
        </div>
    </article>

    <script src="../JS/script-index.js"></script>
</body>
</html>