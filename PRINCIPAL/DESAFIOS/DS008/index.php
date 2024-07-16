<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio Raiz Quadrada</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $valorRaiz = $_GET['raiz'] ?? 0;

        $raizQuadrada = sqrt($valorRaiz);

        $raizCubica = pow($valorRaiz, 1/3);
    ?>

    <div class="container">
        <main>
            <h1>Informe Um Número</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <div class="edicao">
                        <label for="valorRaiz">Número</label>
                    </div>

                    <input type="number" name="raiz" id="raiz" value="<?= $valorRaiz ?>" step="0.01">

                    <!-- <p class="edicaoT">Considerando o salário mínimo de R$
                        <?= number_format($salarioMinimo, 2, "," , ".") ?>,
                        você ganha <?= $divisao ?> salários mínimos + R$ <?= number_format($resto, 2, "," , ".") ?>.
                    </p> -->

                    <input type="submit" value="Calcular Raízes">
                </form>
            </div>
        </main>

        <div id="resultado">
            <h2>Resultado Final</h2>

            <?php 
                echo "</br>Analisando o <strong>número $valorRaiz </strong>, temos:";
                echo "</br>A sua raiz quadrada é <strong> $raizQuadrada </strong>";
                echo "<br>A sua raiz cúbica é <strong> $raizCubica</strong>";
            ?>            
        </div>
    </div>
</body>
</html>
