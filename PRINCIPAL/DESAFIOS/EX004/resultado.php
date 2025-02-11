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
        <h1>Analisador de Número Real</h1>
        <form action="resultado.php" method="GET">
            <p>
                <?php 
                    $numero = $_GET["numero"] ?? 0;

                    // Parte logica
                    $numInteiro = (int) $numero;
                    $numFracionario = $numero - $numInteiro;

                    echo "<br> Analisando o número $numero informado pelo usuário: ";
                    echo "<br>A parte inteira do número é  <strong>$numInteiro<strong/> \n ";
                    echo "<br>A parte fracionaria do número é <strong>$numFracionario<strong/> \n";
                ?>
            </p>
            <!-- Botão redirecionando para index.html -->
            <button type="button" onclick="window.location.href='index.html'">Voltar</button>
        </form>
    </div>
</body>
</html>
