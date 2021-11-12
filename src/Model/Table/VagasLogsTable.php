<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * VagasLogs Model
 *
 * @method \App\Model\Entity\VagasLog newEmptyEntity()
 * @method \App\Model\Entity\VagasLog newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog get($primaryKey, $options = [])
 * @method \App\Model\Entity\VagasLog findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\VagasLog patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\VagasLog|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VagasLog saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\VagasLog[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 */
class VagasLogsTable extends Table
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

        $this->setTable('vagas_logs');
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
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('nome_vaga')
            ->requirePresence('nome_vaga', 'create')
            ->notEmptyString('nome_vaga');

        $validator
            ->scalar('acao')
            ->requirePresence('acao', 'create')
            ->notEmptyString('acao');

        return $validator;
    }
}
