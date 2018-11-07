<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Theme $theme
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Theme'), ['action' => 'edit', $theme->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Theme'), ['action' => 'delete', $theme->id], ['confirm' => __('Are you sure you want to delete # {0}?', $theme->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Themes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Theme'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="themes view large-9 medium-8 columns content">
    <h3><?= h($theme->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($theme->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Filename') ?></th>
            <td><?= h($theme->filename) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $theme->has('type') ? $this->Html->link($theme->type->name, ['controller' => 'Types', 'action' => 'view', $theme->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($theme->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($theme->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($theme->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Merchants') ?></h4>
        <?php if (!empty($theme->merchants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Type Id') ?></th>
                <th scope="col"><?= __('Theme Id') ?></th>
                <th scope="col"><?= __('Photo') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('About') ?></th>
                <th scope="col"><?= __('Interests') ?></th>
                <th scope="col"><?= __('Likes') ?></th>
                <th scope="col"><?= __('Contact') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($theme->merchants as $merchants): ?>
            <tr>
                <td><?= h($merchants->id) ?></td>
                <td><?= h($merchants->user_id) ?></td>
                <td><?= h($merchants->type_id) ?></td>
                <td><?= h($merchants->theme_id) ?></td>
                <td><?= h($merchants->photo) ?></td>
                <td><?= h($merchants->name) ?></td>
                <td><?= h($merchants->about) ?></td>
                <td><?= h($merchants->interests) ?></td>
                <td><?= h($merchants->likes) ?></td>
                <td><?= h($merchants->contact) ?></td>
                <td><?= h($merchants->created) ?></td>
                <td><?= h($merchants->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Merchants', 'action' => 'view', $merchants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Merchants', 'action' => 'edit', $merchants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Merchants', 'action' => 'delete', $merchants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
