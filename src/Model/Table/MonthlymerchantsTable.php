<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Monthlymerchants Model
 *
 * @property \App\Model\Table\MerchantsTable|\Cake\ORM\Association\BelongsTo $Merchants
 *
 * @method \App\Model\Entity\Monthlymerchant get($primaryKey, $options = [])
 * @method \App\Model\Entity\Monthlymerchant newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Monthlymerchant[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Monthlymerchant|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monthlymerchant|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Monthlymerchant patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Monthlymerchant[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Monthlymerchant findOrCreate($search, callable $callback = null, $options = [])
 */
class MonthlymerchantsTable extends Table
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

        $this->setTable('monthlymerchants');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Merchants', [
            'foreignKey' => 'merchant_id',
            'joinType' => 'INNER'
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

        return $rules;
    }
}
