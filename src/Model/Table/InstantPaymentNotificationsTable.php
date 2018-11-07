<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * InstantPaymentNotifications Model
 *
 * @property \App\Model\Table\PayersTable|\Cake\ORM\Association\BelongsTo $Payers
 * @property \App\Model\Table\ReceiversTable|\Cake\ORM\Association\BelongsTo $Receivers
 * @property \App\Model\Table\AuthsTable|\Cake\ORM\Association\BelongsTo $Auths
 * @property \App\Model\Table\ParentTxnsTable|\Cake\ORM\Association\BelongsTo $ParentTxns
 * @property \App\Model\Table\TxnsTable|\Cake\ORM\Association\BelongsTo $Txns
 * @property \App\Model\Table\AuctionBuyersTable|\Cake\ORM\Association\BelongsTo $AuctionBuyers
 * @property \App\Model\Table\SubscrsTable|\Cake\ORM\Association\BelongsTo $Subscrs
 * @property \App\Model\Table\CasesTable|\Cake\ORM\Association\BelongsTo $Cases
 * @property \App\Model\Table\PaypalItemsTable|\Cake\ORM\Association\HasMany $PaypalItems
 *
 * @method \App\Model\Entity\InstantPaymentNotification get($primaryKey, $options = [])
 * @method \App\Model\Entity\InstantPaymentNotification newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\InstantPaymentNotification[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\InstantPaymentNotification|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InstantPaymentNotification|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\InstantPaymentNotification patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\InstantPaymentNotification[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\InstantPaymentNotification findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class InstantPaymentNotificationsTable extends Table
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

        $this->setTable('instant_payment_notifications');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Payers', [
            'foreignKey' => 'payer_id'
        ]);
        $this->belongsTo('Receivers', [
            'foreignKey' => 'receiver_id'
        ]);
        $this->belongsTo('Auths', [
            'foreignKey' => 'auth_id'
        ]);
        $this->belongsTo('ParentTxns', [
            'foreignKey' => 'parent_txn_id'
        ]);
        $this->belongsTo('Txns', [
            'foreignKey' => 'txn_id'
        ]);
        $this->belongsTo('AuctionBuyers', [
            'foreignKey' => 'auction_buyer_id'
        ]);
        $this->belongsTo('Subscrs', [
            'foreignKey' => 'subscr_id'
        ]);
        $this->belongsTo('Cases', [
            'foreignKey' => 'case_id'
        ]);
        $this->hasMany('PaypalItems', [
            'foreignKey' => 'instant_payment_notification_id'
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
            ->uuid('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('notify_version')
            ->maxLength('notify_version', 64)
            ->allowEmpty('notify_version');

        $validator
            ->scalar('verify_sign')
            ->maxLength('verify_sign', 127)
            ->allowEmpty('verify_sign');

        $validator
            ->integer('test_ipn')
            ->allowEmpty('test_ipn');

        $validator
            ->scalar('address_city')
            ->maxLength('address_city', 40)
            ->allowEmpty('address_city');

        $validator
            ->scalar('address_country')
            ->maxLength('address_country', 64)
            ->allowEmpty('address_country');

        $validator
            ->scalar('address_country_code')
            ->maxLength('address_country_code', 2)
            ->allowEmpty('address_country_code');

        $validator
            ->scalar('address_name')
            ->maxLength('address_name', 128)
            ->allowEmpty('address_name');

        $validator
            ->scalar('address_state')
            ->maxLength('address_state', 40)
            ->allowEmpty('address_state');

        $validator
            ->scalar('address_status')
            ->maxLength('address_status', 20)
            ->allowEmpty('address_status');

        $validator
            ->scalar('address_street')
            ->maxLength('address_street', 200)
            ->allowEmpty('address_street');

        $validator
            ->scalar('address_zip')
            ->maxLength('address_zip', 20)
            ->allowEmpty('address_zip');

        $validator
            ->scalar('first_name')
            ->maxLength('first_name', 64)
            ->allowEmpty('first_name');

        $validator
            ->scalar('last_name')
            ->maxLength('last_name', 64)
            ->allowEmpty('last_name');

        $validator
            ->scalar('payer_business_name')
            ->maxLength('payer_business_name', 127)
            ->allowEmpty('payer_business_name');

        $validator
            ->scalar('payer_email')
            ->maxLength('payer_email', 127)
            ->allowEmpty('payer_email');

        $validator
            ->scalar('payer_status')
            ->maxLength('payer_status', 20)
            ->allowEmpty('payer_status');

        $validator
            ->scalar('contact_phone')
            ->maxLength('contact_phone', 20)
            ->allowEmpty('contact_phone');

        $validator
            ->scalar('residence_country')
            ->maxLength('residence_country', 2)
            ->allowEmpty('residence_country');

        $validator
            ->scalar('business')
            ->maxLength('business', 127)
            ->allowEmpty('business');

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
            ->scalar('receiver_email')
            ->maxLength('receiver_email', 127)
            ->allowEmpty('receiver_email');

        $validator
            ->scalar('custom')
            ->maxLength('custom', 255)
            ->allowEmpty('custom');

        $validator
            ->scalar('invoice')
            ->maxLength('invoice', 127)
            ->allowEmpty('invoice');

        $validator
            ->scalar('memo')
            ->maxLength('memo', 255)
            ->allowEmpty('memo');

        $validator
            ->scalar('option_name1')
            ->maxLength('option_name1', 64)
            ->allowEmpty('option_name1');

        $validator
            ->scalar('option_name2')
            ->maxLength('option_name2', 64)
            ->allowEmpty('option_name2');

        $validator
            ->scalar('option_selection1')
            ->maxLength('option_selection1', 200)
            ->allowEmpty('option_selection1');

        $validator
            ->scalar('option_selection2')
            ->maxLength('option_selection2', 200)
            ->allowEmpty('option_selection2');

        $validator
            ->decimal('tax')
            ->allowEmpty('tax');

        $validator
            ->scalar('auth_exp')
            ->maxLength('auth_exp', 28)
            ->allowEmpty('auth_exp');

        $validator
            ->integer('auth_amount')
            ->allowEmpty('auth_amount');

        $validator
            ->scalar('auth_status')
            ->maxLength('auth_status', 20)
            ->allowEmpty('auth_status');

        $validator
            ->integer('num_cart_items')
            ->allowEmpty('num_cart_items');

        $validator
            ->scalar('payment_date')
            ->maxLength('payment_date', 28)
            ->allowEmpty('payment_date');

        $validator
            ->scalar('payment_status')
            ->maxLength('payment_status', 20)
            ->allowEmpty('payment_status');

        $validator
            ->scalar('payment_type')
            ->maxLength('payment_type', 10)
            ->allowEmpty('payment_type');

        $validator
            ->scalar('pending_reason')
            ->maxLength('pending_reason', 20)
            ->allowEmpty('pending_reason');

        $validator
            ->scalar('reason_code')
            ->maxLength('reason_code', 20)
            ->allowEmpty('reason_code');

        $validator
            ->integer('remaining_settle')
            ->allowEmpty('remaining_settle');

        $validator
            ->scalar('shipping_method')
            ->maxLength('shipping_method', 64)
            ->allowEmpty('shipping_method');

        $validator
            ->decimal('shipping')
            ->allowEmpty('shipping');

        $validator
            ->scalar('transaction_entity')
            ->maxLength('transaction_entity', 20)
            ->allowEmpty('transaction_entity');

        $validator
            ->scalar('txn_type')
            ->maxLength('txn_type', 20)
            ->allowEmpty('txn_type');

        $validator
            ->decimal('exchange_rate')
            ->allowEmpty('exchange_rate');

        $validator
            ->scalar('mc_currency')
            ->maxLength('mc_currency', 3)
            ->allowEmpty('mc_currency');

        $validator
            ->decimal('mc_fee')
            ->allowEmpty('mc_fee');

        $validator
            ->decimal('mc_gross')
            ->allowEmpty('mc_gross');

        $validator
            ->decimal('mc_handling')
            ->allowEmpty('mc_handling');

        $validator
            ->decimal('mc_shipping')
            ->allowEmpty('mc_shipping');

        $validator
            ->decimal('payment_fee')
            ->allowEmpty('payment_fee');

        $validator
            ->decimal('payment_gross')
            ->allowEmpty('payment_gross');

        $validator
            ->decimal('settle_amount')
            ->allowEmpty('settle_amount');

        $validator
            ->scalar('settle_currency')
            ->maxLength('settle_currency', 3)
            ->allowEmpty('settle_currency');

        $validator
            ->scalar('auction_closing_date')
            ->maxLength('auction_closing_date', 28)
            ->allowEmpty('auction_closing_date');

        $validator
            ->integer('auction_multi_item')
            ->allowEmpty('auction_multi_item');

        $validator
            ->scalar('for_auction')
            ->maxLength('for_auction', 10)
            ->allowEmpty('for_auction');

        $validator
            ->scalar('subscr_date')
            ->maxLength('subscr_date', 28)
            ->allowEmpty('subscr_date');

        $validator
            ->scalar('subscr_effective')
            ->maxLength('subscr_effective', 28)
            ->allowEmpty('subscr_effective');

        $validator
            ->scalar('period1')
            ->maxLength('period1', 10)
            ->allowEmpty('period1');

        $validator
            ->scalar('period2')
            ->maxLength('period2', 10)
            ->allowEmpty('period2');

        $validator
            ->scalar('period3')
            ->maxLength('period3', 10)
            ->allowEmpty('period3');

        $validator
            ->decimal('amount1')
            ->allowEmpty('amount1');

        $validator
            ->decimal('amount2')
            ->allowEmpty('amount2');

        $validator
            ->decimal('amount3')
            ->allowEmpty('amount3');

        $validator
            ->decimal('mc_amount1')
            ->allowEmpty('mc_amount1');

        $validator
            ->decimal('mc_amount2')
            ->allowEmpty('mc_amount2');

        $validator
            ->decimal('mc_amount3')
            ->allowEmpty('mc_amount3');

        $validator
            ->scalar('recurring')
            ->maxLength('recurring', 1)
            ->allowEmpty('recurring');

        $validator
            ->scalar('reattempt')
            ->maxLength('reattempt', 1)
            ->allowEmpty('reattempt');

        $validator
            ->scalar('retry_at')
            ->maxLength('retry_at', 28)
            ->allowEmpty('retry_at');

        $validator
            ->integer('recur_times')
            ->allowEmpty('recur_times');

        $validator
            ->scalar('username')
            ->maxLength('username', 64)
            ->allowEmpty('username');

        $validator
            ->scalar('password')
            ->maxLength('password', 24)
            ->allowEmpty('password');

        $validator
            ->scalar('case_type')
            ->maxLength('case_type', 28)
            ->allowEmpty('case_type');

        $validator
            ->scalar('case_creation_date')
            ->maxLength('case_creation_date', 28)
            ->allowEmpty('case_creation_date');

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
        $rules->add($rules->isUnique(['username']));
        $rules->add($rules->existsIn(['payer_id'], 'Payers'));
        $rules->add($rules->existsIn(['receiver_id'], 'Receivers'));
        $rules->add($rules->existsIn(['auth_id'], 'Auths'));
        $rules->add($rules->existsIn(['parent_txn_id'], 'ParentTxns'));
        $rules->add($rules->existsIn(['txn_id'], 'Txns'));
        $rules->add($rules->existsIn(['auction_buyer_id'], 'AuctionBuyers'));
        $rules->add($rules->existsIn(['subscr_id'], 'Subscrs'));
        $rules->add($rules->existsIn(['case_id'], 'Cases'));

        return $rules;
    }
}
