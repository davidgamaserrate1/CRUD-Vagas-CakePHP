<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Departamentos Model
 *
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\SetoresTable&\Cake\ORM\Association\HasMany $Setores
 * @property \App\Model\Table\VagasTable&\Cake\ORM\Association\HasMany $Vagas
 *
 * @method \App\Model\Entity\Departamento newEmptyEntity()
 * @method \App\Model\Entity\Departamento newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Departamento[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Departamento get($primaryKey, $options = [])
 * @method \App\Model\Entity\Departamento findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Departamento patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Departamento|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Departamento[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class DepartamentosTable extends Table
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

        $this->setTable('departamentos');
        $this->setDisplayField('nome_departamento');
        $this->setPrimaryKey('id');

        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Setores', [
            'foreignKey' => 'departamento_id',
        ]);
        $this->hasMany('Vagas', [
            'foreignKey' => 'departamento_id',
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
            ->scalar('nome_departamento')
            ->requirePresence('nome_departamento', 'create')
            ->notEmptyString('nome_departamento');

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
        $rules->add($rules->existsIn('empresa_id', 'Empresas'), ['errorField' => 'empresa_id']);

        return $rules;
    }
}
