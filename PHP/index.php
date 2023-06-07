<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../images/favicon.ico">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style-index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard - IMPRESB</title>
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

                <li class="dropdown">
                   <a href="login.php"><i class="fa-solid fa-arrow-right-from-bracket"></i></a>
                </li>

                </li>
            </ul>

            <div class="menu-btn" id="menu-btn">
                <i class="fa-solid fa-bars" id="menu-icon"></i>
            </div>
        </div> <!-- Fechando div max-width-->
    </nav>

<!-- Inicio dashboard -->
    <div class="wrapper">

        <div class="row">
            <div class="box box-first">
                <span class="fa-solid fa-person-cane fa-2xl"></span>
                <span><b><?php
                 require '../PHP/Conexao.php';
                 require '../PHP/Aposentados.php';

                 $createAposentado = new Aposentados();
                 $quantidadeAposentados = $createAposentado->quantidadeAposentados();

                echo $quantidadeAposentados;
                ?></b></span>
                <span><b>Aposentados</b></span>
            </div>

            <div class="box box-second">
                <span class="fa-solid fa-people-arrows fa-2xl"></span>
                <span><b>25</b></span>
                <span><b>Pensionistas</b></span>
            </div>

            <div class="box box-third" onclick="abrirModal()">
                <span class="fa-solid fa-triangle-exclamation fa-2xl"></span>
                <span><b>1</b></span>
                <span><b>Lembrete</b></span>
            </div>
          
        </div>

    </div>  

    <dialog class="modal-lembrete">
        <div class="lembretes-dentro-modal">

            <h2>Lembretes</h2>

            <input type="text" name="" id="lembrete" placeholder="Digite algum lembrete" size="70">

            <button onclick="adicionar()" class="adicionar">Adicione um lembrete</button>

            <ul id="lista-lembrete">
                
            </ul>
            
        </div>
    </dialog>

    <script src="../JS/script-index.js"></script>
    <script src="../JS/custom-dashboard.js"></script>
    <script src="../JS/custom-modal.js"></script>
</body>
</html>