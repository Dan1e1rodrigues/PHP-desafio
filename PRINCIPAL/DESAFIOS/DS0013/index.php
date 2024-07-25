<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletronico</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php    
        $saque = $_GET['saque'] ?? 0;

        $resto = $saque;
	
        $tot100 = floor($resto / 100);
        $resto %= 100;
        
        $tot50 = floor($resto / 50);
        $resto %= 50;
        
        $tot10 = floor($resto / 10);
        $resto %= 10;
        
        $tot5 = floor($resto / 5);
        $resto %= 5;
    ?>

    <div class="container">
        <main>
            <h1>Caixa Eletrônico</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <div class="edicao">
                        <label for="saque">Qual valor você deseja sacar?(R$)<sup>*</sup></label>
                    </div>

                        <input type="number" name="saque" id="saque" step="5" required>
                        <p class="textCo"><sup>*</sup> Notas disponiveis: R$100, R$50, R$10 e R$5</p>

                        <input type="submit" value="Sacar">
                </form>
            </div>
        </main>

        <div id="resultado">
            <h2>Saque de R$ <?= $saque ?> realizado</h2>
            
            <p>O caixa eletrônico vai te entregar as 
                seguintes Notas:</p>
            <ul>
                <li><img src="./imagens/100-reais.jpg" alt="nota de 100" class="nota">  X <?= $tot100 ?></li>
                <li><img src="./imagens/50-reais.jpg" alt="nota de 50" class="nota">  X <?= $tot50 ?></li>
                <li><img src="./imagens/10-reais.jpg" alt="nota de 10" class="nota">  X <?= $tot10 ?></li>
                <li><img src="./imagens/5-reais.jpg" alt="nota de 5" class="nota">  X <?= $tot5 ?></li>
            </ul>
        </div>
    </div>
</body>
</html>
