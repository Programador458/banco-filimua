

<?php

    include 'conf.php';

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $stmt = $pdo->prepare("SELECT * FROM clientes  WHERE email = :email");
        $stmt->bindParam("email", $email);
        $stmt->execute();
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if($user && password_verify($senha, $user['codigo_secreto'])){
            
            $_SESSION['id_cliente'] = $user['id_cliente'];
            $_SESSION['nome_cliente'] = $user['nome_cliente'];

            header("Location: painel.php");
        }else{
            echo "E-mail ou Senha Incorretos";
        }


    }


?>