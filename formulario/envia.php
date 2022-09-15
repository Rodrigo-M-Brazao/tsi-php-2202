<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="recebe.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nomeUsuario" id="nome">
        <label for="idade">Idade:</label>
        <input type="number" name="idadeUsuario" id="idade">
        <label for="cpf">CPF:</label>
        <input type="number" name="cpfUsuario" id="cpf">
        <label for="periodo">Período:</label>
        <select name="periodoUsuario" id="">
            <option value="">Escolha</option>
            <option value="Matutino">Matutino</option>
            <option value="Vespetino">Vespetino</option>
            <option value="Noturno">Noturno</option>
        </select>
        <input type="submit" value="enviar">
    </form>
</body>
</html>