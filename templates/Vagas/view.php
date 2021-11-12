<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Vaga $vaga
 */
?>
<div class="row">
    <aside class="column"   >


    <div class="side-nav"style="background-color: white; border-radius: 15px; width:260px; height: 210px;">
        <div class="container">
        <h4 class="heading" style="color:black;"><?= __('Ações') ?></h4>
          <?= $this->Html->link(__('Editar Vaga'), ['action' => 'edit', $vaga->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Deletar Vaga'), ['action' => 'delete', $vaga->id], ['confirm' => __('Deseja realmente excluir a vaga # {0}?', $vaga->id), 'class' => 'side-nav-item']) ?>

            <?= $this->Html->link(__('Adicionar Vaga'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
          </div>
          <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
        </div>

    </aside>
    <div class="column-responsive column-80">
        <div class="vagas view content">
            <h3><?= h($vaga->nome_vaga) ?></h3>
            <table>
                <tr>
                    <th><?= __('Departamento') ?></th>
                    <td><?= $vaga->has('departamento') ? $this->Html->link($vaga->departamento->nome_departamento, ['controller' => 'Departamentos', 'action' => 'view', $vaga->departamento->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Empresa') ?></th>
                    <td><?= $vaga->has('empresa') ? $this->Html->link($vaga->empresa->nome_empresa, ['controller' => 'Empresas', 'action' => 'view', $vaga->empresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Estabelecimentos Empresa') ?></th>
                    <td><?= $vaga->has('estabelecimentos_empresa') ? $this->Html->link($vaga->estabelecimentos_empresa->empresa_nome, ['controller' => 'EstabelecimentosEmpresas', 'action' => 'view', $vaga->estabelecimentos_empresa->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Setore') ?></th>
                    <td><?= $vaga->has('setore') ? $this->Html->link($vaga->setore->nome_setor, ['controller' => 'Setores', 'action' => 'view', $vaga->setore->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vaga->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nome Vaga') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($vaga->nome_vaga)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
