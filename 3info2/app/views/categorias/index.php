<html>
    <head>

    </head>
    <body>
    <div class="home">
        <h2>Listagem de Categorias</h2>

        <table>
            <thead>
                <th>#</th>
                <th>Nome</th>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria): ?>
                    <tr>
                        <td><?= $categoria->getId()?></td>
                        <td>
                            <a href="?action=show&id=<?= $categoria->getId() ?>">
                                <?= $categoria->getNome()?>
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    </body>
</html>