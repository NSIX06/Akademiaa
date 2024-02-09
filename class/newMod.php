<?php

    

    class User
    {

        private $nome;
        private $email;
        private $dtNascimento;
        private $cidade;
        private $senha;

        public function __construct(){}

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
        //?

?>