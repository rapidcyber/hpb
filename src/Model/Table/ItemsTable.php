<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Items Model
 *
 * @property \App\Model\Table\MerchantsTable|\Cake\ORM\Association\BelongsTo $Merchants
 * @property \App\Model\Table\CategoriesTable|\Cake\ORM\Association\BelongsTo $Categories
 * @property \App\Model\Table\MenusTable|\Cake\ORM\Association\BelongsTo $Menus
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\HasMany $Images
 * @property \App\Model\Table\OrdersTable|\Cake\ORM\Association\HasMany $Orders
 * @property \App\Model\Table\EventsTable|\Cake\ORM\Association\BelongsToMany $Events
 * @property \App\Model\Table\ImagesTable|\Cake\ORM\Association\BelongsToMany $Images
 * @property \App\Model\Table\SizesTable|\Cake\ORM\Association\BelongsToMany $Sizes
 *
 * @method \App\Model\Entity\Item get($primaryKey, $options = [])
 * @method \App\Model\Entity\Item newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Item[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Item|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Item patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Item[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Item findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class ItemsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('items');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        /**
         * belongsTo associations
         *
         * @var array
         */
        $this->belongsTo('Merchants', [
            'foreignKey' => 'merchant_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Categories', [
            'foreignKey' => 'category_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Menus', [
            'foreignKey' => 'menu_id',
            'joinType' => 'INNER'
        ]);
        /**
         * hasMany associations
         *
         * @var array
         */
        $this->hasMany('Images', [
            'foreignKey' => 'item_id'
        ]);
        
        $this->hasMany('ItemsSizes',[
            'foreignKey' => 'item_id'
        ]);

        $this->hasMany('Orders', [
            'foreignKey' => 'item_id'
        ]);
        /**
         * belongsToMany associations
         *
         * @var array
         */
        $this->belongsToMany('Events', [
            'foreignKey' => 'item_id',
            'targetForeignKey' => 'event_id',
            'joinTable' => 'events_items'
        ]);
        /*
        $this->belongsToMany('Images', [
            'foreignKey' => 'item_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'items_images'
        ]); */
        $this->belongsToMany('Sizes', [
            'foreignKey' => 'item_id',
            'targetForeignKey' => 'size_id',
            'joinTable' => 'items_sizes'
        ]);

    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->nonNegativeInteger('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('brand')
            ->maxLength('brand', 255)
            ->requirePresence('brand', 'create')
            ->notEmpty('brand');

        $validator
            ->decimal('price')
            ->requirePresence('price', 'create')
            ->notEmpty('price');

        $validator
            ->scalar('description')
            ->requirePresence('description', 'create')
            ->notEmpty('description');

        $validator
            ->scalar('product_code')
            ->maxLength('product_code', 50)
            ->requirePresence('product_code', 'create')
            ->notEmpty('product_code');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['merchant_id'], 'Merchants'));
        $rules->add($rules->existsIn(['category_id'], 'Categories'));
        $rules->add($rules->existsIn(['menu_id'], 'Menus'));

        return $rules;
    }
}
