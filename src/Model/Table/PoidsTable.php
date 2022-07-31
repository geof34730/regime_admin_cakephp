<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Poids Model
 *
 * @method \App\Model\Entity\Poid newEmptyEntity()
 * @method \App\Model\Entity\Poid newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Poid[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Poid get($primaryKey, $options = [])
 * @method \App\Model\Entity\Poid findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Poid patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Poid[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Poid|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poid saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Poid[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poid[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poid[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Poid[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class PoidsTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('poids');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('userid')
            ->requirePresence('userid', 'create')
            ->notEmptyString('userid');

        $validator
            ->dateTime('datepesee')
            ->requirePresence('datepesee', 'create')
            ->notEmptyDateTime('datepesee');

        $validator
            ->numeric('kg')
            ->requirePresence('kg', 'create')
            ->notEmptyString('kg');

        return $validator;
    }
}
