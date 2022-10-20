<?php
    //Busca codigo que conecta no banco
    require_once "../bancoDeDados/conecta.php";
    
    //Recebe os dados via post e guarda em variáveis
    $nome = $_POST['nome'];
    $turno = $_POST['turno'];
    $inicio = $_POST['inicio'];
    
    // Prepara a inserção dos dados recebidos no formulário 
    $consulta = $bd->prepare("INSERT INTO alunos(nome, turno, inicio) VALUES(:nome, :turno, :inicio)");

    //Substitui a os valores do prepare pelas váriaveis
    $consulta->bindValue(':nome', $nome);
    $consulta->bindValue(':turno', $turno);
    $consulta->bindValue(':inicio', $inicio);

    //Executa a inserção
    if($consulta->execute()){
        $gravou = true;
    }
    else{
        $gravou = false;
    }

    include 'index.php';