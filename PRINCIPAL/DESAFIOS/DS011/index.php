<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php    
        $preco = $_GET['preco'] ?? 0;
        $reaj = $_GET['reaj'] ?? 0;
    ?>

    <div class="container">
        <main>
            <h1>Reajustador de Preços</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <!-- 1° Primeiro valor -->
                    <div class="edicao">
                        <label for="preco">Preço do Produto (R$)</label>
                    </div>
                    <input type="number" name="preco" id="preco" min="0.10" step="0.01"
                    value="<?=$preco?>">
                    
                    <div class="edicao">
                        <label for="reaj">Qual será o percentual do reajuste? 
                            (<strong><span id="p"><?=$reaj?></span>%</strong>)
                        </label>
                    </div>

                    <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reaj?>">
                    <!-- separação dos itens -->

                    <input type="submit" value="Reajustar">
                </form>
            </div>
        </main>

        <?php 
            if ($preco > 0) {
                $aumento = $preco * $reaj / 100;
                $novo = $preco + $aumento;
        ?>

        <div id="resultado">
            <h2>Resultado do Reajuste</h2>
            <?php 
                echo "O produto que custava R$ " . number_format($preco, 2, ',', '.') . ", com " . $reaj . "% de aumento vai passar a custar R$ " . number_format($novo, 2, ',', '.') . " a partir de agora.";
            ?>            
        </div>

        <?php } ?>
    </div>

    <!-- Aqui vai estar a minha funcionalidade -->
    <script>
        function mudaValor() {
            document.getElementById('p').innerText = document.getElementById('reaj').value;
        }
    </script>
    
</body>
</html>
