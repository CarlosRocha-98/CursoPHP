<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Salário</title>
</head>

<body>
    <?php
    $valor = $_GET ['valor'] ?? 0;
    $salario = 1380.60;
    $padrao = numfmt_create("pt_br", NumberFormatter::CURRENCY);
    $sobra = 0;

    ?>

    <main>
        <h1>Informe seu salário</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Salário (R$)</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?> " step="0.01">
            <p>Considerando o salário mínimo de <strong> <?= numfmt_format_currency($padrao, $salario, "BRL") ?> </strong></p>
            <input type="submit" value=" Calcular">
        </form>

    </main>

    <?php
        $quantidade_salarios = $valor / $salario;
        $sobra = $valor % $salario;
        echo $sobra;

    ?>


    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de <?= $valor?> ganha <strong> <?= (int) $quantidade_salarios ?> salário mínimos</strong> + <?= numfmt_format_currency ($padrao, $sobra, "BRL") ?>.</p>
    </section>

</body>
</html>