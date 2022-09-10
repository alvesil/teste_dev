<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar'),
                ['action' => 'delete', $aluno->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('Listar Alunos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alunos form content">
            <?= $this->Form->create($aluno) ?>
            <fieldset>
                <legend><?= __('Edit Aluno') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('idade');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('email');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Gravar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
