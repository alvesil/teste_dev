<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula $matricula
 * @var string[]|\Cake\Collection\CollectionInterface $alunos
 * @var string[]|\Cake\Collection\CollectionInterface $cursos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $matricula->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $matricula->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Matriculas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="matriculas form content">
            <?= $this->Form->create($matricula) ?>
            <fieldset>
                <legend><?= __('Editar Matricula') ?></legend>
                <?php
                    echo $this->Form->control('aluno_id');
                    echo $this->Form->control('curso_id');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Gravar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
