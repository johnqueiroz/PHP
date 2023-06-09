<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style-lista.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>

    <title>Gerenciando pensionistas</title>
</head>
<body>
    <nav class="navbar">

        <div class="max-width"> <!-- Iniciando div max-width-->
            <div class="logo"><a href="index.html">IMPRESB</a></div> 

            <ul class="menu" id="menu-site">
                <li class="dropdown">
                    <a href="#aposentados" class="dropbtn"><b>Aposentados</b></a>
                    <div class="dropdown-content">
                      <a href="cadastrar-aposentados.html">Cadastrar Aposentados</a>
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


    <section>

        <table class="table">
            <thead>
                <tr class="lista-gerenciar">
        
                    <th>Nome</th>
                    <th>Data de nascimento</th>
                    <th>Carteira de identidade</th>
                    <th>CPF</th>
                    <th>Carteira de trabalho</th>
                    <th>E-mail</th> 
                    <th>Celular</th>
                    <th>Rua</th>
                    <th></th>
        
                </tr>
            </thead>
            <tbody>
              
                <tr>
      
    
                    <td>John Emerson Ferreira Regis Filho</td>
                    <td>27/12/1999</td>
                    <td>111.111.111-11</td>
                    <td>123456789</td>
                    <td>123456789</td>
                    <td>johnemerson67@gmail.com</td>
                    <td>83998341257</td>
                    <td>Rua Adolfo Maia, 102</td>
                    <td id="editor"><i class="fa-solid fa-pen-to-square fa-2xl" onclick="abrirModal()"></i></td>
                    
                </tr>
                

            </tbody>

        </table>

    </section>

    <dialog class="modal-lembrete">

        <div class="lembretes-dentro-modal">

            <div class="form">
                <form action="#">
                    <div class="form-header">
                        <div class="title">
                            <h1>Edição</h1>
                        </div>
                    </div>
    
                    <div class="input-group">
                        <div class="input-box">
                            <label for="firstname">Nome completo</label>
                            <input id="firstname" type="text" name="firstname" placeholder="Digite o nome completo">
                        </div>
    
                        <div class="input-box">
                            <label for="data-nascimento">Data de nascimento</label>
                            <input id="data-nascimento" type="date" name="data-nascimento" placeholder="Digite a data de nascimento">
                        </div>
    
                        <div class="input-box">
                            <label for="rg">Carteira de Identidade</label>
                            <input id="rg" type="number" name="rg" placeholder="Digite o RG">
                        </div>
    
                        <div class="input-box">
                            <label for="CPF">CPF</label>
                            <input id="CPF" type="number" name="CPF" placeholder="Digite o CPF">
                        </div>
    
                        <div class="input-box">
                            <label for="carteira-trabalho">Carteira de trabalho</label>
                            <input id="carteira-trabalho" type="text" name="carteira-trabalho" placeholder="Dados da carteira de trabalho">
                        </div>
    
                        <div class="input-box">
                            <label for="email">E-mail</label>
                            <input id="email" type="email" name="email" placeholder="Digite o e-mail">
                        </div>
    
                        <div class="input-box">
                            <label for="number">Celular</label>
                            <input id="number" type="tel" name="number" placeholder="(xx) 9xxxx-xxxx">
                        </div>
    
                        <div class="input-box">
                            <label for="rua">Rua</label>
                            <input id="rua" type="text" name="rua" placeholder="Rua Adolfo Maia, 102">
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
    
                    <div class="botoes">
                        <button onclick="" class="deletar">Deletar</button>
                        <button onclick="adicionar()" class="atualizar">Atualizar</button>
                    </div>
                </form>
            </div>
            
        </div>
    </dialog>

    <script src="../JS/script-index.js"></script>
    <script src="../JS/custom-modal.js"></script>
</body>
</html>