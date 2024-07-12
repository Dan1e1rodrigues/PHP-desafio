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
        <h1>Conversor de Moedas</h1>
            <p>
                <?php 
                    $numero = $_GET["numero"] ?? 0;
                    $dollar = "5,56";
                    $resulted = ($numero/$dollar); 

                    echo "Seus equivalem $numero equivalem a US$ $resulted";
                ?>
            </p>
            <!-- Botão redirecionando para index.html -->
            <button type="button" onclick="window.location.href='index.php'">Retornar</button>
    </div>
</body>
</html>
