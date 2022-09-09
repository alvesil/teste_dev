<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Matricula $matricula
 * @var \Cake\Collection\CollectionInterface|string[] $alunos
 * @var \Cake\Collection\CollectionInterface|string[] $cursos
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Matriculas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="matriculas form content">
            <?= $this->Form->create($matricula) ?>
            <fieldset>
                <legend><?= __('Add Matricula') ?></legend>
                <label for="aluno"><?= __('Aluno') ?></label>
                <select id="aluno" name="aluno_id">
                    <?php 
                        foreach ($alunos as $key => $value) { ?>
                           <option value="<?= $value->id ?>"><?= $value->nome ?></option> 
                    <?php } ?>
                </select>
                <label for="curso"><?= __('Curso') ?></label>
                <select id="curso" name="curso_id">
                    <?php 
                        foreach ($cursos as $key => $value) { ?>
                           <option value="<?= $value->id ?>"><?= $value->disciplina ?></option> 
                    <?php } ?>
                </select>
            </fieldset>
            <?= $this->Form->button(__('Matricular')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
