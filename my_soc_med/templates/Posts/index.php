<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post[]|\Cake\Collection\CollectionInterface $posts
 */
?>
<div class="posts index content">
    <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Posts') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('ID') ?></th>
                    <th><?= $this->Paginator->sort('TITLE') ?></th>
                    <th><?= $this->Paginator->sort('USER_ID') ?></th>
                    <th><?= $this->Paginator->sort('CREATED') ?></th>
                    <th><?= $this->Paginator->sort('MODIFIED') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $this->Number->format($post->ID) ?></td>
                    <td><?= h($post->TITLE) ?></td>
                    <td><?= $this->Number->format($post->USER_ID) ?></td>
                    <td><?= h($post->CREATED) ?></td>
                    <td><?= h($post->MODIFIED) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $post->ID]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $post->ID]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $post->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $post->ID)]) ?>
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
