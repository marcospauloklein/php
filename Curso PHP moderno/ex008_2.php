<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado final</h1>
        <?php 
            $digitado = $_POST["n"] ?? 0;
            $inteiro = (int) $digitado;
            $resto = $digitado - $inteiro;
            
            echo "<p>Analisando o número informado <strong>" . number_format($digitado,3, ",", ".") . "</strong> informado pelo usuário.</p>";
            echo "<ul><li> A parte inteira do número é <strong>". number_format($digitado,0, ",", ".") ."</strong></li>";
            echo "<li>A parte fracionária do número é <strong> " . number_format($resto, 3, "," , ".") ." </strong></li></ul>";
        ?>
        <button onclick="javacript:history.go(-1)">Voltar</button>
    </main>
</body>
</html>