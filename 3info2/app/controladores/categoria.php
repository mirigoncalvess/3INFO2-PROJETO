<?php
/**
 * Created by PhpStorm.
 * User: Arthur Castro
 * Date: 11/04/2018
 * Time: 13:23
 */

    require_once "../modelos/CategoriaCrud.php";
    require_once "../modelos/Categoria.php";

    $categoriaCRUD = new CategoriaCrud();

    if (isset($_GET['action'])){
        $action = $_GET['action'];
    } else {
        $action = 'index';
    }

    switch ($action){
        case 'index':
            $categorias = $categoriaCRUD->getCategorias();
            include '../views/categorias/index.php';
            break;

        case 'show';
            $categoria = $categoriaCRUD->getCategoria($_GET['id']);
            include '../views/categorias/show.php';
    }

