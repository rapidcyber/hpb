<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Image Entity
 *
 * @property int $id
 * @property int $item_id
 * @property int $gallery_id
 * @property string $name
 * @property string $img_file
 * @property int $created
 * @property int $modified
 *
 * @property \App\Model\Entity\Item[] $items
 * @property \App\Model\Entity\Gallery $gallery
 */
class Image extends Entity
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
        'gallery_id' => true,
        'name' => true,
        'img_file' => true,
        'created' => true,
        'modified' => true,
        'items' => true,
        'gallery' => true
    ];
}
