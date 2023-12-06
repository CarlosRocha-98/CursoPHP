<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Aleatórios</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>    
    <main>
        <?php
        //Cotação via Google
        $cotacao = 4.87;

        //Quanto R$ você tem?
        $real = $_REQUEST["reais"] ?? 0;

        //Equivalência em Dolar
        $dolar = $real / $cotacao;

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

        echo "Seus " . numfmt_format_currency($padrao, $real, "BR1") . " equivalem a " . 
        numfmt_format_currency($padrao, $dolar, "USD");

        ?>

        <p> 
            <button>
                <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
            </button>
        </p>
    </main>
    
</body>

</html>