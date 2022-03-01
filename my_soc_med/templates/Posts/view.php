<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Post'), ['action' => 'edit', $post->ID], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Post'), ['action' => 'delete', $post->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $post->ID), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Posts'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="posts view content">
            <h3><?= h($post->ID) ?></h3>
            <table>
                <tr>
                    <th><?= __('TITLE') ?></th>
                    <td><?= h($post->TITLE) ?></td>
                </tr>
                <tr>
                    <th><?= __('ID') ?></th>
                    <td><?= $this->Number->format($post->ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('USER ID') ?></th>
                    <td><?= $this->Number->format($post->USER_ID) ?></td>
                </tr>
                <tr>
                    <th><?= __('CREATED') ?></th>
                    <td><?= h($post->CREATED) ?></td>
                </tr>
                <tr>
                    <th><?= __('MODIFIED') ?></th>
                    <td><?= h($post->MODIFIED) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('BODY') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($post->BODY)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
