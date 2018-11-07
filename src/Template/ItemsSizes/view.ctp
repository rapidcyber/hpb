<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemsSize $itemsSize
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Items Size'), ['action' => 'edit', $itemsSize->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Items Size'), ['action' => 'delete', $itemsSize->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsSize->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items Sizes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Items Size'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Sizes'), ['controller' => 'Sizes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemsSizes view large-9 medium-8 columns content">
    <h3><?= h($itemsSize->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $itemsSize->has('item') ? $this->Html->link($itemsSize->item->name, ['controller' => 'Items', 'action' => 'view', $itemsSize->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Size') ?></th>
            <td><?= $itemsSize->has('size') ? $this->Html->link($itemsSize->size->name, ['controller' => 'Sizes', 'action' => 'view', $itemsSize->size->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemsSize->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Stocks') ?></th>
            <td><?= $this->Number->format($itemsSize->stocks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($itemsSize->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($itemsSize->modified) ?></td>
        </tr>
    </table>
</div>
