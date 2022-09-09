<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno[]|\Cake\Collection\CollectionInterface $alunos
 */
?>
<div class="alunos index content">
    <?= $this->Html->link(__('Novo Aluno'), ['action' => 'add'], ['class' => 'button float-right', 'style' => 'margin-left: 5px;']) ?>
    <?= $this->Html->link(__('Matriculas'), ['controller' => 'Matriculas', 'action' => 'index'], ['class' => 'button float-right']) ?>
    <h3><?= __('Alunos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('idade') ?></th>
                    <th><?= $this->Paginator->sort('sexo') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($alunos as $aluno) : ?>
                    <tr>
                        <td><?= h($aluno->nome) ?></td>
                        <td><?= $this->Number->format($aluno->idade) ?></td>
                        <td><?= h($aluno->sexo) ?></td>
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