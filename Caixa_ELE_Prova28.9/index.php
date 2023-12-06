<!DOCTYPE html>
<html lang="pt-br">
<head>   
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE-edge"/>
    <meta name="viewport" content="width-device-width, intial-scale=1.0" />
    <title>Caixa</title>
    <link rel="stylesheet" href=style.css />
    
</head>
<body>
    <?php
    
    $Valor = $_GET['Valor'] ?? 0;
          
     
    ?>


    <main>
        <h1>Caixa Eletrônico</h1>
        
            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="get">
                <label for="Valor">Qual Valor Vc Deseja Sacar? (R$) </label>
                <input type="number" name="Valor" id="Valor" value="<?= $Valor ?>"step="0.01">
                <small for="Valor" range="Valor">Notas disponiveis: R$100, R$50, R$10 e R$5 </strong></small>
                <input type="submit" value="Sacar">
            </form>
            
    </main>
        <section id="resultado">
            <h2> Saque de
            Realizado de R$<?=$Valor?></h2>
            <p>O caixa eletrônico vai te entregar as seguintes notas</p>
        
        
        <?php
        $Cem = (int) ($Valor / 100);
        $Cinquenta = (int) (($Valor % 100) /50);
        $Dez = (int) ((($Valor % 100) %50) /10);
        $Cinco = (int) (((($Valor %100) %50) %10) /5);
        $Restante = (int) ((((($Valor %100) %50) %10) %5));
        ?>

        <ul>
        <li><img src="img/cem.jpg"><?=$Cem;?></li>
        <li><img src="img/cinquenta.jpg"><?=$Cinquenta;?></li>
        <li><img src="img/dez.jpg"><?=$Dez;?></li>
        <li><img src="img/cinco.jpg"><?=$Cinco;?></li>        
        </ul>
        <p>Restante = <?=$Restante?></p>

        </section>
    
</body>
</html>