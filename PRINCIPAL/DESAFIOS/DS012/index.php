<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio DIAS E SEMANAS</title>
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
            <h1>Calculando as Idades</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <!-- 1° Primeiro valor -->
                    <div class="edicao">
                        <label for="seg">Qual é o total de segundos?</label>
                    </div>
                        <input type="number" name="v1" id="v1" min="0" step="1" required>

                    <input type="submit" value="Calcular">
                </form>
            </div>
        </main>

        <div id="resultado">
            <h2>Totalizando Tudo</h2>
            
            <p>Analisando o valor que você digitou, <strong><?= number_format($total, 0, ",", 
            ".")?> segundos</strong> equivalem a um total de:</p>
            equivalem a um total de: </p>
            <ul>
                <li><?=$semana?> Semanas</li>
                <li><?=$dia?> Dias</li>
                <li><?=$hora?> Horas</li>
                <li><?=$minuto?> Minutos</li>
                <li><?=$segundo?> Segundo</li>
            </ul>
        </div>
    </div>
</body>
</html>
