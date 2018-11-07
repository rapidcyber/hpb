<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PaypalItem $paypalItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Paypal Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Instant Payment Notifications'), ['controller' => 'InstantPaymentNotifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Instant Payment Notification'), ['controller' => 'InstantPaymentNotifications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="paypalItems form large-9 medium-8 columns content">
    <?= $this->Form->create($paypalItem) ?>
    <fieldset>
        <legend><?= __('Add Paypal Item') ?></legend>
        <?php
            echo $this->Form->control('instant_payment_notification_id', ['options' => $instantPaymentNotifications]);
            echo $this->Form->control('item_name');
            echo $this->Form->control('item_number');
            echo $this->Form->control('quantity');
            echo $this->Form->control('mc_gross');
            echo $this->Form->control('mc_shipping');
            echo $this->Form->control('mc_handling');
            echo $this->Form->control('tax');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
