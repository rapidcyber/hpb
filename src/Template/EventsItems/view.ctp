<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventsItem $eventsItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Events Item'), ['action' => 'edit', $eventsItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Events Item'), ['action' => 'delete', $eventsItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Events Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Events Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="eventsItems view large-9 medium-8 columns content">
    <h3><?= h($eventsItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Event') ?></th>
            <td><?= $eventsItem->has('event') ? $this->Html->link($eventsItem->event->name, ['controller' => 'Events', 'action' => 'view', $eventsItem->event->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item') ?></th>
            <td><?= $eventsItem->has('item') ? $this->Html->link($eventsItem->item->name, ['controller' => 'Items', 'action' => 'view', $eventsItem->item->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($eventsItem->id) ?></td>
        </tr>
    </table>
</div>
