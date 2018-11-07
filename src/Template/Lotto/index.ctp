<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotto[]|\Cake\Collection\CollectionInterface $lotto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Lotto'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="lotto index large-9 medium-8 columns content">
    <h3><?= __('Lotto') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('COMBINATIONS') ?></th>
                <th scope="col"><?= $this->Paginator->sort('DATE') ?></th>
                <th scope="col"><?= $this->Paginator->sort('JACKPOT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('WINNERS') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($lotto as $lotto): ?>
            <tr>
                <td><?= $this->Number->format($lotto->id) ?></td>
                <td><?= h($lotto->COMBINATIONS) ?></td>
                <td><?= h($lotto->DATE) ?></td>
                <td><?= $this->Number->format($lotto->JACKPOT) ?></td>
                <td><?= $this->Number->format($lotto->WINNERS) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $lotto->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lotto->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lotto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotto->id)]) ?>
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
