<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventsItem[]|\Cake\Collection\CollectionInterface $eventsItems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Events Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventsItems index large-9 medium-8 columns content">
    <h3><?= __('Events Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('event_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($eventsItems as $eventsItem): ?>
            <tr>
                <td><?= $this->Number->format($eventsItem->id) ?></td>
                <td><?= $eventsItem->has('event') ? $this->Html->link($eventsItem->event->name, ['controller' => 'Events', 'action' => 'view', $eventsItem->event->id]) : '' ?></td>
                <td><?= $eventsItem->has('item') ? $this->Html->link($eventsItem->item->name, ['controller' => 'Items', 'action' => 'view', $eventsItem->item->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $eventsItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $eventsItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $eventsItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $eventsItem->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
