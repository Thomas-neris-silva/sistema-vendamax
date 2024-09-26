<?php

// importando arquivo de conexão com banco 
    include 'conexao.php';

    // recebendo dados de tela de login (frontend)  
    $cpf = $_REQUEST['cpf'];
    $senha = $_REQUEST['senha'];

    // echo "Olá seu cpf: $cpf e senha: $senha";

    $sql = "SELECT * FROM usuario WHERE cpf='$cpf' AND senha='$senha' ";

    $resultado = mysqli_query($conexao, $sql);
    $colunas = mysqli_fetch_assoc($resultado);

    if(mysqli_num_rows($resultado) > 0 ){
        echo "login efetuad";
    }else{
        echo "erro";
    }

?>