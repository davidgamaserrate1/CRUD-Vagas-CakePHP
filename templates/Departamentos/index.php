<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento[]|\Cake\Collection\CollectionInterface $departamentos
 */
?>
<div class="departamentos index content">
    <?= $this->Html->link(__('New Departamento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Departamentos') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('departamento') ?></th>
                    <th><?= $this->Paginator->sort('empresa_id') ?></th>

                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($departamentos as $departamento): ?>
                <tr>
                    <td><?= $this->Number->format($departamento->id) ?></td>
                    <td><?=  ($departamento->nome_departamento) ?></td>
                    <td><?= $departamento->has('empresa') ? $this->Html->link($departamento->empresa->nome_empresa, ['controller' => 'Empresas', 'action' => 'view', $departamento->empresa->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $departamento->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $departamento->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Exibindo {{current}} registros(s) de {{count}}')) ?></p>
    </div>
</div>
