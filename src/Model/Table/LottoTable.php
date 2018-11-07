<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Lotto Model
 *
 * @method \App\Model\Entity\Lotto get($primaryKey, $options = [])
 * @method \App\Model\Entity\Lotto newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Lotto[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Lotto|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lotto|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Lotto patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Lotto[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Lotto findOrCreate($search, callable $callback = null, $options = [])
 */
class LottoTable extends Table
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

        $this->setTable('lotto');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('GAME')
            ->maxLength('GAME', 20)
            ->requirePresence('GAME', 'create')
            ->notEmpty('GAME');

        $validator
            ->scalar('COMBINATIONS')
            ->maxLength('COMBINATIONS', 20)
            ->requirePresence('COMBINATIONS', 'create')
            ->notEmpty('COMBINATIONS');

        $validator
            ->date('DATE')
            ->requirePresence('DATE', 'create')
            ->notEmpty('DATE');

        $validator
            ->integer('JACKPOT')
            ->requirePresence('JACKPOT', 'create')
            ->notEmpty('JACKPOT');

        $validator
            ->integer('WINNERS')
            ->requirePresence('WINNERS', 'create')
            ->notEmpty('WINNERS');

        return $validator;
    }
}
