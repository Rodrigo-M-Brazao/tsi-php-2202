<?php
    //Busca codigo que conecta no banco
    require_once "../bancoDeDados/conecta.php";

    //Apenas para ficar mais fácil de trabalhar e checando se o valor é nulo
    $id = $_POST['id'] ?? 0;
    
    //Evito que seja recebido em $id qualquer coisa diferentes de números
    $id = preg_replace('/\D/','', $id);

   
    if($bd->exec("DELETE FROM alunos WHERE id = $id")){
        $apagou = true;
    }
    else{
        $apagou = false;
    }
    
    include 'index.php';
    