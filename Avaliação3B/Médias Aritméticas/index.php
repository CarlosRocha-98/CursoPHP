<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Artiméticas</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $Valor1 = $_GET ['valor1'] ?? 0;
    $Peso1 = $_GET ['peso1'] ?? 0;
    $Valor2 = $_GET ['valor2'] ?? 0;
    $Peso2 = $_GET ['peso2'] ?? 0;

    ?>

    <main>
        <h1>Médias Aritméticas </h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor1">1° Valor</label>
            <input type="number" name="valor1" id="valor1" value="<?= $Valor1 ?>">
            <label for="peso1">1° Peso</label>
            <input type="number" name="peso1" id="peso1" value="<?= $Peso1 ?>">
            <label for="valor2">2° Valor</label>
            <input type="number" name="valor2" id="valor2" value="<?= $Valor2 ?>">
            <label for="peso2">2° Peso</label>
            <input type="number" name="peso2" id="peso2" value="<?= $Peso2 ?>">
            <input type="submit" value="Calcular Médias">
        </form>
    </main>
    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php
        echo "<p>Analisando os valores $Valor1 e $Valor2: </p>";
        

        $media =  ($Valor1 + $Valor2) / 2;
        $Ponderada = (($Valor1 * $Peso1) + ($Valor2 * $Peso2)) / ($Peso1 + $Peso2);

        echo "<ul><li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $media.</li>";
        echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $Peso1 e $Peso2 é igual a ". number_format($Ponderada, 2, ",","."). ".</li></ul>"
        ?>
    </section>


</body>