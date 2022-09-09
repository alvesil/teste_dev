<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Curso $curso
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Curso'), ['action' => 'edit', $curso->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Curso'), ['action' => 'delete', $curso->id], ['confirm' => __('Are you sure you want to delete # {0}?', $curso->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Curso'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursos view content">
            <h3><?= h($curso->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($curso->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($curso->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Alunos') ?></th>
                    <td><?= $this->Number->format($curso->id_alunos) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Professores') ?></th>
                    <td><?= $this->Number->format($curso->id_professores) ?></td>
                </tr>
                <tr>
                    <th><?= __('CargaHoraria') ?></th>
                    <td><?= $this->Number->format($curso->cargaHoraria) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($curso->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($curso->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
