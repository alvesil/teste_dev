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
            <?= $this->Html->link(__('List Professores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="professores form content">
            <?= $this->Form->create($professore) ?>
            <fieldset>
                <legend><?= __('Add Professore') ?></legend>
                <select name="id_diplomas">
                    <?php 
                        foreach ($Diplomas as $value) {
                            echo
                            '
                                <option value="'.$value->id.'">'.$value->instituicao.'</option>
                            ';
                        }
                    ?>
                </select>
                <?php
                    // echo $this->Form->control('id_diplomas');
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
