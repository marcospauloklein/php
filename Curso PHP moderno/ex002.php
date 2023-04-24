<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplo 2</title>
</head>
<body>
    <h1>Exemplo PHP</h1>
    <?php
        $nome = (string) 'Marcos';
        date_default_timezone_set("America/Sao_Paulo"); // GMT - 3
        echo "Olá $nome, ";
        echo "hoje é dia " .date("D-d/m/y");
        echo " e a hora é " .date("G:i:s");

        var_dump($nome);
    ?>
</body>
</html>