<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Photo $photo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Photo'), ['action' => 'edit', $photo->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Photo'), ['action' => 'delete', $photo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photo->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="photos view large-9 medium-8 columns content">
    <h3><?= h($photo->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Merchant') ?></th>
            <td><?= $photo->has('merchant') ? $this->Html->link($photo->merchant->name, ['controller' => 'Merchants', 'action' => 'view', $photo->merchant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($photo->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img File') ?></th>
            <td><?= h($photo->img_file) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($photo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($photo->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($photo->modified) ?></td>
        </tr>
    </table>
</div>
