<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="users index content">
    <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('USERNAME') ?></th>
                    <th><?= $this->Paginator->sort('PASSWORD') ?></th>
                    <th><?= $this->Paginator->sort('EMAIL') ?></th>
                    <th><?= $this->Paginator->sort('CREATED') ?></th>
                    <th><?= $this->Paginator->sort('MODIFIED') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= $this->Number->format($user->ID) ?></td>
                    <td><?= h($user->USERNAME) ?></td>
                    <td><?= h($user->PASSWORD) ?></td>
                    <td><?= h($user->EMAIL) ?></td>
                    <td><?= h($user->CREATED) ?></td>
                    <td><?= h($user->MODIFIED) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $user->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $user->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
