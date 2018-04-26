<?php

require_once '../modelos/CrudProdutos.php';


if (isset($_GET['acao'])){
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao){

    case 'index':

        $crud = new CrudProdutos();
        $produtos = $crud->getProdutos();

        include '../visoes/templates/cabecalho.php';
        include '../visoes/produtos/index.php';
        include '../visoes/templates/rodape.php';
        break;

    case 'show';
        $id = $_GET['id'];
        $crud = new CrudProdutos();
        $produto = $crud->getProduto($id);
        include '../visoes/templates/cabecalho.php';
        include '../visoes/produtos/show.php';
        include '../visoes/templates/rodape.php';
        break;

    case 'inserir';
        if (!isset($_POST['gravar'])){ // se ainda nao tiver preenchido o form
            include '../visoes/templates/cabecalho.php';
            include '../visoes/categoria/inserir.php';
            include '../visoes/templates/rodape.php';
        }else{
            $nome = $_POST['nome'];
            $descricao= $_POST['descricao'];
            $novaCategoria = new Categoria(null,$nome,$descricao);

            $crud = new CategoriaCrud();
            $crud->insertCategoria($novaCategoria);

            header('Location: categoria.php');
        }
        break;

    case 'alterar';
        $id = $_GET['id'];
        $crud = new CategoriaCrud();

        $categoria = $crud->getCategoria($id);

}




