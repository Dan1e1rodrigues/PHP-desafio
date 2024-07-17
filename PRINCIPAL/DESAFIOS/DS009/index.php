<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP / Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php 
        $valorV1 = $_GET['v1'] ?? 1;
        $valorP1 = $_GET['v2'] ?? 1;
        $valorV2 = $_GET['v3'] ?? 1;
        $valorP2 = $_GET['v4'] ?? 1;
    ?>

    <div class="container">
        <main>
            <h1>Médias Aritméticas</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <!-- 1° Primeiro valor -->
                    <div class="edicao">
                        <label for="">1° Valor</label>
                    </div>
                    <input type="number" name="v1" id="v1" value="<?= $valorV1 ?>" step="0.01">
                    <!-- separação dos itens -->

                    <!-- 2° Segundo valor -->
                    <div class="edicao">
                        <label for="">1° Peso</label>
                    </div>
                    <input type="number" name="v2" id="v2" value="<?= $valorP1 ?>" step="0.01">
                    <!-- separação dos itens -->

                    <!-- 3° Terceiro valor -->
                    <div class="edicao">
                        <label for="">2° Valor</label>
                    </div>
                    <input type="number" name="v3" id="v3" value="<?= $valorV2 ?>" step="0.01">
                    <!-- separação dos itens -->

                    <!-- 4° Quarto valor -->
                    <div class="edicao">
                        <label for="">2° Peso</label>
                    </div>
                    <input type="number" name="v4" id="v4" value="<?= $valorP2 ?>" step="0.01">
                    <!-- separação dos itens -->

                    <input type="submit" value="Calcular Médias">
                </form>
            </div>
        </main>

        <div id="resultado">
            <h2>Cálculo das Médias</h2>

            <?php 
                echo "</br>Analisando o <strong>número $valorV1";
                echo "</br>Analisando o <strong>número $valorP1";
                echo "</br>Analisando o <strong>número $valorV2";
                echo "</br>Analisando o <strong>número $valorP2";
            //     echo "</br>A sua raiz quadrada é <strong> " . number_format($raizQuadrada, 2,
            //         ",", "."). "</strong>";
            //     echo "</br>A sua raiz cúbica é <strong>" . number_format($raizCubica, 2,
            //         ",", "."). "</strong>";
            // ?>            
        </div>
    </div>
</body>
</html>
