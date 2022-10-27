<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>listar</title>
</head>
<body>
    <div class="container">
        <a href="formIncluir.php"><button class = "btn">Novo Aluno</button></a>
        <br>
        <?php
        //Mensagem de feedback de gravar aluno
        if(isset($gravou)){
            if(!$gravou){
                echo '<div class = "alert alert-danger">
                Erro ao tentar gravar o aluno!
                </div>';
            }
            else{
                echo '<div class = "alert alert-success">
                    Aluno gravado com sucesso!
                </div>';
            }
        }
        //Mensagem de feedback de apagar aluno
        if(isset($apagou)){
            if(!$apagou){
                echo '<div class = "alert alert-danger">
                Erro ao tentar deletar o aluno!
                </div>';
            }
            else{
                echo '<div class = "alert alert-success">
                    Aluno deletado com sucesso!
                </div>';
            }
        }
        
        ?>
        <form  method="post">
            <table class = 'table'>
                <thead>
                    <th>id</th>
                    <th>nome</th>
                    <th>turno</th>
                    <th>inicio</th>
                    <th>Ações</th>
                </thead>
            
            <?php
                foreach($alunos as $aluno){
                    echo "
                    <tr>
                        <td>{$aluno["id"]}</td>
                        <td>{$aluno["nome"]}</td>
                        <td>{$aluno["turno"]}</td>
                        <td>{$aluno["inicio"]}</td>
                        <td>
                            <button 
                                class = 'btn btn-danger' 
                                formaction='apagar.php'
                                value = {$aluno["id"]}
                                name = 'id'>
                                Apagar
                            </button>
                            <button 
                                class = 'btn btn-success' 
                                formaction='editar.php'
                                value = {$aluno["id"]}
                                name = 'id'>
                                Editar
                            </button>
                        </td>
                        <td>
                           
                        </td>
                    </tr>";
                }
            ?>
            </table>
            
        </form>
        
    </div>
</body>
</html>