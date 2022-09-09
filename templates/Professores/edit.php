<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Professore $professore
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $professore->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $professore->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Professores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="professores form content">
            <?= $this->Form->create($professore) ?>
            <fieldset>
                <legend><?= __('Edit Professore') ?></legend>
                <?php
                    echo $this->Form->control('id_diplomas');
                    echo $this->Form->control('idade');
                    echo $this->Form->control('cpf');
                    echo $this->Form->control('endereco');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
