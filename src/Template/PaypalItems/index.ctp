<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaypalItem[]|\Cake\Collection\CollectionInterface $paypalItems
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Paypal Item'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Instant Payment Notifications'), ['controller' => 'InstantPaymentNotifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instant Payment Notification'), ['controller' => 'InstantPaymentNotifications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paypalItems index large-9 medium-8 columns content">
    <h3><?= __('Paypal Items') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('instant_payment_notification_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_gross') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_shipping') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_handling') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($paypalItems as $paypalItem): ?>
            <tr>
                <td><?= h($paypalItem->id) ?></td>
                <td><?= $paypalItem->has('instant_payment_notification') ? $this->Html->link($paypalItem->instant_payment_notification->id, ['controller' => 'InstantPaymentNotifications', 'action' => 'view', $paypalItem->instant_payment_notification->id]) : '' ?></td>
                <td><?= h($paypalItem->item_name) ?></td>
                <td><?= h($paypalItem->item_number) ?></td>
                <td><?= h($paypalItem->quantity) ?></td>
                <td><?= $this->Number->format($paypalItem->mc_gross) ?></td>
                <td><?= $this->Number->format($paypalItem->mc_shipping) ?></td>
                <td><?= $this->Number->format($paypalItem->mc_handling) ?></td>
                <td><?= $this->Number->format($paypalItem->tax) ?></td>
                <td><?= h($paypalItem->created) ?></td>
                <td><?= h($paypalItem->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $paypalItem->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $paypalItem->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $paypalItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paypalItem->id)]) ?>
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
