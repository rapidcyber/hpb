<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * InstantPaymentNotification Entity
 *
 * @property string $id
 * @property string $notify_version
 * @property string $verify_sign
 * @property int $test_ipn
 * @property string $address_city
 * @property string $address_country
 * @property string $address_country_code
 * @property string $address_name
 * @property string $address_state
 * @property string $address_status
 * @property string $address_street
 * @property string $address_zip
 * @property string $first_name
 * @property string $last_name
 * @property string $payer_business_name
 * @property string $payer_email
 * @property string $payer_id
 * @property string $payer_status
 * @property string $contact_phone
 * @property string $residence_country
 * @property string $business
 * @property string $item_name
 * @property string $item_number
 * @property string $quantity
 * @property string $receiver_email
 * @property string $receiver_id
 * @property string $custom
 * @property string $invoice
 * @property string $memo
 * @property string $option_name1
 * @property string $option_name2
 * @property string $option_selection1
 * @property string $option_selection2
 * @property float $tax
 * @property string $auth_id
 * @property string $auth_exp
 * @property int $auth_amount
 * @property string $auth_status
 * @property int $num_cart_items
 * @property string $parent_txn_id
 * @property string $payment_date
 * @property string $payment_status
 * @property string $payment_type
 * @property string $pending_reason
 * @property string $reason_code
 * @property int $remaining_settle
 * @property string $shipping_method
 * @property float $shipping
 * @property string $transaction_entity
 * @property string $txn_id
 * @property string $txn_type
 * @property float $exchange_rate
 * @property string $mc_currency
 * @property float $mc_fee
 * @property float $mc_gross
 * @property float $mc_handling
 * @property float $mc_shipping
 * @property float $payment_fee
 * @property float $payment_gross
 * @property float $settle_amount
 * @property string $settle_currency
 * @property string $auction_buyer_id
 * @property string $auction_closing_date
 * @property int $auction_multi_item
 * @property string $for_auction
 * @property string $subscr_date
 * @property string $subscr_effective
 * @property string $period1
 * @property string $period2
 * @property string $period3
 * @property float $amount1
 * @property float $amount2
 * @property float $amount3
 * @property float $mc_amount1
 * @property float $mc_amount2
 * @property float $mc_amount3
 * @property string $recurring
 * @property string $reattempt
 * @property string $retry_at
 * @property int $recur_times
 * @property string $username
 * @property string $password
 * @property string $subscr_id
 * @property string $case_id
 * @property string $case_type
 * @property string $case_creation_date
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Payer $payer
 * @property \App\Model\Entity\Receiver $receiver
 * @property \App\Model\Entity\Auth $auth
 * @property \App\Model\Entity\ParentTxn $parent_txn
 * @property \App\Model\Entity\Txn $txn
 * @property \App\Model\Entity\AuctionBuyer $auction_buyer
 * @property \App\Model\Entity\Subscr $subscr
 * @property \App\Model\Entity\Case $case
 * @property \App\Model\Entity\PaypalItem[] $paypal_items
 */
class InstantPaymentNotification extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'notify_version' => true,
        'verify_sign' => true,
        'test_ipn' => true,
        'address_city' => true,
        'address_country' => true,
        'address_country_code' => true,
        'address_name' => true,
        'address_state' => true,
        'address_status' => true,
        'address_street' => true,
        'address_zip' => true,
        'first_name' => true,
        'last_name' => true,
        'payer_business_name' => true,
        'payer_email' => true,
        'payer_id' => true,
        'payer_status' => true,
        'contact_phone' => true,
        'residence_country' => true,
        'business' => true,
        'item_name' => true,
        'item_number' => true,
        'quantity' => true,
        'receiver_email' => true,
        'receiver_id' => true,
        'custom' => true,
        'invoice' => true,
        'memo' => true,
        'option_name1' => true,
        'option_name2' => true,
        'option_selection1' => true,
        'option_selection2' => true,
        'tax' => true,
        'auth_id' => true,
        'auth_exp' => true,
        'auth_amount' => true,
        'auth_status' => true,
        'num_cart_items' => true,
        'parent_txn_id' => true,
        'payment_date' => true,
        'payment_status' => true,
        'payment_type' => true,
        'pending_reason' => true,
        'reason_code' => true,
        'remaining_settle' => true,
        'shipping_method' => true,
        'shipping' => true,
        'transaction_entity' => true,
        'txn_id' => true,
        'txn_type' => true,
        'exchange_rate' => true,
        'mc_currency' => true,
        'mc_fee' => true,
        'mc_gross' => true,
        'mc_handling' => true,
        'mc_shipping' => true,
        'payment_fee' => true,
        'payment_gross' => true,
        'settle_amount' => true,
        'settle_currency' => true,
        'auction_buyer_id' => true,
        'auction_closing_date' => true,
        'auction_multi_item' => true,
        'for_auction' => true,
        'subscr_date' => true,
        'subscr_effective' => true,
        'period1' => true,
        'period2' => true,
        'period3' => true,
        'amount1' => true,
        'amount2' => true,
        'amount3' => true,
        'mc_amount1' => true,
        'mc_amount2' => true,
        'mc_amount3' => true,
        'recurring' => true,
        'reattempt' => true,
        'retry_at' => true,
        'recur_times' => true,
        'username' => true,
        'password' => true,
        'subscr_id' => true,
        'case_id' => true,
        'case_type' => true,
        'case_creation_date' => true,
        'created' => true,
        'modified' => true,
        'payer' => true,
        'receiver' => true,
        'auth' => true,
        'parent_txn' => true,
        'txn' => true,
        'auction_buyer' => true,
        'subscr' => true,
        'case' => true,
        'paypal_items' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];
}
