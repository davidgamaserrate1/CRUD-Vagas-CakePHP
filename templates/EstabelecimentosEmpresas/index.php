<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstabelecimentosEmpresa[]|\Cake\Collection\CollectionInterface $estabelecimentosEmpresas
 */
?>
<div class="estabelecimentosEmpresas index content">
    <?= $this->Html->link(__('Adicionar estabelecimento'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Estabelecimentos Empresas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('estabelecimento_nome') ?></th>
                    <th><?= $this->Paginator->sort('logradouro') ?></th>
                    <th><?= $this->Paginator->sort('numero') ?></th>
                    <th><?= $this->Paginator->sort('bairro') ?></th>
                    <th class="actions"><?= __('Ações') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($estabelecimentosEmpresas as $estabelecimentosEmpresa): ?>
                <tr>
                    <td><?= $this->Number->format($estabelecimentosEmpresa->id) ?></td>
                    <td><?= $estabelecimentosEmpresa->empresa_nome ?></td>
                    <td><?= $estabelecimentosEmpresa->logradouro ?></td>
                    <td><?= $this->Number->format($estabelecimentosEmpresa->numero) ?></td>
                    <td><?= $estabelecimentosEmpresa->bairro ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $estabelecimentosEmpresa->id]) ?>
                        <?= $this->Html->link(__('Editar'), ['action' => 'edit', $estabelecimentosEmpresa->id]) ?>
                        <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $estabelecimentosEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentosEmpresa->id)]) ?>
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
        <p><?= $this->Paginator->counter(__('Página {{page}} de {{pages}}, Exibindo {{current}} registros(s) de {{count}}')) ?></p>
    </div>
</div>
