<?php
    require_once '../modelos/CategoriaCrud.php';

        if (isset($_GET['acao'])){
            $acao = $_GET['acao'];
        }else{
            $acao = 'index';
        }
        switch($acao){
            case 'index':

                $crud = new CategoriaCrud();
                $categorias = $crud->getCategorias();
                include '../visoes/templates/cabecalho.php';
                include '../visoes/categoria/index.php';
                include '../visoes/templates/rodape.php';
                break;

            case 'show':
                $id = $_GET['id'];
                $crud = new CategoriaCrud();
                $categoria = $crud->getCategoria($id);
                include '../visoes/templates/cabecalho.php';
                include '../visoes/categoria/show.php';
                include '../visoes/templates/rodape.php';
                break;

            case 'inserir':
                if (!isset($_POST['gravar'])){//se o submit enviar nao estivar setado
                    include '../visoes/templates/cabecalho.php';
                    include '../visoes/categoria/inserir.php';
                    include '../visoes/templates/rodape.php';
                }else{
                    $nome = $_POST['nome'];
                    $descricao = $_POST['descricao'];
                    $categoria = new Categoria($nome,$descricao);
                    $crud = new CategoriaCrud();
                    $crud->insertCategoria($categoria);

                    header('Location: categorias.php');
                }

                break;
            case 'editar':
                if (!isset($_POST['gravar'])) {//se o submit enviar nao estivar setado
                    $id = $_GET['id'];
                    $crud = new CategoriaCrud();
                    $categoria = $crud->getCategoria($id);
                    include '../visoes/templates/cabecalho.php';
                    include '../visoes/categoria/editar.php';
                    include '../visoes/templates/rodape.php';
                }else{
                    $id = $_POST['id'];
                    $nome = $_POST['nome'];
                    $descricao = $_POST['descricao'];
                    $categoria = new Categoria($nome,$descricao,$id);
                    $crud = new CategoriaCrud();
                    $crud->updateCategoria($categoria);

                    header('Location: categorias.php');

                }


        }

