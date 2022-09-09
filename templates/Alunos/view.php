<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Editar Aluno'), ['action' => 'edit', $aluno->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Aluno'), ['action' => 'delete', $aluno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Alunos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Novo Aluno'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="alunos view content">
            <h3><?= h($aluno->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Cursos') ?></th>
                    <td>
                        <ol>
                            <?php
                            foreach ($aluno->cursos as $curso) {
                                echo '<li>'.$curso->disciplina.'</li>';
                            }
                            ?>
                        </ol>
                    </td>
                </tr>
                <tr>
                    <th><?= __('Nome') ?></th>
                    <td><?= h($aluno->nome) ?></td>
                </tr>
                <tr>
                    <th><?= __('Sexo') ?></th>
                    <td><?= h($aluno->sexo) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($aluno->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('Endereco') ?></th>
                    <td><?= h($aluno->endereco) ?></td>
                </tr>
                <tr>
                    <th><?= __('NomePai') ?></th>
                    <td><?= h($aluno->nomePai) ?></td>
                </tr>
                <tr>
                    <th><?= __('NomeMae') ?></th>
                    <td><?= h($aluno->nomeMae) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($aluno->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Idade') ?></th>
                    <td><?= $this->Number->format($aluno->idade) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($aluno->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Modified') ?></th>
                    <td><?= h($aluno->modified) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>