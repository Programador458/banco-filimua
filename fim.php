<?php

session_start();

unset( $_SESSION['id_cliente']);
unset( $_SESSION['nome_cliente']);
header("location: index.php");

session_destroy();





?>