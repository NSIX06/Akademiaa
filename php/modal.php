<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modalidades</title>
    <link href="../assets/css/mod
    .css" rel="stylesheet">
</head>
<body>
    


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
                    <div class='card'>
                        <img class='thumb' src='../$imagem' alt=''>
                        <p class='titulo-produto'>$nome</p> 
                        <p>$descricao</p>
                    </div>
                ";
            }

        }

?>

</body>
</html>