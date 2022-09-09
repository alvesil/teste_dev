<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Diplomas Model
 *
 * @method \App\Model\Entity\Diploma newEmptyEntity()
 * @method \App\Model\Entity\Diploma newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Diploma[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Diploma get($primaryKey, $options = [])
 * @method \App\Model\Entity\Diploma findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Diploma patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Diploma[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Diploma|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diploma saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Diploma[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Diploma[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Diploma[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Diploma[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DiplomasTable extends Table
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

        $this->setTable('diplomas');
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
            ->scalar('instituicao')
            ->maxLength('instituicao', 255)
            ->requirePresence('instituicao', 'create')
            ->notEmptyString('instituicao');

        $validator
            ->dateTime('dataFormatura')
            ->requirePresence('dataFormatura', 'create')
            ->notEmptyDateTime('dataFormatura');

        $validator
            ->scalar('curso')
            ->maxLength('curso', 100)
            ->requirePresence('curso', 'create')
            ->notEmptyString('curso');

        $validator
            ->integer('cargaHoraria')
            ->requirePresence('cargaHoraria', 'create')
            ->notEmptyString('cargaHoraria');

        return $validator;
    }
}
