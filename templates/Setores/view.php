<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Setore $setore
 */
?>
<div class="row">
    <aside class="column">
    <div class="side-nav"style="background-color: white; border-radius: 15px; width:260px; height: 270px;">
        <div class="container">
            <br><h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Setor'), ['action' => 'edit', $setore->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Setor'), ['action' => 'delete', $setore->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setore->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Setores'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Adicionar Setor'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
        <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="setores view content">
            <h3><?= h($setore->nome_setor) ?></h3>
            <table>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= $setore->has('departamento') ? $this->Html->link($setore->departamento->nome_departamento, ['controller' => 'Departamentos', 'action' => 'view', $setore->departamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($setore->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nome Setor') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($setore->nome_setor)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Relacão : Vagas') ?></h4>
                <?php if (!empty($setore->vagas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Vaga') ?></th>
                            <th><?= __('Departamento Id') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th><?= __('Estabelecimentos Empresa Id') ?></th>
                            <th><?= __('Setore Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($setore->vagas as $vagas) : ?>
                        <tr>
                            <td><?= h($vagas->id) ?></td>
                            <td><?= h($vagas->nome_vaga) ?></td>
                            <td><?= h($vagas->departamento_id) ?></td>
                            <td><?= h($vagas->empresa_id) ?></td>
                            <td><?= h($vagas->estabelecimentos_empresa_id) ?></td>
                            <td><?= h($vagas->setore_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Vagas', 'action' => 'view', $vagas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Vagas', 'action' => 'edit', $vagas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Vagas', 'action' => 'delete', $vagas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vagas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
