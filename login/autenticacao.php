<?php
    //Busca codigo que conecta no banco
    require_once "../bancoDeDados/conecta.php";
     $email = trim($_POST['email']);
     $senha = trim($_POST['senha']);

     $stmt = $bd->prepare(" SELECT 
                                nome, senha 
                            FROM 
                                usuarios
                            WHERE email = :email");

    $stmt->bindParam(':email', $email);

    $stmt->execute();

    $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

    $autenticou = false;

    if( isset($usuario['nome'])){//Se existir o usuário

        
        //comparar a senha para ver se está correta

        if(password_verify($senha, $usuario['senha'])){
            // Sessão inicializada
            session_start();

            $_SESSION['id'] = $email;
            // Direciona para o menu
            header('Location: /tsi-php-2022/menu');
        }

    }
    include 'index.php';