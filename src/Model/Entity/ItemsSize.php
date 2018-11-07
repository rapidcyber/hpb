<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemsSize Entity
 *
 * @property int $id
 * @property int $item_id
 * @property int $size_id
 * @property int $stocks
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 *
 * @property \App\Model\Entity\Item $item
 * @property \App\Model\Entity\Size $size
 */
class ItemsSize extends Entity
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
        'size_id' => true,
        'stocks' => true,
        'created' => true,
        'modified' => true,
        'item' => true,
        'size' => true
    ];
}
