<?php
/**
CONTORLADOR PARA CATEGORIA
 * VAI VERIFICAR QUE AÇÃO O USUARIO DESEJA FAZER
 * DEPENDENDO DA AÇÃO, faz algo e exibe uma view
 */


require_once '../modelos/CategoriaCrud.php';

if (isset($_GET['acao'])) {
    $acao = $_GET['acao'];
}else{
    $acao = 'index';
}

switch ($acao) {
    case 'index':
        $crud = new CrudCategoria();
        $categorias = $crud->getCategorias();
        include '../views/templates/cabecalho.php';
        include '../views/categorias/index.php';
        include '../views/templates/rodape.php';
        break;
    case 'show' :
        $id=$_GET['id'];
        $crud = new CrudCategoria();
        $categorias = $crud->getCategoria($id);
        include '../views/templates/cabecalho.php';
        include '../views/categorias/show.php';
        include '../views/templates/rodape.php';
        break;

    case 'inserir':

        if(!isset($_POST['gravar'])) {
            include '../views/templates/cabecalho.php';
            include '../views/categorias/inserir.php';
            include '../views/templates/rodape.php';
        }else{

        }

}