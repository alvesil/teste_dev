<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diploma[]|\Cake\Collection\CollectionInterface $diplomas
 */
?>
<div class="diplomas index content">
    <?= $this->Html->link(__('New Diploma'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Diplomas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('instituicao') ?></th>
                    <th><?= $this->Paginator->sort('dataFormatura') ?></th>
                    <th><?= $this->Paginator->sort('curso') ?></th>
                    <th><?= $this->Paginator->sort('cargaHoraria') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($diplomas as $diploma): ?>
                <tr>
                    <td><?= $this->Number->format($diploma->id) ?></td>
                    <td><?= h($diploma->instituicao) ?></td>
                    <td><?= h($diploma->dataFormatura) ?></td>
                    <td><?= h($diploma->curso) ?></td>
                    <td><?= $this->Number->format($diploma->cargaHoraria) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $diploma->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $diploma->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $diploma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diploma->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
