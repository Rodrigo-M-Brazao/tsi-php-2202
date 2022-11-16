<?php
// Inicialização do sistema de controle de sessão
session_start();

//Verifica o usuario 
if(!isset($_SESSION['id'])){
    header('Location: /tsi-php-2022/login');
    exit();
}