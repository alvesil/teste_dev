<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Matriculas Model
 *
 * @property \App\Model\Table\AlunosTable&\Cake\ORM\Association\BelongsTo $Alunos
 * @property \App\Model\Table\CursosTable&\Cake\ORM\Association\BelongsTo $Cursos
 *
 * @method \App\Model\Entity\Matricula newEmptyEntity()
 * @method \App\Model\Entity\Matricula newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Matricula[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Matricula get($primaryKey, $options = [])
 * @method \App\Model\Entity\Matricula findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Matricula patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Matricula[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Matricula|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matricula saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Matricula[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matricula[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matricula[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Matricula[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class MatriculasTable extends Table
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

        $this->setTable('matriculas');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Alunos', [
            'foreignKey' => 'aluno_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Cursos', [
            'foreignKey' => 'curso_id',
            'joinType' => 'INNER',
        ]);
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
            ->integer('aluno_id')
            ->requirePresence('aluno_id', 'create')
            ->notEmptyString('aluno_id');

        $validator
            ->integer('curso_id')
            ->requirePresence('curso_id', 'create')
            ->notEmptyString('curso_id');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn('aluno_id', 'Alunos'), ['errorField' => 'aluno_id']);
        $rules->add($rules->existsIn('curso_id', 'Cursos'), ['errorField' => 'curso_id']);

        return $rules;
    }
}
