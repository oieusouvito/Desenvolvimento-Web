<?php

    echo "hello world";

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get" action="resultado.php">
        nome: <input type = "text" name="nome">
        <br><br>
        idade: <input type="number" name="idade">
        <br><br>
        e-mail: <input type="email" name="email">
        <br><br>
        <input type="submit" value="Salvar">
    </form>
</body>
</html>