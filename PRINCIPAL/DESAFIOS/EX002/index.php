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
            <h1>Sorteador de número</h1>
                <?php 
                    $min = 0;
                    $max = 100;

                    $numero = mt_rand($min, $max);
                    echo "<br>Gerando um número aleatorio entre $min e $max... ";
                    echo "<br>O valor gerado foi <strong>$numero</strong>";
                ?>
                    <button onclick="document.location.reload()">Gerar Outro</button>          
        </div>
    </body>
    </html>
