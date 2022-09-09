<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso[]|\Cake\Collection\CollectionInterface $cursos
 */
?>
<div class="cursos index content">
    <?= $this->Html->link(__('Novo Curso'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Cursos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <!-- <th><?= $this->Paginator->sort('alunos_id') ?></th> -->
                    <th><?= $this->Paginator->sort('disciplina') ?></th>
                    <th><?= $this->Paginator->sort('carga_horaria') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($cursos as $curso): ?>
                <tr>
                    <!-- <td><?= $curso->alunos_id === null ? '' : $this->Number->format($curso->alunos_id) ?></td> -->
                    <td><?= h($curso->disciplina) ?></td>
                    <td><?= $this->Number->format($curso->carga_horaria) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $curso->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $curso->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id)]) ?>
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
