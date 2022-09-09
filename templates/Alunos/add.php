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
            <?= $this->Html->link(__('Listar Alunos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alunos form content">
            <?= $this->Form->create($aluno) ?>
            <fieldset>
                <legend><?= __('Adicionar Aluno') ?></legend>
                <?php
                    echo $this->Form->control('nome');
                    echo $this->Form->control('idade');
                    echo $this->Form->control('sexo');
                    echo $this->Form->control('email');
                    echo $this->Form->control('endereco');
                    echo $this->Form->control('nomePai');
                    echo $this->Form->control('nomeMae');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Gravar')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
