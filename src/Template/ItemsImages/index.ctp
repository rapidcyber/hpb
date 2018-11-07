<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemsImage[]|\Cake\Collection\CollectionInterface $itemsImages
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Items Image'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemsImages index large-9 medium-8 columns content">
    <h3><?= __('Items Images') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('img_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($itemsImages as $itemsImage): ?>
            <tr>
                <td><?= $this->Number->format($itemsImage->id) ?></td>
                <td><?= $this->Number->format($itemsImage->img_id) ?></td>
                <td><?= $itemsImage->has('item') ? $this->Html->link($itemsImage->item->name, ['controller' => 'Items', 'action' => 'view', $itemsImage->item->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $itemsImage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $itemsImage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $itemsImage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $itemsImage->id)]) ?>
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
