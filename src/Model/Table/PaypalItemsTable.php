<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * PaypalItems Model
 *
 * @property \App\Model\Table\InstantPaymentNotificationsTable|\Cake\ORM\Association\BelongsTo $InstantPaymentNotifications
 *
 * @method \App\Model\Entity\PaypalItem get($primaryKey, $options = [])
 * @method \App\Model\Entity\PaypalItem newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\PaypalItem[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\PaypalItem|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaypalItem|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\PaypalItem patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\PaypalItem[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\PaypalItem findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class PaypalItemsTable extends Table
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

        $this->setTable('paypal_items');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('InstantPaymentNotifications', [
            'foreignKey' => 'instant_payment_notification_id',
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
            ->scalar('id')
            ->maxLength('id', 36)
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('item_name')
            ->maxLength('item_name', 127)
            ->allowEmpty('item_name');

        $validator
            ->scalar('item_number')
            ->maxLength('item_number', 127)
            ->allowEmpty('item_number');

        $validator
            ->scalar('quantity')
            ->maxLength('quantity', 127)
            ->allowEmpty('quantity');

        $validator
            ->numeric('mc_gross')
            ->allowEmpty('mc_gross');

        $validator
            ->numeric('mc_shipping')
            ->allowEmpty('mc_shipping');

        $validator
            ->numeric('mc_handling')
            ->allowEmpty('mc_handling');

        $validator
            ->numeric('tax')
            ->allowEmpty('tax');

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
        $rules->add($rules->existsIn(['instant_payment_notification_id'], 'InstantPaymentNotifications'));

        return $rules;
    }
}
