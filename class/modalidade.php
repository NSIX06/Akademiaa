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


  //* get and set from Nome

  public function getNome()
  {
    return $this->nome;
  }

  public function setNome($_nome)
  {
      $this->nome = $_nome;
  }

  //*


  //* get and set from Descrição

  public function getDescricao()
  {
      return $this->descricao;
  }

  public function setDescricao($_email)
  {
      $this->descricao = $_descricao;
  }

  //*
  

  //* get and set from Imagem

  public function getImagem()
  {
      return $this->dtNascimento;
  }

  public function setImagem($_imagem)
  {
      $this->imagem = $_imagem;
  }

  //*


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


  //?Função de inserir modalidade

public function inserirMod()
  {
    try 
    {
        include("../db/conn.php");
        $sql = "CALL inMod(:nome, :descricao, :imagem)";

        $data = [
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'imagem' => $this->imagem,
        
    ];

    $statement = $conn->prepare($sql);
    $statement->execute($data);

    return true;
}

    catch (\Exception $e)
    {
        return false;
    }

}

         //?Função de buscar o usuário

         public function buscarMod($_id)
         {
                     include("../db/conn.php");
 
                     $sql = "CALL bsMod('$_id')";
                     $data = $conn->query($sql)->fetchAll();
 
                     foreach ($data as $item) {
                         $this->nome = $item["nome"];
                         $this->dtNascimento = $item["descricao"];
                         $this->cidade = $item["imagem"];
                     }
 
             return true;
         }
     
 
              //?



?>