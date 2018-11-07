<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ItemsImage Entity
 *
 * @property int $id
 * @property int $img_id
 * @property int $item_id
 *
 * @property \App\Model\Entity\Img $img
 * @property \App\Model\Entity\Item $item
 */
class ItemsImage extends Entity
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
        'img_id' => true,
        'item_id' => true,
        'img' => true,
        'item' => true
    ];
}
