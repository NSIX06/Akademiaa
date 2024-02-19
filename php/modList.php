<?php
    include_once("../class/modalidade.php");
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">
    <title>Akademia</title>

    
    
    <link href="../assets/css/estilo.css" rel="stylesheet">
</head>
<body>

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

    <main>
        <section>


    <h1>Cadastrar nova modalidade</h1>

        <section id = "poost">
    <form method="POST">

        <label>Nome da modalidade:</label>
        <input type="text" name="nome" minlength="3" required placeholder="Informe seu nome completo"><br><br>

        <label>Descrição:</label>
        <input type="text" name="descricao" minlength="3" required  placeholder="Informe a descrição"><br><br>

        <input type="file" name="up">


        <button type="submit" name="inserir">Cadastrar Modalidade</button>


    <?php


        if ( isset($_REQUEST["inserir"]) ) //evitar que o procedimento seja executado sem apertar o botão
            {

                $target_dir = "assets/img/";
                $target_file = $target_dir . basename($_FILES["up"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // Check if image file is a actual image or fake image
                if(isset($_POST["inserir"])) 
                {
                $check = getimagesize($_FILES["up"]["tmp_name"]);
                if($check !== false) 
                {
                    echo "Este arquivo é uma imagem - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "Este arquivo não é uma imagem!";
                    $uploadOk = 0;
                }
                }



                $p = new modalidade(); //criar objeto da classe Produto
                $p->create($_REQUEST["nome"], $_REQUEST["descricao"],  $target_file); // encapsular os valores do form no objeto produto
                
                echo $p->inserirMod() == true?
                        "<p>Modalidade cadastrada.</p>" :
                        "<p>Ocorreu um erro!</p>";
            }
        ?>

    </form>

        </section>
    </section>
    </main>

    <footer>
        <p>Desenvolvido por Luiz, 2023</p><br>
        <p>Técnico em Informática Senac Santos</p>
    </footer>

    
</body>
</html>