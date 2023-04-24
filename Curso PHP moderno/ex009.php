<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Superglobais</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <pre>
            <?php
                //para setar um cookie. 3600 segundos são uma hora que é o tempo de duração do cookie no navegador.
                //deve ser a primeira declaração do script.
                setcookie("dia-da-semana","segunda-feira", time() + 3600);

                session_start();
                $_SESSION["teste"] = "Funcionou!";

                echo "<h1> Superglobal GET</h1>";
                var_dump($_GET);

                echo "<h1> Superglobal POST</h1>";
                var_dump($_POST);

                echo "<h1> Superglobal REQUEST</h1>";
                var_dump($_REQUEST);

                echo "<h1> Superglobal COOKIE</h1>";
                var_dump($_COOKIE);

                echo "<h1> Superglobal SESSION</h1>";
                var_dump($_SESSION);

                // variável environment - Variáveis de ambiente
                echo "<h1> Superglobal ENV</h1>";
                var_dump($_ENV);

                echo "<h1> Superglobal SERVER</h1>";
                var_dump($_SERVER);

                // a GLOBALS pega os dados de TODAS as outras superglobais
                echo "<h1> Superglobal GLOBALS</h1>";
                var_dump($GLOBALS);
            ?>
        </pre>
    </main>
</body>
</html>