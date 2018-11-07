<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemsSize[]|\Cake\Collection\CollectionInterface $itemsSizes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Items Size'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sizes'), ['controller' => 'Sizes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemsSizes index large-9 medium-8 columns content">
    <h3><?= __('Items Sizes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('size_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('stocks') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemsSizes as $itemsSize): ?>
            <tr>
                <td><?= $this->Number->format($itemsSize->id) ?></td>
                <td><?= $itemsSize->has('item') ? $this->Html->link($itemsSize->item->name, ['controller' => 'Items', 'action' => 'view', $itemsSize->item->id]) : '' ?></td>
                <td><?= $itemsSize->has('size') ? $this->Html->link($itemsSize->size->name, ['controller' => 'Sizes', 'action' => 'view', $itemsSize->size->id]) : '' ?></td>
                <td><?= $this->Number->format($itemsSize->stocks) ?></td>
                <td><?= h($itemsSize->created) ?></td>
                <td><?= h($itemsSize->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemsSize->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemsSize->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemsSize->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsSize->id)]) ?>
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
