<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Desafio 001</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php
        $n = $_GET["numero"] ?: 0;

        echo "<p>Seu número é <strong>$n</strong></p>";
        echo "<p> O número antecessor é <strong>" . $n - 1 . "</strong></p>";
        echo "<p> O número sucessor é <strong>" . $n + 1 . "</strong></p>";
        ?>
        <p>
            <button>
                <a href="javascript:history.go(-1)">Voltar para a página anterior</a>
            </button>
        </p>
    </main>

</body>

</html>