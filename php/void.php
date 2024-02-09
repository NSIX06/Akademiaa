<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="../assets/css/void.css" rel="stylesheet">
    <title>Bem-vindo</title>
</head>
<body>
    <h1>Bem-vindo à Akademia</h1>

    <?php
        if (isset($_COOKIE["nome"]))
        {
            echo "<p>Olá, " . $_COOKIE["nome"] . "</p>";
        }
        else {
            header("Location: ../php/restricted.php");
        }
        
    ?>

    <a href="../index.html"> Ir para a página de inicio</a>
    <a href="../php/sair.php">Sair</a>
</body>
</html>