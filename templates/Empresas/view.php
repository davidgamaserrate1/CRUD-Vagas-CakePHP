<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav"style="background-color: white; border-radius: 15px; width:260px; height: 270px;">
        <div class="container">
        <br><h4 class="heading"><?= __('Ações') ?></h4>
            <?= $this->Html->link(__('Editar Empresa'), ['action' => 'edit', $empresa->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Empresa'), ['action' => 'delete', $empresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresa->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Listar Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Criar Empresa'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
        <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empresas view content">
            <h3><?= h($empresa->nome_empresa) ?></h3>
            <table>
                <tr>
                    <th><?= __('Estabelecimentos Empresa') ?></th>
                    <td><?= $empresa->has('estabelecimentos_empresa') ? $this->Html->link($empresa->estabelecimentos_empresa->empresa_nome, ['controller' => 'EstabelecimentosEmpresas', 'action' => 'view', $empresa->estabelecimentos_empresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($empresa->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nome Empresa') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($empresa->nome_empresa)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Relacão : Departamentos') ?></h4>
                <?php if (!empty($empresa->departamentos)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Departamento') ?></th>
                            <th><?= __('Empresa Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($empresa->departamentos as $departamentos) : ?>
                        <tr>
                            <td><?= h($departamentos->id) ?></td>
                            <td><?= h($departamentos->nome_departamento) ?></td>
                            <td><?= h($departamentos->empresa_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Departamentos', 'action' => 'view', $departamentos->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Departamentos', 'action' => 'edit', $departamentos->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Departamentos', 'action' => 'delete', $departamentos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $departamentos->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Relacão : Vagas') ?></h4>
                <?php if (!empty($empresa->vagas)) : ?>
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
                        <?php foreach ($empresa->vagas as $vagas) : ?>
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
