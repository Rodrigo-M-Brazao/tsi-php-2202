<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="atualizar.php" method="post">
            <label for="nome">Nome: </label>
            <input type="text" name="nome" id="nome">
            <br><br>
            <label for="turno">Turno: </label>
            <select name="turno" id ='turno'>
                <option value=""></option>
                <option value="matutino"
                <?php echo $aluno['turno'] == 'matutino' ? 'selected': ''?>>Matutino</option>
                <option value="vespertino"
                <?php echo $aluno['turno'] == 'vespertino' ? 'selected': ''?>>Vespetino</option>
                <option value="noturno"
                <?php echo $aluno['turno'] == 'noturno' ? 'selected': ''?>>Noturno</option>
            </select>
            <br><br>
            <label for="inicio">Inicio</label>
            <input type="date" name="inicio" id="inicio">
            <br><br>
            <input type="hidden" name="id" value = "<?php echo $id;?>">
            <input type="submit" value="Atualizar">
        </form>
    </div>
    
</body>
</html>