
<div style="background-color: darkmagenta">

    <h1 style="margin-left: 1%;"> <i class="tags icon"></i> Listagem de Categorias</h1  >


    <?php foreach($categorias as $categoria) : ?>
        <div class="item">
            <div class="content">
                 <a href="?acao=show&id=<?= $categoria->getId()?>">
                     <i class="chevron right icon"></i> <?= utf8_encode($categoria->getNome()) ?>
                </a>
            </div>
        </div>

    <?php endforeach; ?>



</div>
