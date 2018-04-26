
<table>
<head>
    <tr>
        <th>Id</th>
        <th>Nome</th>
    </tr>
</head>
<tbody
    <?php foreach ($produtos as $produto) : ?>
        <tr>
            <td><?= $produto->getId(); ?></td>
            <td><a href="produto.php?acao=show&id=<?= $produto->getId(); ?>"><?= $produto->getNome(); ?></a></td>
        </tr>

<?php endforeach; ?>
    </tbody>
</table>

