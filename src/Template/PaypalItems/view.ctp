<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaypalItem $paypalItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Paypal Item'), ['action' => 'edit', $paypalItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Paypal Item'), ['action' => 'delete', $paypalItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paypalItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Paypal Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paypal Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Instant Payment Notifications'), ['controller' => 'InstantPaymentNotifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instant Payment Notification'), ['controller' => 'InstantPaymentNotifications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="paypalItems view large-9 medium-8 columns content">
    <h3><?= h($paypalItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($paypalItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Instant Payment Notification') ?></th>
            <td><?= $paypalItem->has('instant_payment_notification') ? $this->Html->link($paypalItem->instant_payment_notification->id, ['controller' => 'InstantPaymentNotifications', 'action' => 'view', $paypalItem->instant_payment_notification->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Name') ?></th>
            <td><?= h($paypalItem->item_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Number') ?></th>
            <td><?= h($paypalItem->item_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= h($paypalItem->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Gross') ?></th>
            <td><?= $this->Number->format($paypalItem->mc_gross) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Shipping') ?></th>
            <td><?= $this->Number->format($paypalItem->mc_shipping) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Handling') ?></th>
            <td><?= $this->Number->format($paypalItem->mc_handling) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax') ?></th>
            <td><?= $this->Number->format($paypalItem->tax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($paypalItem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($paypalItem->modified) ?></td>
        </tr>
    </table>
</div>
