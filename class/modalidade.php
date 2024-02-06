<?php

class Modalidade
{
    private $nome;
    private $descricao;
    private $imagem;

    public function __construct(){}

//? Função de criar as modalidades 

public function create($_nome, $_descricao, $_imagem)
{
$this->nome = $_nome;
$this->descricao = $_descricao;
$this->imagem = $_imagem;
}

public function listarModalidades()
{
try 
{
    include("../db/conn.php");

    $sql = "CALL psModalidade()";
    $data = $conn->query($sql)->fetchAll();

    return $data;
} 
catch (Exception $e) 
{
return false;
}
}
}

?>