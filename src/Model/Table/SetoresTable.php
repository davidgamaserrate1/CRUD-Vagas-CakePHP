<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Setores Model
 *
 * @property \App\Model\Table\DepartamentosTable&\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\VagasTable&\Cake\ORM\Association\HasMany $Vagas
 *
 * @method \App\Model\Entity\Setore newEmptyEntity()
 * @method \App\Model\Entity\Setore newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Setore[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Setore get($primaryKey, $options = [])
 * @method \App\Model\Entity\Setore findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Setore patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Setore[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Setore|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Setore saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Setore[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Setore[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Setore[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Setore[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class SetoresTable extends Table
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

        $this->setTable('setores');
        $this->setDisplayField('nome_setor');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id',
        ]);
        $this->hasMany('Vagas', [
            'foreignKey' => 'setore_id',
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_setor')
            ->requirePresence('nome_setor', 'create')
            ->notEmptyString('nome_setor');

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
        $rules->add($rules->existsIn('departamento_id', 'Departamentos'), ['errorField' => 'departamento_id']);

        return $rules;
    }
}
