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
        echo 'Só sucesso!';
    }
    else{
        echo 'Deu ruim, parceiro';
    }

    echo "<br><br><strong><a href = 'listar.php' style = 'text-decoration:none;color: #000;text-weight:bold;'>Ver lista</a></strong>";