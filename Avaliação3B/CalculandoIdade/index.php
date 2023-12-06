<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação3B</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    $AnoNasceu = $_GET['anonasceu'] ?? 0;
    $AnoAtual = $_GET['anoatual'] ?? 0;
    ?>


    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="anonasceu">Em que ano você nasceu</label>
            <input type="number" name="anonasceu" id="anonasceu" value="<?= $AnoNasceu ?>">
            <label for="anoatual">Quer saber sua idade em que ano? (atualmente estamos em 2023)</label>
            <input type="number" name="anoatual" id="anoatual" value="<?= $AnoAtual ?>">
            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>
    <section id="resultado">
        <h2>resultado</h2>
        <?php
        $soma =  $AnoAtual -  $AnoNasceu;
        echo "<p>Quem nasceu em $AnoNasceu vai ter <strong>$soma anos</strong> em $AnoAtual!</p>"
        ?>
    </section>

</body>

</html>