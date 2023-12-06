<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Raiz Quadrada</title>
</head>

<body>
    <?php
        $valor = $_GET ['valor'] ?? 0;
       
    ?>

    <main>
        <h1>Informe um número</h1>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="valor">Número</label>
            <input type="number" name="valor" id="valor" value="<?= $valor ?> ">
            <input type="submit" value=" Calcular Raízes">
        </form>
    </main>    

    <?php
        $raiz_quadrada = sqrt($valor);
        $raiz_cúbica = pow($valor, 1.0/3.0)


    ?>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <p>Analisando o <strong>número <?= $valor ?></strong>, temos:</p>
        <ul>
            <li>
                <p>
                    A sua raiz quadrada é <strong><?= $raiz_quadrada ?> </strong>
                </p>
            </li>
            <li>
                <p>
                    A sua raiz cública é <strong><?= $raiz_cúbica ?> </strong>
                </p>
            </li>
        </ul>
    </section>


</body>
</html>