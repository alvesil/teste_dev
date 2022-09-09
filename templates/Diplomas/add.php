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
            <?= $this->Html->link(__('List Diplomas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="diplomas form content">
            <?= $this->Form->create($diploma) ?>
            <fieldset>
                <legend><?= __('Add Diploma') ?></legend>
                <?php
                    echo $this->Form->control('instituicao');
                    echo $this->Form->control('dataFormatura');
                    echo $this->Form->control('curso');
                    echo $this->Form->control('cargaHoraria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
