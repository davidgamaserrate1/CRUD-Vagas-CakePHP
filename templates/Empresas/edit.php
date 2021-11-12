<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 * @var string[]|\Cake\Collection\CollectionInterface $estabelecimentosEmpresas
 */
?>
<div class="row">
    <aside class="column">
    <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 170px;">
    <div class="container">
            <h4 class="heading"><?= __('Ação') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar Empresa'),
                ['action' => 'delete', $empresa->id],
                ['confirm' => __('Deseja realmente excluir a Empresa # {0}?', $empresa->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Empresas'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
            <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Edit Empresa') ?></legend>
                <?php
                    echo $this->Form->control('nome_empresa');
                    echo $this->Form->control('estabelecimentos_empresa_id', ['options' => $estabelecimentosEmpresas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
