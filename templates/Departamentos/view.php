<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 */
?>
<div class="row">
    <aside class="column">
    <div class="side-nav"style="background-color: white; border-radius: 15px; width:260px; height: 230px;"> <br>
            <h4 class="heading" style="margin-left: 15px;"><?= __('Actions') ?></h4>
                <div class="container">
                    <?= $this->Html->link(__('Editar Departamento'), ['action' => 'edit', $departamento->id], ['class' => 'side-nav-item']) ?>
                    <?= $this->Form->postLink(__('Deletar Departamento'), ['action' => 'delete', $departamento->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamento->id), 'class' => 'side-nav-item']) ?>

                    <?= $this->Html->link(__('Criar Departamento'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
                </div>
                <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                    <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                </div>
        </div>

    </aside>
    <div class="column-responsive column-80">
        <div class="departamentos view content">
            <h3><?= h($departamento->nome_departamento) ?></h3>
            <table>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= $departamento->has('empresa') ? $this->Html->link($departamento->empresa->nome_empresa, ['controller' => 'Empresas', 'action' => 'view', $departamento->empresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($departamento->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nome Departamento') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($departamento->nome_departamento)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Relacão : Setores') ?></h4>
                <?php if (!empty($departamento->setores)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Setor') ?></th>
                            <th><?= __('Departamento Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($departamento->setores as $setores) : ?>
                        <tr>
                            <td><?= h($setores->id) ?></td>
                            <td><?= h($setores->nome_setor) ?></td>
                            <td><?= h($setores->departamento_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Setores', 'action' => 'view', $setores->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Setores', 'action' => 'edit', $setores->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Setores', 'action' => 'delete', $setores->id], ['confirm' => __('Are you sure you want to delete # {0}?', $setores->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Relacão : Vagas') ?></h4>
                <?php if (!empty($departamento->vagas)) : ?>
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
                        <?php foreach ($departamento->vagas as $vagas) : ?>
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
