<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstabelecimentosEmpresa $estabelecimentosEmpresa
 */
?>
<div class="row">
    <aside class="column">
    <div class="side-nav"style="background-color: white; border-radius: 15px; width:260px; height: 270px;">
            <br><div class="container">
                <h4 class="heading"><?= __('Ações') ?></h4>
                <?= $this->Html->link(__('Editar Estabelecimentos '), ['action' => 'edit', $estabelecimentosEmpresa->id], ['class' => 'side-nav-item']) ?>
                <?= $this->Form->postLink(__('Deletar Estabelecimentos '), ['action' => 'delete', $estabelecimentosEmpresa->id], ['confirm' => __('Are you sure you want to delete # {0}?', $estabelecimentosEmpresa->id), 'class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('Lisar Estabelecimentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
                <?= $this->Html->link(__('Criar Estabelecimentos '), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            </div>
            <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estabelecimentosEmpresas view content">
            <h3><?= h($estabelecimentosEmpresa->empresa_nome) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($estabelecimentosEmpresa->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Numero') ?></th>
                    <td><?= $this->Number->format($estabelecimentosEmpresa->numero) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Empresa Nome') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($estabelecimentosEmpresa->empresa_nome)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Logradouro') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($estabelecimentosEmpresa->logradouro)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Bairro') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($estabelecimentosEmpresa->bairro)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Relacão : Empresas') ?></h4>
                <?php if (!empty($estabelecimentosEmpresa->empresas)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nome Empresa') ?></th>
                            <th><?= __('Estabelecimentos Empresa Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($estabelecimentosEmpresa->empresas as $empresas) : ?>
                        <tr>
                            <td><?= h($empresas->id) ?></td>
                            <td><?= h($empresas->nome_empresa) ?></td>
                            <td><?= h($empresas->estabelecimentos_empresa_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Empresas', 'action' => 'view', $empresas->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Empresas', 'action' => 'edit', $empresas->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Empresas', 'action' => 'delete', $empresas->id], ['confirm' => __('Are you sure you want to delete # {0}?', $empresas->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Relacão : Vagas') ?></h4>
                <?php if (!empty($estabelecimentosEmpresa->vagas)) : ?>
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
                        <?php foreach ($estabelecimentosEmpresa->vagas as $vagas) : ?>
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
