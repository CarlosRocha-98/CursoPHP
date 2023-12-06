<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
    //capturando os dados do Formulário Retroalimentado

    $valor1 = $_GET['dividendo'] ?? 0;
    $valor2 = $_GET['divisor'] ?? 1;
    ?>    

    <main>
        <h1>Anatomia de DIVISÂO</h1>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
            <label for="dividendo">Dividendo</label>
            <input type="number" name="dividendo" id="dividendo" value="<?=$valor1?>">
            <label for="divisor">Divisor</label>
            <input type="number" name="divisor" id="divisor" value="<?=$valor2?>">
            <input type="submit" value="Analisar">
        </form>                
    </main>    
    <section id="resultado">
        <h2>Estrutura da Divisão</h2>
        <?php
            $divisao = $valor1 / $valor2;
            echo "<p>A divisão entre os valores $valor1 e $valor2 é <strong>igual a $divisao</strong>.</php>"
        ?>
    </section>     

    
    
    <table class="divisao">
        <tr>
            <td>$dividendo</td>
            <td>$divisor</td>
        </tr>
        <tr>
            <td>$quociente</td>
            <td>$resto</td>
        </tr>
    </table>
</body>

</html>