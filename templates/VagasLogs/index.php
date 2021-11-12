<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VagasLog[]|\Cake\Collection\CollectionInterface $vagasLogs
 */
?>
<div class="vagasLogs index content">

    <h3><?= __('Vagas Deletadas') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id vaga') ?></th>
                    <th><?= $this->Paginator->sort('Nome') ?></th>
                    <th><?= $this->Paginator->sort('Situacao') ?></th>
                    <th class="actions"><?= __('Ação') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($vagasLogs as $vagasLog): ?>
                <tr>
                    <td><?= $this->Number->format($vagasLog->id) ?></td>
                    <td><?= $vagasLog->nome_vaga ?></td>
                    <td><?= $vagasLog->acao ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('Visualizar'), ['action' => 'view', $vagasLog->id]) ?>
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
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
