<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Modalidades</title>
    
    
    <link href="../assets/css/mod.css" rel="stylesheet">

</head>
<body>
    
<main>

<header>
        <nav>
            <a href="../index.html">Início</a>
            <a href="../php/modal.php">Modalidades</a>
            <a href="">Planos</a>
            <a href="">Eventos</a>
            <a href="../php/restricted.php">Área restrita</a>
            <a href="../php/formUser.php">Cadastre-se</a>
        </nav>


        <img src="../assets/img/akademia.png" alt="logotipo">
    </header>

    <h2>Nossas modalidades</h2>

<?php

    include("../class/modalidade.php");
    $modalidade = new Modalidade();

        $lista = $modalidade->listarModalidades();

        if ($lista != 0)
        {
        
            foreach($lista as $i)
            {

                $imagem = $i["imagem"];
                $nome = $i["nome"];
                $descricao = $i["descricao"];

                echo "
                    <div class='container'>

                    <div class='thumb'>
                    <img src='../$imagem' alt=''>

                    <strong>$nome</strong>

                    </div>

                    <div class='des'> 
                    <p> $descricao</p>
                    </div>

                    </div>
                ";
            }

        }

?>

</main>

    <footer>
        <p>Desenvolvido por Luiz, 2023</p>
        <p>Técnico em Informática Senac Santos</p>
    </footer>


</body>
</html>