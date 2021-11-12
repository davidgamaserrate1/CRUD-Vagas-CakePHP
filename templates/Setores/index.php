<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore[]|\Cake\Collection\CollectionInterface $setores
 */
?>
<div class="setores index content">
    <?= $this->Html->link(__('New Setore'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Setores') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('departamento_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($setores as $setore): ?>
                <tr>
                    <td><?= $this->Number->format($setore->id) ?></td>
                    <td><?= $setore->has('departamento') ? $this->Html->link($setore->departamento->nome_departamento, ['controller' => 'Departamentos', 'action' => 'view', $setore->departamento->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $setore->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $setore->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $setore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setore->id)]) ?>
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
