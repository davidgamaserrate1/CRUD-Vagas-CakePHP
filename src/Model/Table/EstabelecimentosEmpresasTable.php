<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * EstabelecimentosEmpresas Model
 *
 * @property \App\Model\Table\EmpresasTable&\Cake\ORM\Association\HasMany $Empresas
 * @property \App\Model\Table\VagasTable&\Cake\ORM\Association\HasMany $Vagas
 *
 * @method \App\Model\Entity\EstabelecimentosEmpresa newEmptyEntity()
 * @method \App\Model\Entity\EstabelecimentosEmpresa newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa get($primaryKey, $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\EstabelecimentosEmpresa[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class EstabelecimentosEmpresasTable extends Table
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

        $this->setTable('estabelecimentos_empresas');
        $this->setDisplayField('empresa_nome');
        $this->setPrimaryKey('id');

        $this->hasMany('Empresas', [
            'foreignKey' => 'estabelecimentos_empresa_id',
        ]);
        $this->hasMany('Vagas', [
            'foreignKey' => 'estabelecimentos_empresa_id',
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
            ->scalar('empresa_nome')
            ->requirePresence('empresa_nome', 'create')
            ->notEmptyString('empresa_nome');

        $validator
            ->scalar('logradouro')
            ->requirePresence('logradouro', 'create')
            ->notEmptyString('logradouro');

        $validator
            ->integer('numero')
            ->requirePresence('numero', 'create')
            ->notEmptyString('numero');

        $validator
            ->scalar('bairro')
            ->requirePresence('bairro', 'create')
            ->notEmptyString('bairro');

        return $validator;
    }
}
