<?php

use Cake\Routing\Router;

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>
<style>
    .pesquisa {
        width: 50%;
    }

    .inline {
        display: inline;
    }
</style>
<div class="alunos index content">
    <?= $this->Html->link(__('Novo Aluno'), ['action' => 'add'], ['class' => 'button float-right', 'style' => 'margin-left: 5px;']) ?>
    <?= $this->Html->link(__('Matriculas'), ['controller' => 'Matriculas', 'action' => 'index'], ['class' => 'button float-right']) ?>
    <h3 class="pesquisa"><?= __('Alunos') ?></h3>
    <?= $this->Form->create() ?>

    <?= $this->Form->end() ?> <div class="table-responsive">
        <div class="pesquisa">
            <input id="pesquisa" type="text" class="form-control inline" placeholder="Pesquisar">
            <button id="btn-pesquisa" class="inline">Pesquisar</button>
        </div>
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('idade') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno) : ?>
                    <tr>
                        <td><?= h($aluno->nome) ?></td>
                        <td><?= $this->Number->format($aluno->idade) ?></td>
                        <td><?= h($aluno->sexo) ?></td>
                        <td><?= h($aluno->email) ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $aluno->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $aluno->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')) ?></p>
    </div>
</div>
<?= $this->Html->script('jquery.js'); ?>
<script>
    $(document).ready(function() {
        $('#btn-pesquisa').on('click', function() {
            // console.log($(this).val());
            var uri = '<?= $this->Url->build(['controller' => 'Alunos', 'action' => 'getAlunos']) ?>';
            var pesquisa = $('#pesquisa').val();
            var csrfToken = $('[name="_csrfToken"]').val();
            $.ajax({
                headers: {
                    'X-CSRF-Token': csrfToken
                },
                method: "POST",
                url: uri,
                data: {
                    p: pesquisa
                },
                dataType: 'json',
                success: function(result) {
                    if (result.length > 0) {
                        $('.paginator').hide();
                        console.log(result);
                        result.forEach(element => {
                            $('tbody').html(
                                '<tr>' +
                                '<td>' + element.nome + '</td>' +
                                '<td>' + element.idade + '</td>' +
                                '<td>' + element.sexo + '</td>' +
                                '<td>' + element.email + '</td>' +
                                '<td class="actions">' +
                                '<a href="alunos/view/' + element.id + '">Detalhes</a>' +
                                '</td>' +
                                '</tr>'
                            );
                        });
                    }else{
                        alert("Nenhum registro encontrado para a pesquisa");
                    }
                }
            });
        });
    });
</script>