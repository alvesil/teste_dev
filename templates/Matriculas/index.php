<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula[]|\Cake\Collection\CollectionInterface $matriculas
 */
?>
<div class="matriculas index content">
    <?= $this->Html->link(__('Nova Matricula'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Matriculas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th>Matrícula</th>
                    <th><?= $this->Paginator->sort('aluno_id') ?></th>
                    <th><?= $this->Paginator->sort('curso_id') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($matriculas as $matricula): ?>
                <tr>
                    <td><?= $matricula->id ?></td>
                    <td><?= $matricula->aluno->nome ?></td>
                    <td><?= $matricula->curso->disciplina ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $matricula->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $matricula->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $matricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id)]) ?>
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
