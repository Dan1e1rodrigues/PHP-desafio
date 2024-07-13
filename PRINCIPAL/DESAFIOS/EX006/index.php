<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Divisão PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        //Capturando o número do formulario
        $valor1 = $_GET['v1'] ?? 0;
        $valor2 = $_GET['v2'] ?? 1;

        // $valor1 = 87;
        // $valor2 = 10;
    ?>
    <div class="container">
        <main>
            <h1>Anatomia de uma divisão</h1>
            <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                <div class="edicao">
                    <label for="v1">Dividendo</label>
                </div>
                <input type="number" name="v1" id="v1" min="0" value="<?=$valor1?>">

                <div class="edicao">
                    <label for="v2">Divisor</label>
                </div>
                <input type="number" name="v2" id="v2" min="1" value="<?=$valor2?>">

                <input type="submit" value="Analisar">
            </form>
        </main>

        <div id="resultado">
            <h2>Estrutura da Divisão</h2>
            <?php 
                // Calculos
                $quociente = intdiv($valor1, $valor2);
                $resto = $valor1 % $valor2;
            ?>

            <table>
                <tr>
                    <td><?=$valor1?></td>
                    <td><?=$valor2?></td>
                </tr>
                <tr>
                    <td><?=$resto?></td>
                    <td><?=$quociente?></td>
                </tr>
            </table>
        </div>
    </div>
</body>
</html>
