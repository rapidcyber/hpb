<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Merchants Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 * @property \App\Model\Table\TypesTable|\Cake\ORM\Association\BelongsTo $Types
 * @property \App\Model\Table\ThemesTable|\Cake\ORM\Association\BelongsTo $Themes
 * @property \App\Model\Table\ItemsTable|\Cake\ORM\Association\HasMany $Items
 * @property \App\Model\Table\MonthlymerchantsTable|\Cake\ORM\Association\HasMany $Monthlymerchants
 * @property \App\Model\Table\PhotosTable|\Cake\ORM\Association\HasMany $Photos
 *
 * @method \App\Model\Entity\Merchant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Merchant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Merchant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Merchant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Merchant|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Merchant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Merchant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Merchant findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MerchantsTable extends Table
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

        $this->setTable('merchants');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Users', [
            'foreignKey' => 'user_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Types', [
            'foreignKey' => 'type_id',
            'joinType' => 'INNER'
        ]);
        $this->belongsTo('Themes', [
            'foreignKey' => 'theme_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Items', [
            'foreignKey' => 'merchant_id'
        ]);
        $this->hasMany('Monthlymerchants', [
            'foreignKey' => 'merchant_id'
        ]);
        $this->hasMany('Photos', [
            'foreignKey' => 'merchant_id'
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
            ->scalar('photo')
            ->maxLength('photo', 255)
            ->allowEmpty('photo');

        $validator
            ->scalar('name')
            ->maxLength('name', 255)
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('about')
            ->requirePresence('about', 'create')
            ->notEmpty('about');

        $validator
            ->scalar('interests')
            ->requirePresence('interests', 'create')
            ->notEmpty('interests');

        $validator
            ->scalar('likes')
            ->requirePresence('likes', 'create')
            ->notEmpty('likes');

        $validator
            ->scalar('contact')
            ->maxLength('contact', 255)
            ->requirePresence('contact', 'create')
            ->notEmpty('contact');

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
        $rules->add($rules->existsIn(['user_id'], 'Users'));
        $rules->add($rules->existsIn(['type_id'], 'Types'));
        $rules->add($rules->existsIn(['theme_id'], 'Themes'));

        return $rules;
    }
}
