<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        
        <pre class="container">
            <?php 
                echo "<h2>SuperGlobias GET</h2>";
                var_dump($_GET);

                echo "<h2>SuperGlobias POST</h2>";
                var_dump($_POST);

                echo "<h2>SuperGlobais REQUEST</h2>";
                var_dump($_REQUEST);
            ?>
        </pre>
    </main>

</body>
</html>
