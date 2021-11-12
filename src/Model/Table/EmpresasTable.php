<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Empresas Model
 *
 * @property \App\Model\Table\EstabelecimentosEmpresasTable&\Cake\ORM\Association\BelongsTo $EstabelecimentosEmpresas
 * @property \App\Model\Table\DepartamentosTable&\Cake\ORM\Association\HasMany $Departamentos
 * @property \App\Model\Table\VagasTable&\Cake\ORM\Association\HasMany $Vagas
 *
 * @method \App\Model\Entity\Empresa newEmptyEntity()
 * @method \App\Model\Entity\Empresa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Empresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\Empresa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Empresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Empresa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Empresa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EmpresasTable extends Table
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

        $this->setTable('empresas');
        $this->setDisplayField('nome_empresa');
        $this->setPrimaryKey('id');

        $this->belongsTo('EstabelecimentosEmpresas', [
            'foreignKey' => 'estabelecimentos_empresa_id',
        ]);
        $this->hasMany('Departamentos', [
            'foreignKey' => 'empresa_id',
        ]);
        $this->hasMany('Vagas', [
            'foreignKey' => 'empresa_id',
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
            ->scalar('nome_empresa')
            ->allowEmptyString('nome_empresa');

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
        $rules->add($rules->existsIn('estabelecimentos_empresa_id', 'EstabelecimentosEmpresas'), ['errorField' => 'estabelecimentos_empresa_id']);

        return $rules;
    }
}
