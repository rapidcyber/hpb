<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Item Entity
 *
 * @property int $id
 * @property int $merchant_id
 * @property int $category_id
 * @property int $menu_id
 * @property string $name
 * @property string $brand
 * @property float $price
 * @property string $description
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 * @property string $product_code
 *
 * @property \App\Model\Entity\Merchant $merchant
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Menu $menu
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\Order[] $orders
 * @property \App\Model\Entity\Event[] $events
 * @property \App\Model\Entity\Size[] $sizes
 */
class Item extends Entity
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
        'merchant_id' => true,
        'category_id' => true,
        'menu_id' => true,
        'name' => true,
        'brand' => true,
        'price' => true,
        'description' => true,
        'created' => true,
        'modified' => true,
        'product_code' => true,
        'merchant' => true,
        'category' => true,
        'menu' => true,
        'images' => true,
        'orders' => true,
        'events' => true,
        'sizes' => true
    ];
}
