<?php
    class Categoria{

        private $id;
        private $nome;
        private $descricao;

        public function __construct($nome, $descricao, $id = null){

            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->id = $id;
        }

        public function getId(){
            return $this->id;
        }
        public function setId($id){
            $this->id = $id;
        }
        public function getNome(){
            return $this->nome;
        }
        public function setNome($nome){
            $this->nome = $nome;
        }
        public function getDescricao(){
            return $this->descricao;
        }
        public function setDescricao($descricao){
            $this->descricao = $descricao;
        }
    }