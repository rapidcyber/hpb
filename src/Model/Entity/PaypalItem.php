<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PaypalItem Entity
 *
 * @property string $id
 * @property string $instant_payment_notification_id
 * @property string $item_name
 * @property string $item_number
 * @property string $quantity
 * @property float $mc_gross
 * @property float $mc_shipping
 * @property float $mc_handling
 * @property float $tax
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\InstantPaymentNotification $instant_payment_notification
 */
class PaypalItem extends Entity
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
        'instant_payment_notification_id' => true,
        'item_name' => true,
        'item_number' => true,
        'quantity' => true,
        'mc_gross' => true,
        'mc_shipping' => true,
        'mc_handling' => true,
        'tax' => true,
        'created' => true,
        'modified' => true,
        'instant_payment_notification' => true
    ];
}
