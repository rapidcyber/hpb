<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Transaction Entity
 *
 * @property int $id
 * @property string $transaction_code
 * @property int $user_id
 * @property float $total_price
 * @property string $status
 * @property float $vat
 * @property float $web_fee
 * @property float $shipping
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Order[] $orders
 */
class Transaction extends Entity
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
        'transaction_code' => true,
        'user_id' => true,
        'total_price' => true,
        'status' => true,
        'vat' => true,
        'web_fee' => true,
        'shipping' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'orders' => true
    ];
}
