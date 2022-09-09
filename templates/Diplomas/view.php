<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Diploma $diploma
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Diploma'), ['action' => 'edit', $diploma->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Diploma'), ['action' => 'delete', $diploma->id], ['confirm' => __('Are you sure you want to delete # {0}?', $diploma->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Diplomas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Diploma'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="diplomas view content">
            <h3><?= h($diploma->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Instituicao') ?></th>
                    <td><?= h($diploma->instituicao) ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso') ?></th>
                    <td><?= h($diploma->curso) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($diploma->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('CargaHoraria') ?></th>
                    <td><?= $this->Number->format($diploma->cargaHoraria) ?></td>
                </tr>
                <tr>
                    <th><?= __('DataFormatura') ?></th>
                    <td><?= h($diploma->dataFormatura) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
