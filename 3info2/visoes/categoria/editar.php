

<h1 style="text-align: center;">Editar Categoria</h1>

    <form action="categorias.php?acao=editar" method="POST">

        <div style="margin-left: 25%; margin-right: 25%">
            <div class="ui  form">
                    <div class="field">
                        <input  type="hidden" name="id" value="<?= utf8_encode($categoria->getId()) ?>">
                        <label>Nome da Categoria</label>
                        <input placeholder="Nome" type="text" name="nome" value="<?= utf8_encode($categoria->getNome()) ?>">
                    </div>
                    <div class="field">
                        <label>Descrição da Categoria</label>
                        <textarea name="descricao" id="descricao" cols="30" rows="10"placeholder="Descrição..."><?= utf8_encode($categoria->getDescricao()) ?> </textarea>
                    </div>

                <button class="ui submit button" type="submit" name="gravar" value="Gravar" style="float: right;">Gravar</button>
            </div>
        </div>
    </form>
