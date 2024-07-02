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
        <h1>Trabalhando com números aleatórios</h1>
        <form action="resultado.php" method="GET">
            <?php 
                $numero = rand(0, 100);
                echo "Gerando um número aleatorio entre 0 e 100... ";
                echo "O valor gerado foi <strong>$numero</strong>";
            ?>
                <button type="update">Gerar Outro</button>
        </form>
    </div>
</body>
</html>
