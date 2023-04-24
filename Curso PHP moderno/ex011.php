<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Anatomia de uma divisão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando os dados do Formulário retroalimentado
        $valor1 = $_GET['n1'] ?? 0;
        $valor2 = $_GET['n2'] ?? 1;
    ?>
    <main>
        <h1>Anatomia de uma divisão</h1>
        <form action="" method="get">
            <label for="n1">Dividendo</label>
            <input type="number" name="n1" min="0" value="<?=$valor1?>">
            <label for="n2">Divisor</label>
            <input type="number" name="n2" min="1"  value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>
    </main>
    <section id="resultado">
        <h2>Estrututa da divisão</h2>
        <?php 
            $resultado = intdiv($valor1, $valor2);
            // $resto = $valor1 - ($valor2 * $resultado);
            $resto = $valor1 % $valor2;
        ?>
        
        <table class="divisao">
            <tr>
                <td> <?php echo $valor1?> </td>
                <td> <?php echo $valor2?> </td>
            </tr>
            <tr>
                <td> <?php echo $resto?> </td>
                <td> <?php echo $resultado?> </td>
            </tr>
    </section>    
</body>
</html>