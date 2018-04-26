<?php

    require 'DBConnection.php';
    require 'Categoria.php';

    class CategoriaCrud{
        private $conexao;
        public function __construct(){
            $this->conexao = DBConnection::getConexao();
        }


        public  function getCategorias(){
            $sql = "select * from categoria order by nome_categoria";
            $resultado = $this->conexao->query($sql);

            $categorias = $resultado->fetchALL(PDO::FETCH_OBJ);
            //var_dump($categorias);

            $listacategorias = [];

            foreach ($categorias as $categoria){
                $objcategoria = new Categoria($categoria->nome_categoria, $categoria->descricao_categoria, $categoria->id_categoria);
                $listacategorias[] = $objcategoria;
            }

            return $listacategorias;
        }

        public function getCategoria(int $id){
            //montando o texto da consulta
            $sql = "select * from categoria where id_categoria = $id order by nome_categoria ";
            //executando a consulta montada - guarda o resultado feitoporviniciusperes3info2
            $resultado = $this->conexao->query($sql);
            //transforma o resultado em um array - guarda o array em $categoria
            $categoria = $resultado->fetch(PDO::FETCH_ASSOC);

            $objcategoria = new Categoria($categoria['nome_categoria'], $categoria['descricao_categoria'], $categoria['id_categoria']);

            return $objcategoria;
        }

        public function insertCategoria(Categoria $categoria){
            $sql = "insert into categoria (nome_categoria, descricao_categoria) values ('".$categoria->getNome()."', '".$categoria->getDescricao()."')";
            $this->conexao->exec($sql);
        }

        public function updateCategoria(Categoria $categoria){
            $sql = "update categoria set nome_categoria = '".$categoria->getNome()."', descricao_categoria = '".$categoria->getDescricao()."' where id_categoria = ".$categoria->getId();
            $this->conexao->exec($sql);
        }

        public function deleteCategoria($id){
            $sql = "delete categoria where id_categoria = $id";
            $this->conexao->exec($sql);
        }

    }
