<?php


    include 'conf.php';

    $stmt = $pdo->prepare("SELECT * FROM servicos");
    $stmt->execute();
    $servicos = $stmt->fetchAll(PDO::FETCH_ASSOC);

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
<html lang="Pt-BR">
<head>
    <link rel="icon" href="../pictures/cartao.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Atlântico | Serviços</title>
    <link rel="stylesheet" href="../styles/servicos.css">
    <link rel="stylesheet" href="../styles/mediaServicos.css">
</head>
<body>

<a href="painel.php"><button class="voltar">Voltar</button></a>
    
    
        <h1>Serviços</h1>

        <div class="servicos">

            <?php foreach($servicos as $servico): ?>

                <?php

                echo "<div class='servics'>";

                    echo "<img src='../img/".$servico['imagem']."'>";
                    echo "<h2>" .$servico['nome_servico']."</h2>";
                    echo "<br>";
                    echo "<a href='processamento.php?nome_servico=".$servico['nome_servico']."'  class='btn'>Agendar</a>";
                    echo "</div>";
                
                    
                ?>
                    <?php endforeach; ?>
               
            </div>

        </body>
</html>