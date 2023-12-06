<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delimitadores</title>

    <style>
        body{
            display: grid;
            gap: 20px;
        }

        body>div {
            border: 3px solid black;
        }
    </style>

</head>
<body>
    <div>
        <h2>Delimitador 1ª forma</h2>
        <script language="php">
            $nome = "Carlos";
            echo("<p>$nome</p>");
        </script>
    </div>

    <div>
        <h2>Delimitador 2ª forma</h2>
        <?
        $nome = "Carlos";
        echo "<p>$nome</p>";
        ?>
    </div>    

    <div>
        <h2>Delimitador 3ª forma</h2>
        <?php
        $nome = "Carlos";
        echo "<p>$nome</p>";
        ?>
    </div>  
    
    <div>
        <h2>Delimitador 4ª forma</h2>
        <% = <script language="php">
        $nome = "Carlos";
        echo "<p>$nome</p>";
        %>
    </div>

    <div>
        <h2>Delimitador 5ª forma</h2>
        <?= "<p>$nome</p>"; ?>
    </div>   


</body>
</html>