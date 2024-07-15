<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informe o seu salario</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        // Capturando o número do formulário
        $salario = $_GET['salario'] ?? 0;

        // Variável com o salário mínimo
        $salarioMinimo = 1412.00;

        // Calculando divisão e resto
        $divisao = intdiv($salario, $salarioMinimo);
        $resto = $salario % $salarioMinimo;
    ?>

    <div class="container">
        <main>
            <h1>Informe seu Salário</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <div class="edicao">
                        <label for="salario">Salário (R$)</label>
                    </div>

                    <input type="number" name="salario" id="salario" value="<?= $salario ?>" step="0.01">

                    <p class="edicaoT">Considerando o salário mínimo de R$
                        <?= number_format($salarioMinimo, 2, "," , ".") ?>,
                        você ganha <?= $divisao ?> salários mínimos + R$ <?= number_format($resto, 2, "," , ".") ?>.
                    </p>

                    <input type="submit" value="Calcular">
                </form>
            </div>
        </main>

        <div id="resultado">
            <h2>Resultado Final</h2>
            <?php 
                if ($salario > 0) {
                    echo "<p>Quem recebe um salário de R$ " . number_format($salario, 2, "," , ".") . 
                         " ganha $divisao salários mínimos + R$ " . number_format($resto, 2, "," , ".") . ".</p>";
                }
            ?>            
        </div>
    </div>
</body>
</html>
