<?php
require_once '../bancoDeDados/conecta.php';

$listar = $bd->query('SELECT id, nome, turno, inicio FROM alunos');

echo "<pre>";
$alunos = [];
while($registro = $listar->fetch(PDO::FETCH_ASSOC)){
   $alunos[] = $registro;
}

echo "</pre>";

include 'view/listar.php';