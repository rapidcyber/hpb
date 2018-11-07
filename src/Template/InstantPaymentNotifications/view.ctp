<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InstantPaymentNotification $instantPaymentNotification
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Instant Payment Notification'), ['action' => 'edit', $instantPaymentNotification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Instant Payment Notification'), ['action' => 'delete', $instantPaymentNotification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instantPaymentNotification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Instant Payment Notifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Instant Payment Notification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Paypal Items'), ['controller' => 'PaypalItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Paypal Item'), ['controller' => 'PaypalItems', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="instantPaymentNotifications view large-9 medium-8 columns content">
    <h3><?= h($instantPaymentNotification->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= h($instantPaymentNotification->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Notify Version') ?></th>
            <td><?= h($instantPaymentNotification->notify_version) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Verify Sign') ?></th>
            <td><?= h($instantPaymentNotification->verify_sign) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address City') ?></th>
            <td><?= h($instantPaymentNotification->address_city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Country') ?></th>
            <td><?= h($instantPaymentNotification->address_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Country Code') ?></th>
            <td><?= h($instantPaymentNotification->address_country_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Name') ?></th>
            <td><?= h($instantPaymentNotification->address_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address State') ?></th>
            <td><?= h($instantPaymentNotification->address_state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Status') ?></th>
            <td><?= h($instantPaymentNotification->address_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Street') ?></th>
            <td><?= h($instantPaymentNotification->address_street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Zip') ?></th>
            <td><?= h($instantPaymentNotification->address_zip) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($instantPaymentNotification->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($instantPaymentNotification->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payer Business Name') ?></th>
            <td><?= h($instantPaymentNotification->payer_business_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payer Email') ?></th>
            <td><?= h($instantPaymentNotification->payer_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payer Id') ?></th>
            <td><?= h($instantPaymentNotification->payer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payer Status') ?></th>
            <td><?= h($instantPaymentNotification->payer_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact Phone') ?></th>
            <td><?= h($instantPaymentNotification->contact_phone) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Residence Country') ?></th>
            <td><?= h($instantPaymentNotification->residence_country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Business') ?></th>
            <td><?= h($instantPaymentNotification->business) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Name') ?></th>
            <td><?= h($instantPaymentNotification->item_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Item Number') ?></th>
            <td><?= h($instantPaymentNotification->item_number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantity') ?></th>
            <td><?= h($instantPaymentNotification->quantity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receiver Email') ?></th>
            <td><?= h($instantPaymentNotification->receiver_email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Receiver Id') ?></th>
            <td><?= h($instantPaymentNotification->receiver_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Custom') ?></th>
            <td><?= h($instantPaymentNotification->custom) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Invoice') ?></th>
            <td><?= h($instantPaymentNotification->invoice) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Memo') ?></th>
            <td><?= h($instantPaymentNotification->memo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option Name1') ?></th>
            <td><?= h($instantPaymentNotification->option_name1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option Name2') ?></th>
            <td><?= h($instantPaymentNotification->option_name2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option Selection1') ?></th>
            <td><?= h($instantPaymentNotification->option_selection1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Option Selection2') ?></th>
            <td><?= h($instantPaymentNotification->option_selection2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auth Id') ?></th>
            <td><?= h($instantPaymentNotification->auth_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auth Exp') ?></th>
            <td><?= h($instantPaymentNotification->auth_exp) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auth Status') ?></th>
            <td><?= h($instantPaymentNotification->auth_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Txn Id') ?></th>
            <td><?= h($instantPaymentNotification->parent_txn_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Date') ?></th>
            <td><?= h($instantPaymentNotification->payment_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Status') ?></th>
            <td><?= h($instantPaymentNotification->payment_status) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Type') ?></th>
            <td><?= h($instantPaymentNotification->payment_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pending Reason') ?></th>
            <td><?= h($instantPaymentNotification->pending_reason) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reason Code') ?></th>
            <td><?= h($instantPaymentNotification->reason_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping Method') ?></th>
            <td><?= h($instantPaymentNotification->shipping_method) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction Entity') ?></th>
            <td><?= h($instantPaymentNotification->transaction_entity) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Txn Id') ?></th>
            <td><?= h($instantPaymentNotification->txn_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Txn Type') ?></th>
            <td><?= h($instantPaymentNotification->txn_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Currency') ?></th>
            <td><?= h($instantPaymentNotification->mc_currency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Settle Currency') ?></th>
            <td><?= h($instantPaymentNotification->settle_currency) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auction Buyer Id') ?></th>
            <td><?= h($instantPaymentNotification->auction_buyer_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auction Closing Date') ?></th>
            <td><?= h($instantPaymentNotification->auction_closing_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('For Auction') ?></th>
            <td><?= h($instantPaymentNotification->for_auction) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscr Date') ?></th>
            <td><?= h($instantPaymentNotification->subscr_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscr Effective') ?></th>
            <td><?= h($instantPaymentNotification->subscr_effective) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period1') ?></th>
            <td><?= h($instantPaymentNotification->period1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period2') ?></th>
            <td><?= h($instantPaymentNotification->period2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Period3') ?></th>
            <td><?= h($instantPaymentNotification->period3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recurring') ?></th>
            <td><?= h($instantPaymentNotification->recurring) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Reattempt') ?></th>
            <td><?= h($instantPaymentNotification->reattempt) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Retry At') ?></th>
            <td><?= h($instantPaymentNotification->retry_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($instantPaymentNotification->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($instantPaymentNotification->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Subscr Id') ?></th>
            <td><?= h($instantPaymentNotification->subscr_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Case Id') ?></th>
            <td><?= h($instantPaymentNotification->case_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Case Type') ?></th>
            <td><?= h($instantPaymentNotification->case_type) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Case Creation Date') ?></th>
            <td><?= h($instantPaymentNotification->case_creation_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Test Ipn') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->test_ipn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tax') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->tax) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auth Amount') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->auth_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Num Cart Items') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->num_cart_items) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remaining Settle') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->remaining_settle) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Shipping') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->shipping) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Exchange Rate') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->exchange_rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Fee') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->mc_fee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Gross') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->mc_gross) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Handling') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->mc_handling) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Shipping') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->mc_shipping) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Fee') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->payment_fee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Gross') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->payment_gross) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Settle Amount') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->settle_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auction Multi Item') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->auction_multi_item) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount1') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->amount1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount2') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->amount2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Amount3') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->amount3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Amount1') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->mc_amount1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Amount2') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->mc_amount2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mc Amount3') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->mc_amount3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Recur Times') ?></th>
            <td><?= $this->Number->format($instantPaymentNotification->recur_times) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($instantPaymentNotification->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($instantPaymentNotification->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Paypal Items') ?></h4>
        <?php if (!empty($instantPaymentNotification->paypal_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Instant Payment Notification Id') ?></th>
                <th scope="col"><?= __('Item Name') ?></th>
                <th scope="col"><?= __('Item Number') ?></th>
                <th scope="col"><?= __('Quantity') ?></th>
                <th scope="col"><?= __('Mc Gross') ?></th>
                <th scope="col"><?= __('Mc Shipping') ?></th>
                <th scope="col"><?= __('Mc Handling') ?></th>
                <th scope="col"><?= __('Tax') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($instantPaymentNotification->paypal_items as $paypalItems): ?>
            <tr>
                <td><?= h($paypalItems->id) ?></td>
                <td><?= h($paypalItems->instant_payment_notification_id) ?></td>
                <td><?= h($paypalItems->item_name) ?></td>
                <td><?= h($paypalItems->item_number) ?></td>
                <td><?= h($paypalItems->quantity) ?></td>
                <td><?= h($paypalItems->mc_gross) ?></td>
                <td><?= h($paypalItems->mc_shipping) ?></td>
                <td><?= h($paypalItems->mc_handling) ?></td>
                <td><?= h($paypalItems->tax) ?></td>
                <td><?= h($paypalItems->created) ?></td>
                <td><?= h($paypalItems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'PaypalItems', 'action' => 'view', $paypalItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'PaypalItems', 'action' => 'edit', $paypalItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'PaypalItems', 'action' => 'delete', $paypalItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $paypalItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
