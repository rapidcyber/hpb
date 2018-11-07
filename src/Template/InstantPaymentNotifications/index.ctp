<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\InstantPaymentNotification[]|\Cake\Collection\CollectionInterface $instantPaymentNotifications
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Instant Payment Notification'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Paypal Items'), ['controller' => 'PaypalItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Paypal Item'), ['controller' => 'PaypalItems', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="instantPaymentNotifications index large-9 medium-8 columns content">
    <h3><?= __('Instant Payment Notifications') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('notify_version') ?></th>
                <th scope="col"><?= $this->Paginator->sort('verify_sign') ?></th>
                <th scope="col"><?= $this->Paginator->sort('test_ipn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_country_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_zip') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payer_business_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payer_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payer_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('contact_phone') ?></th>
                <th scope="col"><?= $this->Paginator->sort('residence_country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('business') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item_number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver_email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('receiver_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('custom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('invoice') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('option_name1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('option_name2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('option_selection1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('option_selection2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tax') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auth_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auth_exp') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auth_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auth_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('num_cart_items') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_txn_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_status') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pending_reason') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reason_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('remaining_settle') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping_method') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shipping') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_entity') ?></th>
                <th scope="col"><?= $this->Paginator->sort('txn_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('txn_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('exchange_rate') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_currency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_fee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_gross') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_handling') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_shipping') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_fee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_gross') ?></th>
                <th scope="col"><?= $this->Paginator->sort('settle_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('settle_currency') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auction_buyer_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auction_closing_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auction_multi_item') ?></th>
                <th scope="col"><?= $this->Paginator->sort('for_auction') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscr_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscr_effective') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('period3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('amount3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_amount1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_amount2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mc_amount3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recurring') ?></th>
                <th scope="col"><?= $this->Paginator->sort('reattempt') ?></th>
                <th scope="col"><?= $this->Paginator->sort('retry_at') ?></th>
                <th scope="col"><?= $this->Paginator->sort('recur_times') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('subscr_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('case_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('case_type') ?></th>
                <th scope="col"><?= $this->Paginator->sort('case_creation_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($instantPaymentNotifications as $instantPaymentNotification): ?>
            <tr>
                <td><?= h($instantPaymentNotification->id) ?></td>
                <td><?= h($instantPaymentNotification->notify_version) ?></td>
                <td><?= h($instantPaymentNotification->verify_sign) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->test_ipn) ?></td>
                <td><?= h($instantPaymentNotification->address_city) ?></td>
                <td><?= h($instantPaymentNotification->address_country) ?></td>
                <td><?= h($instantPaymentNotification->address_country_code) ?></td>
                <td><?= h($instantPaymentNotification->address_name) ?></td>
                <td><?= h($instantPaymentNotification->address_state) ?></td>
                <td><?= h($instantPaymentNotification->address_status) ?></td>
                <td><?= h($instantPaymentNotification->address_street) ?></td>
                <td><?= h($instantPaymentNotification->address_zip) ?></td>
                <td><?= h($instantPaymentNotification->first_name) ?></td>
                <td><?= h($instantPaymentNotification->last_name) ?></td>
                <td><?= h($instantPaymentNotification->payer_business_name) ?></td>
                <td><?= h($instantPaymentNotification->payer_email) ?></td>
                <td><?= h($instantPaymentNotification->payer_id) ?></td>
                <td><?= h($instantPaymentNotification->payer_status) ?></td>
                <td><?= h($instantPaymentNotification->contact_phone) ?></td>
                <td><?= h($instantPaymentNotification->residence_country) ?></td>
                <td><?= h($instantPaymentNotification->business) ?></td>
                <td><?= h($instantPaymentNotification->item_name) ?></td>
                <td><?= h($instantPaymentNotification->item_number) ?></td>
                <td><?= h($instantPaymentNotification->quantity) ?></td>
                <td><?= h($instantPaymentNotification->receiver_email) ?></td>
                <td><?= h($instantPaymentNotification->receiver_id) ?></td>
                <td><?= h($instantPaymentNotification->custom) ?></td>
                <td><?= h($instantPaymentNotification->invoice) ?></td>
                <td><?= h($instantPaymentNotification->memo) ?></td>
                <td><?= h($instantPaymentNotification->option_name1) ?></td>
                <td><?= h($instantPaymentNotification->option_name2) ?></td>
                <td><?= h($instantPaymentNotification->option_selection1) ?></td>
                <td><?= h($instantPaymentNotification->option_selection2) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->tax) ?></td>
                <td><?= h($instantPaymentNotification->auth_id) ?></td>
                <td><?= h($instantPaymentNotification->auth_exp) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->auth_amount) ?></td>
                <td><?= h($instantPaymentNotification->auth_status) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->num_cart_items) ?></td>
                <td><?= h($instantPaymentNotification->parent_txn_id) ?></td>
                <td><?= h($instantPaymentNotification->payment_date) ?></td>
                <td><?= h($instantPaymentNotification->payment_status) ?></td>
                <td><?= h($instantPaymentNotification->payment_type) ?></td>
                <td><?= h($instantPaymentNotification->pending_reason) ?></td>
                <td><?= h($instantPaymentNotification->reason_code) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->remaining_settle) ?></td>
                <td><?= h($instantPaymentNotification->shipping_method) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->shipping) ?></td>
                <td><?= h($instantPaymentNotification->transaction_entity) ?></td>
                <td><?= h($instantPaymentNotification->txn_id) ?></td>
                <td><?= h($instantPaymentNotification->txn_type) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->exchange_rate) ?></td>
                <td><?= h($instantPaymentNotification->mc_currency) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->mc_fee) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->mc_gross) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->mc_handling) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->mc_shipping) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->payment_fee) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->payment_gross) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->settle_amount) ?></td>
                <td><?= h($instantPaymentNotification->settle_currency) ?></td>
                <td><?= h($instantPaymentNotification->auction_buyer_id) ?></td>
                <td><?= h($instantPaymentNotification->auction_closing_date) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->auction_multi_item) ?></td>
                <td><?= h($instantPaymentNotification->for_auction) ?></td>
                <td><?= h($instantPaymentNotification->subscr_date) ?></td>
                <td><?= h($instantPaymentNotification->subscr_effective) ?></td>
                <td><?= h($instantPaymentNotification->period1) ?></td>
                <td><?= h($instantPaymentNotification->period2) ?></td>
                <td><?= h($instantPaymentNotification->period3) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->amount1) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->amount2) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->amount3) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->mc_amount1) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->mc_amount2) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->mc_amount3) ?></td>
                <td><?= h($instantPaymentNotification->recurring) ?></td>
                <td><?= h($instantPaymentNotification->reattempt) ?></td>
                <td><?= h($instantPaymentNotification->retry_at) ?></td>
                <td><?= $this->Number->format($instantPaymentNotification->recur_times) ?></td>
                <td><?= h($instantPaymentNotification->username) ?></td>
                <td><?= h($instantPaymentNotification->password) ?></td>
                <td><?= h($instantPaymentNotification->subscr_id) ?></td>
                <td><?= h($instantPaymentNotification->case_id) ?></td>
                <td><?= h($instantPaymentNotification->case_type) ?></td>
                <td><?= h($instantPaymentNotification->case_creation_date) ?></td>
                <td><?= h($instantPaymentNotification->created) ?></td>
                <td><?= h($instantPaymentNotification->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $instantPaymentNotification->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $instantPaymentNotification->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $instantPaymentNotification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $instantPaymentNotification->id)]) ?>
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
