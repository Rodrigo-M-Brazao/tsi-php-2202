<?php
    $nome = $_POST["nomeUsuario"];
    $idade = $_POST["idadeUsuario"];
    $cpf = $_POST["cpfUsuario"];   
    $escolhaPeriodo = $_POST["periodoUsuario"];
    echo "Olá $nome, tenho $idade anos e meu CPF é: \n$cpf\n seu período é $escolhaPeriodo";

    $arquivo = fopen('alunos.csv', 'a'); //abro o arquivo para append
    fwrite($arquivo, "{$nome};{$idade};{$cpf};{$escolhaPeriodo}\r\n");
    fclose($arquivo);