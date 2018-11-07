<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InstantPaymentNotification $instantPaymentNotification
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Instant Payment Notifications'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Paypal Items'), ['controller' => 'PaypalItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paypal Item'), ['controller' => 'PaypalItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instantPaymentNotifications form large-9 medium-8 columns content">
    <?= $this->Form->create($instantPaymentNotification) ?>
    <fieldset>
        <legend><?= __('Add Instant Payment Notification') ?></legend>
        <?php
            echo $this->Form->control('notify_version');
            echo $this->Form->control('verify_sign');
            echo $this->Form->control('test_ipn');
            echo $this->Form->control('address_city');
            echo $this->Form->control('address_country');
            echo $this->Form->control('address_country_code');
            echo $this->Form->control('address_name');
            echo $this->Form->control('address_state');
            echo $this->Form->control('address_status');
            echo $this->Form->control('address_street');
            echo $this->Form->control('address_zip');
            echo $this->Form->control('first_name');
            echo $this->Form->control('last_name');
            echo $this->Form->control('payer_business_name');
            echo $this->Form->control('payer_email');
            echo $this->Form->control('payer_id');
            echo $this->Form->control('payer_status');
            echo $this->Form->control('contact_phone');
            echo $this->Form->control('residence_country');
            echo $this->Form->control('business');
            echo $this->Form->control('item_name');
            echo $this->Form->control('item_number');
            echo $this->Form->control('quantity');
            echo $this->Form->control('receiver_email');
            echo $this->Form->control('receiver_id');
            echo $this->Form->control('custom');
            echo $this->Form->control('invoice');
            echo $this->Form->control('memo');
            echo $this->Form->control('option_name1');
            echo $this->Form->control('option_name2');
            echo $this->Form->control('option_selection1');
            echo $this->Form->control('option_selection2');
            echo $this->Form->control('tax');
            echo $this->Form->control('auth_id');
            echo $this->Form->control('auth_exp');
            echo $this->Form->control('auth_amount');
            echo $this->Form->control('auth_status');
            echo $this->Form->control('num_cart_items');
            echo $this->Form->control('parent_txn_id');
            echo $this->Form->control('payment_date');
            echo $this->Form->control('payment_status');
            echo $this->Form->control('payment_type');
            echo $this->Form->control('pending_reason');
            echo $this->Form->control('reason_code');
            echo $this->Form->control('remaining_settle');
            echo $this->Form->control('shipping_method');
            echo $this->Form->control('shipping');
            echo $this->Form->control('transaction_entity');
            echo $this->Form->control('txn_id');
            echo $this->Form->control('txn_type');
            echo $this->Form->control('exchange_rate');
            echo $this->Form->control('mc_currency');
            echo $this->Form->control('mc_fee');
            echo $this->Form->control('mc_gross');
            echo $this->Form->control('mc_handling');
            echo $this->Form->control('mc_shipping');
            echo $this->Form->control('payment_fee');
            echo $this->Form->control('payment_gross');
            echo $this->Form->control('settle_amount');
            echo $this->Form->control('settle_currency');
            echo $this->Form->control('auction_buyer_id');
            echo $this->Form->control('auction_closing_date');
            echo $this->Form->control('auction_multi_item');
            echo $this->Form->control('for_auction');
            echo $this->Form->control('subscr_date');
            echo $this->Form->control('subscr_effective');
            echo $this->Form->control('period1');
            echo $this->Form->control('period2');
            echo $this->Form->control('period3');
            echo $this->Form->control('amount1');
            echo $this->Form->control('amount2');
            echo $this->Form->control('amount3');
            echo $this->Form->control('mc_amount1');
            echo $this->Form->control('mc_amount2');
            echo $this->Form->control('mc_amount3');
            echo $this->Form->control('recurring');
            echo $this->Form->control('reattempt');
            echo $this->Form->control('retry_at');
            echo $this->Form->control('recur_times');
            echo $this->Form->control('username');
            echo $this->Form->control('password');
            echo $this->Form->control('subscr_id');
            echo $this->Form->control('case_id');
            echo $this->Form->control('case_type');
            echo $this->Form->control('case_creation_date');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
