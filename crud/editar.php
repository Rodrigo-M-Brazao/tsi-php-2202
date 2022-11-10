<?php
    //Busca codigo que conecta no banco
    require_once "../bancoDeDados/conecta.php";

    //Apenas para ficar mais fácil de trabalhar e checando se o valor é nulo
    $id = $_POST['id'] ?? 0;

    $stmt = $bd->prepare('SELECT id, nome, turno, inicio FROM alunos WHERE id = :id');

    $stmt->bindValue(':id', $id);
    
    $stmt->execute();

    $aluno = $stmt->fetch(PDO::FETCH_ASSOC);

    echo $aluno['id'] . " " . $aluno['nome'];

    require_once 'formEditar.php'