<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<style>
    .m-2 {
        margin-left: 5px;
    }
</style>
<div class="users index content">
    <?= $this->Html->link(__('Matricular Aluno'), ['controller' => 'Matriculas', 'action' => 'add'], ['class' => 'button float-right m-2']) ?>
    <?= $this->Html->link(__('Novo Usuário'), ['action' => 'add'], ['class' => 'button float-right m-2']) ?>
    <?= $this->Html->link(__('Listar Alunos'), ['controller' => 'Alunos', 'action' => 'index'], ['class' => 'button float-right m-2']) ?>
    <?= $this->Html->link(__('Listar Cursos'), ['controller' => 'Cursos', 'action' => 'index'], ['class' => 'button float-right m-2']) ?>
    <h3><?= __('Usuários do Sistema') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('username') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('roles_id') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user) : ?>
                    <tr>
                        <td><?= h($user->nome) ?></td>
                        <td><?= h($user->username) ?></td>
                        <td><?= h($user->email) ?></td>
                        <td><?= $user->has('role') ? $this->Html->link($user->role->role, ['controller' => 'Roles', 'action' => 'view', $user->role->id]) : '' ?></td>
                        <td class="actions">
                            <?= $this->Html->link(__('Detalhes'), ['action' => 'view', $user->id]) ?>
                            <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id]) ?>
                            <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primero')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('próximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) de {{count}}')) ?></p>
    </div>
</div>