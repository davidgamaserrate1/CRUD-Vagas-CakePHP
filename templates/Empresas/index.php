<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa[]|\Cake\Collection\CollectionInterface $empresas
 */
?>
<div class="empresas index content">
    <?= $this->Html->link(__('Adicionar Empresa'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Empresas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nome') ?></th>
                    <th><?= $this->Paginator->sort('estabelecimentos_empresa_id') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($empresas as $empresa): ?>
                <tr>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                    <td> <?= $empresa->nome_empresa ?></td>

                    <td><?= $empresa->has('estabelecimentos_empresa') ? $this->Html->link($empresa->estabelecimentos_empresa->empresa_nome, ['controller' => 'EstabelecimentosEmpresas', 'action' => 'view', $empresa->estabelecimentos_empresa->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $empresa->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $empresa->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id)]) ?>
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
            <?= $this->Paginator->last(__('ultimo') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, exibindo {{current}} registros(s) de {{count}} ')) ?></p>
    </div>
</div>
