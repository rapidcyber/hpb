<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property int $item_id
 * @property int $user_id
 * @property int $transaction_id
 * @property float $total_price
 * @property string $size
 * @property int $quantity
 * @property string $status
 * @property \Cake\I18n\FrozenTime $modified
 * @property \Cake\I18n\FrozenTime $created
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Transaction $transaction
 */
class Order extends Entity
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
        'item_id' => true,
        'user_id' => true,
        'transaction_id' => true,
        'total_price' => true,
        'size' => true,
        'quantity' => true,
        'status' => true,
        'modified' => true,
        'created' => true,
        'item' => true,
        'user' => true,
        'transaction' => true
    ];
}
