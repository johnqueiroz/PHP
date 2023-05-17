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
    <title>Cadastro de aposentados</title>
</head>
<body>

    <nav class="navbar">

        <div class="max-width"> <!-- Iniciando div max-width-->
            <div class="logo"><a href="index.html">IMPRESB</a></div> 

            <ul class="menu" id="menu-site">
                <li class="dropdown">
                    <a href="#aposentados" class="dropbtn"><b>Aposentados</b></a>
                    <div class="dropdown-content">
                      <a href="cadastrar-aposentados.php">Cadastrar Aposentados</a>
                      <a href="gerenciar-aposentados.html">Gerenciar Aposentados</a>
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
        </div> <!-- Fechando div max-width-->
    </nav>

    <article class="formato-pagina-corpo-imagem">
        <div class="imagem">
            <img src="../images/undraw_personal_site_re_c4bp (1).svg">
        </div>
        
        
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
                        <input id="nome" type="text" name="nome" placeholder="Digite o nome completo" required>
                    </div>

                    <div class="input-box">
                        <label for="dataNascimento">Data de nascimento</label>
                        <input id="dataNascimento" type="date" name="dataNascimento" required>
                    </div>

                    <div class="input-box">
                        <label for="rg">Carteira de Identidade</label>
                        <input id="rg" type="number" name="rg" required>
                    </div>

                    <div class="input-box">
                        <label for="CPF">CPF</label>
                        <input id="CPF" type="number" name="CPF" required>
                    </div>

                    <div class="input-box">
                        <label for="carteiraTrabalho">Carteira de trabalho</label>
                        <input id="carteiraTrabalho" type="text" name="carteiraTrabalho" placeholder="Dados carteira de trabalho">
                    </div>

                    <div class="input-box">
                        <label for="email">E-mail</label>
                        <input id="email" type="email" name="email" placeholder="Digite o e-mail">
                    </div>

                    <div class="input-box">
                        <label for="celular">Celular</label>
                        <input id="celular" type="tel" name="celular" placeholder="(xx) 9xxxx-xxxx">
                    </div>

                    <div class="input-box">
                        <label for="logradouro">Rua</label>
                        <input id="logradouro" type="text" name="logradouro" placeholder="Rua Adolfo Maia">
                    </div>

                    <div class="input-box">
                        <label for="numero">Número da casa</label>
                        <input id="numero" type="text" name="numero" placeholder="102">
                    </div>

                    <div class="input-box">
                        <label for="bairro">Bairro</label>
                        <input id="bairro" type="text" name="bairro" placeholder="Centro">
                    </div>

                    <div class="input-box">
                        <label for="cidade">Cidade</label>
                        <input id="cidade" type="text" name="cidade" placeholder="São Bento">
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

                </div>

                <div class="gender-inputs">
                    <div class="gender-title">
                        <h6>Gênero</h6>
                    </div>

                    <div class="gender-group">
                        <div class="gender-input">
                            <input id="female" type="radio" name="gender">
                            <label for="female">Feminino</label>
                        </div>

                        <div class="gender-input">
                            <input id="male" type="radio" name="gender">
                            <label for="male">Masculino</label>
                        </div>

                        <div class="gender-input">
                            <input id="others" type="radio" name="gender">
                            <label for="others">Outros</label>
                        </div>

                        <div class="gender-input">
                            <input id="none" type="radio" name="gender">
                            <label for="none">Prefiro não dizer</label>
                        </div>
                    </div>
                </div>

                <div class="continue-button">
                    <button><a href="inserir-arquivos-aposentado.html">Continuar</a></button>
                </div>
            </form>
        </div>
    </article>

    <script src="../JS/script-index.js"></script>
</body>
</html>