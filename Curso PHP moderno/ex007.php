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
            $inicio = date("m-d-Y", strtotime("-7 days")); //strtotime - função para converter string para data.
            $fim = date("m-d-Y"); //data atual, corrente.

            // url tirada do site do Banco Central - https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios
            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio .'\'&@dataFinalCotacao=\''. $fim .'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';

            $dados = json_decode(file_get_contents($url),true);

            $cotacao = $dados["value"][0]["cotacaoCompra"];
            	
		    $real = $numero;
		    $dolar = $real / $cotacao;
		
            // echo "Os seus R$" . number_format($real,2, "," , ".") . " equivalem a US\$" . number_format($dolar,2, "," , ".");
            
            //formatação de moedas com internacionalização! Biblioteca intl.
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Os seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>.";
        ?>
        <button onclick="javacript:window.location.href='ex006.php'">Voltar</button>
    </main>

</body>
</html>