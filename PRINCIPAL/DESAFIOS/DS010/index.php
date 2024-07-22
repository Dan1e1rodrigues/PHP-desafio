<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DESAFIO PHP / MAQUINA DO TEMPO</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <?php    
        $atual = date("Y");
	    $nasc = $_GET['nasc'] ?? 2000;
        $ano = $_GET['ano'] ?? $atual;     
	
	    $calculo = ($ano - $nasc);
    ?>

    <div class="container">
        <main>
            <h1>Calculando as Idades</h1>
            <div class="fundo">
                <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
                    <!-- 1° Primeiro valor -->
                    <div class="edicao">
                        <label for="nasc">Em que ano você nasceu?</label>
                    </div>
                    <input type="number" name="nasc" id="nasc" min="1900" max="<?=$atual?>" value="<?= $nasc?>">
                    <!-- separação dos itens -->

                    <!-- 2° Segundo valor -->
                    <div class="edicao">
                        <label for="">Quer saber sua idade em que ano? (Atualmente 
                            estamos em <strong><?= $atual?></strong>)</label>
                    </div>
                    <input type="number" name="ano" id="ano" min="1900" value="<?= $ano ?>">
                    <!-- separação dos itens -->

                    <input type="submit" value="Qual será minha idade">
                </form>
            </div>
        </main>

        <div id="resultado">
            <h2>Resultados</h2>

            <?php 
                
                echo "Quem nasceu em $nasc vai ter <strong>$calculo anos</strong> em $atual";
                
            ?>            
        </div>
    </div>
</body>
</html>
