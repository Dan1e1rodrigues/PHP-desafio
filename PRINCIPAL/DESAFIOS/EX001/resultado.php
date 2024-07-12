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
            <p>
                <?php 
                    $numero = $_GET["numero"] ?? 0;
                    $nPositivo = $numero + 1;
                    $nNegativo = $numero - 1;

                    echo "O número escolhido foi $numero \n";
                    echo "<br>O seu antecessor é $nNegativo \n";
                    echo "<br>O seu sucessor é $nPositivo \n";
                ?>
            </p>
            <!-- Botão redirecionando para index.html -->
            <button type="button" onclick="window.location.href='index.html'">Retornar</button>
        </form>
    </div>
</body>
</html>
