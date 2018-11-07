<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Merchant Entity
 *
 * @property int $id
 * @property int $user_id
 * @property int $type_id
 * @property int $theme_id
 * @property string $photo
 * @property string $name
 * @property string $about
 * @property string $interests
 * @property string $likes
 * @property string $contact
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Type $type
 * @property \App\Model\Entity\Theme $theme
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\Monthlymerchant[] $monthlymerchants
 * @property \App\Model\Entity\Photo[] $photos
 */
class Merchant extends Entity
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
        'user_id' => true,
        'type_id' => true,
        'theme_id' => true,
        'photo' => true,
        'name' => true,
        'about' => true,
        'interests' => true,
        'likes' => true,
        'contact' => true,
        'created' => true,
        'modified' => true,
        'user' => true,
        'type' => true,
        'theme' => true,
        'items' => true,
        'monthlymerchants' => true,
        'photos' => true
    ];
}
