<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avaliação</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main>
        <section>
            <h2>Exercicio 01</h2>
            <form action="avaliação.php" method="get">

                <div class="input-container">
                    <label for="ex1-element">Digite um valor:</label>
                    <input type="text" name="ex1-value" id="ex1-element">
                </div>

                <input value="Enviar" type="submit" name="ex1">

            </form>

            <p class="resultado">

                <?php
                if(isset($_GET["ex1"])){
                    $val = $_GET["ex1-value"]; 
                    $resultado = "";

                    if ($val > 0) {
                        $resultado = "Valor Positivo";
                    } elseif ($val < 0) {
                        $resultado = "Valor Negativo";
                    } else {
                        $resultado = "Igual a Zero";
                    }

                    echo $resultado;
                }
                ?>

            </p>

        </section>

        <section>
            <h2>Exercicio 02</h2>
            <form action="avaliação.php" method="get">

                <div class="input-container">
                    <label for="ex2-element">Digite um valor:</label>
                    <input type="text" name="ex2-value" id="ex2-element">
                </div>

                <input value="Enviar" type="submit" name="ex2">

            </form>

                <p class="resultado"> 
                    <?php
                    if(isset($_GET["ex2"])){
                        $num = $_GET["ex2-value"]; 
                        $resultado = "";

                        for($i = 0; $i <= 10; $i++){
                            echo " <span> {$num} * {$i} = " . ($num * $i) ." </span> ";
                        }    
                    }
                    ?>

                </p>

        </section>

        <section>
            <h2>Exercicio 03</h2>
            <form action="avaliação.php" method="get">

                <div class="input-container">
                    <label for="ex3-element">Digite um valor:</label>
                    <input type="text" name="ex3-value" id="ex3-element">
                </div>
                <input value="Enviar" type="submit" name="ex3">

            </form>
                <p class="resultado">
                    <?php
                    if(isset($_GET["ex3"])){
                        $num = $_GET["ex3-value"];
                        $factorial = 1;
                        $steps = "";
                                   
                        for ($x=$num; $x>=1; $x--)
                        {
                          $factorial = $factorial * $x;
                          if ($x == 1) {
                          $steps .= "$x";
                          } else {
                          $steps .= "$x * ";
                          }
                        }
                        echo rtrim($steps, " * ");
        
                        echo " = $factorial"; 
                    }
                    ?>

                </p>    

        </section>

        <section>
            <h2>Exercicio 04</h2>
            <form action="avaliação.php" method="get">
                <div class="input-container">
                    <label for="ex4-txtNumero1">Número 01:</label>
                    <input type="text" name="ex4-txtNumero1" id="ex4-txtNumero1">
                </div> 
                <div class="input-container">
                    <label for="ex4-txtNumero2">Número 02:</label>
                    <input type="text" name="ex4-txtNumero2" id="ex4-txtNumero2">
                </div>
                <div class="input-container">
                    <label for="ex4-slOperacao">Operação:</label>
                    <select name="ex4-slOperacao" id="ex4-slOperacao">
                        <option value="+">Adição</option>
                        <option value="-">Subtração</option>
                        <option value="*">Multiplicação</option>
                        <option value="/">Divisão</option>
                    </select>
                </div>
                <input value="Enviar" type="submit" name="ex4">
            </form>
            <p class="resultado">
                <?php
                if(isset($_GET["ex4"])){        
                    $num01 = filter_input(INPUT_GET,"ex4-txtNumero1");
                    $num02 = filter_input(INPUT_GET,"ex4-txtNumero2");
                    $opera = filter_input(INPUT_GET,"ex4-slOperacao");
                    $resul = "";
                    if($num01 && $num02){
                        switch($opera){
                            case"+":
                                $resul = ($num01 + $num02);
                                break;
                            case"-":
                                $resul =($num01 - $num02);
                                break;
                            case"*":
                                $resul = ($num01 * $num02);
                                break;
                            case"/":
                                $resul = ($num01 / $num02);
                                break;
                        }
                    }
                    echo $resul;
                }
                ?>
            </p>
        </section>
    
    </main>

</body>

</html>