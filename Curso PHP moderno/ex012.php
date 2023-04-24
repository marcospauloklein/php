<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Formulário retroalimentado
        $valor1 = $_GET['n'] ?? 0;
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?PHP echo $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="n">Número</label>
        <input type="number" name="n" value="<?=$valor1?>">
        <input type="submit" value="Calcular raízes">
        </form>
    </main>

    <section id="resultado">
    <h2>Resultado final</h2>
        <?php
            $rq=sqrt($valor1);
            $rc=$valor1 ** (1/3);
            echo "<p>Analisando o <strong>número $valor1</strong>, temos:</p>";
            echo "<li>A raiz quadrada é <strong> $rq</strong>.</li>";
            echo "<li>A raiz cúbica é <strong> $rc</strong>. </li>";
        ?>
    </section>
</body>
</html>