<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Vagas Model
 *
 * @property \App\Model\Table\DepartamentosTable&\Cake\ORM\Association\BelongsTo $Departamentos
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\BelongsTo $Empresas
 * @property \App\Model\Table\EstabelecimentosEmpresasTable&\Cake\ORM\Association\BelongsTo $EstabelecimentosEmpresas
 * @property \App\Model\Table\SetoresTable&\Cake\ORM\Association\BelongsTo $Setores
 *
 * @method \App\Model\Entity\Vaga newEmptyEntity()
 * @method \App\Model\Entity\Vaga newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Vaga[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Vaga get($primaryKey, $options = [])
 * @method \App\Model\Entity\Vaga findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Vaga patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Vaga[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Vaga|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaga saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Vaga[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VagasTable extends Table
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

        $this->setTable('vagas');
        $this->setDisplayField('nome_vaga');
        $this->setPrimaryKey('id');

        $this->belongsTo('Departamentos', [
            'foreignKey' => 'departamento_id',
        ]);
        $this->belongsTo('Empresas', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->belongsTo('EstabelecimentosEmpresas', [
            'foreignKey' => 'estabelecimentos_empresa_id',
        ]);
        $this->belongsTo('Setores', [
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
            ->scalar('nome_vaga')
            ->requirePresence('nome_vaga', 'create')
            ->notEmptyString('nome_vaga');

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
        $rules->add($rules->existsIn('empresa_id', 'Empresas'), ['errorField' => 'empresa_id']);
        $rules->add($rules->existsIn('estabelecimentos_empresa_id', 'EstabelecimentosEmpresas'), ['errorField' => 'estabelecimentos_empresa_id']);
        $rules->add($rules->existsIn('setore_id', 'Setores'), ['errorField' => 'setore_id']);

        return $rules;
    }
}
