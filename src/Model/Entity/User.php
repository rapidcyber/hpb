<?php
namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property bool $status
 * @property string $activation
 * @property string $first_name
 * @property string $last_name
 * @property string $address
 * @property string $username
 * @property string $password
 * @property string $email
 * @property int $group_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Group $group
 * @property \App\Model\Entity\Merchant[] $merchants
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Transaction[] $transactions
 */
class User extends Entity
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
        'status' => true,
        'activation' => true,
        'first_name' => true,
        'last_name' => true,
        'address' => true,
        'username' => true,
        'password' => true,
        'email' => true,
        'group_id' => true,
        'created' => true,
        'modified' => true,
        'group' => true,
        'merchants' => true,
        'orders' => true,
        'transactions' => true
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password'
    ];

    protected function _setPassword($password)
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }

}
