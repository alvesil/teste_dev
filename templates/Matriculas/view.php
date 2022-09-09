<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula $matricula
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Matricula'), ['action' => 'edit', $matricula->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Matricula'), ['action' => 'delete', $matricula->id], ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Matriculas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Nova Matricula'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="matriculas view content">
            <h3><?= h($matricula->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($matricula->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Aluno Id') ?></th>
                    <td><?= $matricula->aluno->nome ?></td>
                </tr>
                <tr>
                    <th><?= __('Curso Id') ?></th>
                    <td><?= $matricula->curso->disciplina ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($matricula->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($matricula->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
