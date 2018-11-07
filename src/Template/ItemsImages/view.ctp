<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemsImage $itemsImage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Items Image'), ['action' => 'edit', $itemsImage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Items Image'), ['action' => 'delete', $itemsImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsImage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Items Images'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Items Image'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="itemsImages view large-9 medium-8 columns content">
    <h3><?= h($itemsImage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $itemsImage->has('item') ? $this->Html->link($itemsImage->item->name, ['controller' => 'Items', 'action' => 'view', $itemsImage->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($itemsImage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Img Id') ?></th>
            <td><?= $this->Number->format($itemsImage->img_id) ?></td>
        </tr>
    </table>
</div>
