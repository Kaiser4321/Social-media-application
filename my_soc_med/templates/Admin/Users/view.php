<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $user->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users view content">
            <h3><?= h($user->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('USERNAME') ?></th>
                    <td><?= h($user->USERNAME) ?></td>
                </tr>
                <tr>
                    <th><?= __('PASSWORD') ?></th>
                    <td><?= h($user->PASSWORD) ?></td>
                </tr>
                <tr>
                    <th><?= __('EMAIL') ?></th>
                    <td><?= h($user->EMAIL) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($user->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CREATED') ?></th>
                    <td><?= h($user->CREATED) ?></td>
                </tr>
                <tr>
                    <th><?= __('MODIFIED') ?></th>
                    <td><?= h($user->MODIFIED) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
