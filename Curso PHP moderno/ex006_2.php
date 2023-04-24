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
            $numero = $_GET["real"] ?? 0;
		    $cotacao = 5.17;
		    $real = $numero;
		    $dolar = $real / $cotacao;
		
            // echo "Os seus R$" . number_format($real,2, "," , ".") . " equivalem a US\$" . number_format($dolar,2, "," , ".");
            
            //formatação de moedas com internacionalização! Biblioteca intl.
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Os seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
        <button onclick="javacript:window.location.href='ex006.php'">Voltar</button>
    </main>

</body>
</html>