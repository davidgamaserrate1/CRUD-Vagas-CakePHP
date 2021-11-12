<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga[]|\Cake\Collection\CollectionInterface $vagas
 */
?>
<div class="vagas index content">
    <?= $this->Html->link(__('Nova Vaga'), ['action' => 'add'], ['class' => 'button float-right']) ?>

    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('vaga') ?></th>
                    <th><?= $this->Paginator->sort('departamento_id') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id') ?></th>
                    <th><?= $this->Paginator->sort('estabelecimentos_empresa_id') ?></th>
                    <th><?= $this->Paginator->sort('setor_id') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vagas as $vaga): ?>
                <tr>
                    <td><?= $this->Number->format($vaga->id) ?></td>
                    <td><?= $vaga->nome_vaga?></td>
                    <td><?= $vaga->has('departamento') ? $this->Html->link($vaga->departamento->nome_departamento, ['controller' => 'Departamentos', 'action' => 'view', $vaga->departamento->id]) : '' ?></td>
                    <td><?= $vaga->has('empresa') ? $this->Html->link($vaga->empresa->nome_empresa, ['controller' => 'Empresas', 'action' => 'view', $vaga->empresa->id]) : '' ?></td>
                    <td><?= $vaga->has('estabelecimentos_empresa') ? $this->Html->link($vaga->estabelecimentos_empresa->empresa_nome, ['controller' => 'EstabelecimentosEmpresas', 'action' => 'view', $vaga->estabelecimentos_empresa->id]) : '' ?></td>
                    <td><?= $vaga->has('setore') ? $this->Html->link($vaga->setore->nome_setor, ['controller' => 'Setores', 'action' => 'view', $vaga->setore->id]) : '' ?></td>

                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $vaga->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $vaga->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $vaga->id], ['confirm' => __('Deseja realmente excluir a vaga #{0}?', $vaga->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('primeiro')) ?>
            <?= $this->Paginator->prev('< ' . __('anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('proximo') . ' >') ?>
            <?= $this->Paginator->last(__('último') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Exibindo {{current}} registros(s) de {{count}}')) ?></p>
    </div>
</div>
