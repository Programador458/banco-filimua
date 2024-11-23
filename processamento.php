
<?php

    
include 'conf.php';

    $stmt = $pdo->prepare("SELECT * FROM balcao");
    $stmt->execute();
    $balcoes = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if(isset($_GET['nome_servico'])){
        $nome_servico = $_GET['nome_servico'];
    }

    if((!isset($_SESSION['id_cliente']) == true) && (!isset( $_SESSION['nome_cliente']) == true)){
        unset( $_SESSION['id_cliente']);
        unset( $_SESSION['nome_cliente']);
        header("location: index.php");

    }else{
        $idUser =  $_SESSION['id_cliente'];
        $nomeUser =  $_SESSION['nome_cliente'];
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){

        $idUser =  $_SESSION['id_cliente'];
        $nome_servico = $_POST['nomeServico'];
        $id_balcao = $_POST['balcao'];

        $stmt= $pdo->prepare("INSERT INTO marcoes(id_cliente, servico, id_balcao) VALUES(:id_cliente, :servico, :id_balcao)");
        $stmt->bindParam(':id_cliente', $idUser);
        $stmt->bindParam(':servico', $nome_servico);
        $stmt->bindParam(':id_balcao', $id_balcao);

        if($stmt->execute()){
            echo "<p style='color: green; font-size: 22px; font-weight: 700; position: absolute; top: 18%; left: 36%;'>Agendamento realizada com sucesso</p>";
        }else{
            echo "<p style='color: red; font-size: 22px; font-weight: 700; position: absolute; top: 18%; left: 36%;>Agendamendamento Negado, Verifique e tente novamente</p>";
        }
    }

    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="icon" href="../pictures/cartao.png">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco Atlântico | Agendamento</title>
    <link rel="stylesheet" href="../styles/processamento.css">
    <link rel="stylesheet" href="../styles/mediaProcess.css">
</head>
<body>

    <a href="servicosPainel.php"><button class="voltar">Voltar</button></a>
    
    <h1>Agendamento</h1>
    <br>

    <form action="processamento.php" method="post">

        <label for="nomeServico">Servico: </label>
        <select name="nomeServico" id="">
            <option value="<?php echo "".$nome_servico ?>"><?php echo "".$nome_servico ?></option>
        </select>

        <label for="balcao">Balcão: </label>
        <select name="balcao" id="" required>
            <option value="">Selecione o balcão de atendimento</option>

            <?php foreach($balcoes as $balcao): ?>
                <option value="<?= $balcao['id_balcao'] ?>">
                <?= $balcao['balcao'] ?>
                </option>
                <?php endforeach; ?>
        </select>

    <button type="submit">Finalizar</button>
    </form>
</body>
</html>
