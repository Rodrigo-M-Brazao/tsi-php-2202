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

    if( isset($usuario['nome'])){

    }
    include 'index.php';