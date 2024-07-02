<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Resultado Final</h1>
        <form action="resultado.php" method="GET">
            <?php 
                $numero = $_GET["numero"];
                $nPositivo = $numero + 1;
                $nNegativo = $numero - 1;

                echo "O número escolhido foi $numero ";
                echo " O seu antecessor é $nNegativo";
                echo " O seu sucessor é $nPositivo";
            ?>
            <button type="submit"><a href="<?php echo htmlspecialchars('/PRINCIPAL/EX001/index.php'); ?>">Retronar</a></button>
        </form>
    </div>
</body>
</html>
