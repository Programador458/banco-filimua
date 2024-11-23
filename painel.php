<?php


include 'conf.php';


if((!isset($_SESSION['id_cliente']) == true) && (!isset( $_SESSION['nome_cliente']) == true)){
    unset( $_SESSION['id_cliente']);
    unset( $_SESSION['nome_cliente']);
    header("location: index.php");

}else{
    $idUser =  $_SESSION['id_cliente'];
    $nomeUser =  $_SESSION['nome_cliente'];
}



?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="../pictures/cartao.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Atlântico | Painel</title>
    <link rel="stylesheet" href="../styles/ppainelCabecalho.css">
    <link rel="stylesheet" href="../styles/painelCorpo.css">
    <link rel="stylesheet" href="../styles/painelFooter.css">
    <link rel="stylesheet" href="../styles/slide.css">
    <link rel="stylesheet" href="../styles/mediaPanel.css">
</head>
<body>

    
    <!--Cabeçalho -->

    <header class="cabecalho">

        <div class="logo">
            <h1>Banco Atlântico</h1>
        </div>

        <div class="links">
            <nav>
                <ul>
                    <li><a href="#">Meu Pérfil</a></li>
                    <li><a href="#">Histórico</a></li>
                    <li><a href="servicosPainel.php">Servicos</a></li>
                </ul>
            </nav>
        </div>

        <div class="linksResponsivo" id="linksResponsivo">

            <div class="menuRespo">

            <div class="clos" id="clos">x</div>
            <br>
            <br>
            <div class="user">
                <img src="../img/Usuario images.png" alt="">
            <p><?php echo "".$nomeUser ?></p>
        </div>
        
        <br>
            <nav>
                <ul>
                    <li><a href="#">Meu Pérfil</a></li>
                    <li><a href="#">Histórico</a></li>
                    <li><a href="servicosPainel.php">Servicos</a></li>
                    <li><a href="fim.php">Terminar Sessão</a></li>
                </ul>
            </nav>
        </div>
        
        </div>

        <div class="user" id="user">
           <img src="../img/Usuario images.png" alt="">
           <p><?php echo "".$nomeUser ?></p>
        </div>

        <div class="menuHamb">
            <img  id="menuHamb" src="../img/menu.ico" alt="">
        </div>
    </header>

    <a href="fim.php"><button class="fim">Sair</button></a>
     <!-- Corpo Do Sistema -->

     <main class="corpo">

        <h1>Bem-vindo, <span><?php echo "".$nomeUser ?></span></h1>
        <!-- S L I D E -->
         <br>
         <br>
        <div class="content">

        <div class="slides">

        <input type="radio" name="slide" id="slide1" class="slidenput" checked>
        <input type="radio" name="slide" id="slide2" class="slidenput">
        <input type="radio" name="slide" id="slide3" class="slidenput">
        <input type="radio" name="slide" id="slide4" class="slidenput">

        <div class="slide s1">
            <img src="../pictures/banner_1.png" alt="">
        </div>

        <div class="slide">
            <img src="../pictures/banner_2.png" alt="">
        </div>

        <div class="slide">
            <img src="../pictures/atlantico.png" alt="">
        </div>

        <div class="slide">
            <img src="../pictures/acessoatlantico-directo_2.png" alt="">
        </div>

        </div>

        <div class="navegacao">
        <label for="slide1" class="borda"></label>
        <label for="slide2" class="borda"></label>
        <label for="slide3" class="borda"></label>
        <label for="slide4" class="borda"></label>
    </div>

    </div>


</main>

<footer>
 
    <p>&copy; copyright 2024, banco millennium : all rights reserved.</p>
</footer>






    <script src="../js/slide.js"></script>
    <script src="../js/Responsivo.js"></script>
</body>
</html>