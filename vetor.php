<?php

$diaSemana = [0 => "Domingo", 1 => "Segunda-feira", 2 => "Terça-feira", 3 => "Quarta-feira",
        4 => "Quinta-feira", 5 => "Sexta-feira", 6 => "Sábado"];

$hoje = date('w');
// Muito importante para depurar o código - var_dump()
// var_dump($diaSemana);
echo "<br><pre>";
$aluno = [0 => ["matricula" => 94486, "nome" => "Rodrigo" ,"semestre" => 2],
           1 => ["matricula" => 94954, "nome" => "Gustavo" ,"semestre" => 2],
           2 => ["matricula" => 4664, "nome" => "Geovanna" ,"semestre" => 1]];
$alunos = [];



echo "  <style>
            th, td{
                border: solid 1px black;
                padding: 2px;
            }
        </style>
        <table border = 1>
            <tr>
                <th>Nome do Aluno</th>
                <th>Matrícula</th>
                <th>Semestre</th>
            </tr>";
        for($i = 0; $i < count($aluno); $i++){
    
            echo "<tr>
                       <td>{$aluno[$i]["nome"]}</td><td>{$aluno[$i]["matricula"]}</td><td>{$aluno[$i]["semestre"]}</td>
                </tr>";
       }
echo "</table>";
// var_dump($alunos);



echo "Hoje é {$diaSemana[$hoje]}"; // Interpolação com vetor precisa das {}
