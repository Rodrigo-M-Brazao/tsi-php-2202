<?php
    include_once "../bancoDeDados/conecta.php";
    $listar = $bd->query('SELECT * FROM alunos');
    while($linha = $listar->fetch()){
        echo $linha['id'] . ' - ';
        echo $linha['nome'] . ' - ';
        echo $linha['inicio'] . ' - ';
        echo $linha['turno'] . '<br>';
    } 