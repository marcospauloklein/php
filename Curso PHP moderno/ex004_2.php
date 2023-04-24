<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
    </header>
    
    <main>
        <h1>Resultado final</h1>
        <?php 
            $numero = $_GET["valor"] ?? 0;
            $numero1 = $numero-1;
            $numero2 = $numero+1;

            echo "O número escolhido foi <strong>$numero</strong>";
            echo "<br>O seu <em>antecessor</em> é $numero1";
            echo "<br>O seu <em>sucessor</em> é $numero2";
        ?>
        <!-- <h3>O número escolhido foi <strong> <?php echo $numero ?> </strong></h3>
        <h3>O seu antecessor é <?php echo $numero1 ?></h3>
        <h3>O seu sucessor é <?php echo $numero2 ?></h3>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior.</a></p> -->
        <br>
        <button onclick="javacript:window.location.href='ex004.php'">Voltar</button>
    </main>

</body>
</html>