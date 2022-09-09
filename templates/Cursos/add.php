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
            <?= $this->Html->link(__('List Cursos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="cursos form content">
            <?= $this->Form->create($curso) ?>
            <fieldset>
                <legend><?= __('Add Curso') ?></legend>
                Alunos
                <select name="id_alunos" multiple>
                    <?php 
                        foreach ($Alunos as $value) {
                            echo
                            '
                                <option value="'.$value->id.'">'.$value->nome.'</option>
                            ';
                        }
                    ?>
                </select>
                Professores
                <select name="id_professores" multiple>
                    <?php 
                        foreach ($Professores as $value) {
                            echo
                            '
                                <option value="'.$value->id.'">'.$value->cpf.'</option>
                            ';
                        }
                    ?>
                </select>
                <?php
                    // echo $this->Form->control('id_professores');
                    echo $this->Form->control('nome');
                    echo $this->Form->control('cargaHoraria');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
<?php echo $this->Html->script('jquery'); ?>
