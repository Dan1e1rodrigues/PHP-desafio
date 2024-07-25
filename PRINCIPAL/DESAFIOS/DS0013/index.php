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
        $total = $_GET['v1'] ?? 0;
        $sobra = $total;
        
        $semana = (int)($sobra / 604_800);
        $sobra = $sobra % 604_800;
        
        $dia = (int)($sobra / 86_400);
        $sobra = $sobra % 86_400;
        
        $hora = (int)($sobra / 3_600);
        $sobra = $sobra % 3_600;
        
        $minuto = (int)($sobra / 60);
        $sobra = $sobra % 60;
        
        $segundo = $sobra;
    ?>

    <div class="container">
        <main>
            <h1>Caixa Eletrônico</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <!-- 1° Primeiro valor -->
                    <div class="edicao">
                        <label for="seg">Qual valor você deseja sacar?(R$)*</label>
                    </div>

                        <input type="number" name="v1" id="v1" min="0" step="1" required>
                        <p class="textCo">* Notas disponiveis: R$100, R$50, R$10 e R$5</p>

                    <input type="submit" value="Sacar">
                </form>
            </div>
        </main>

        <div id="resultado">
            <h2>Saque de R$0, 00 realizado</h2>
            
            <p>O caixa eletrônico vai te entregar as seguintes Notas:</p>
            <ul>
                <li>x0</li>
                <li>x1</li>
                <li>x2</li>
                <li>x3</li>
                <li>x4</li>
            </ul>
        </div>
    </div>
</body>
</html>
