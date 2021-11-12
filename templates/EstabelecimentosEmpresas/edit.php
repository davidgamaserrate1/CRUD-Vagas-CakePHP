<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstabelecimentosEmpresa $estabelecimentosEmpresa
 */
?>
<div class="row">
    <aside class="column">
    <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 170px;">
    <div class="container">
<br>    <h4 class="heading"><?= __('Ação') ?></h4>
            <?= $this->Form->postLink(
                __('Deletar vaga'),
                ['action' => 'delete', $estabelecimentosEmpresa->id],
                ['confirm' => __('Deseja realmente excluir o Estabelecimento # {0}?', $estabelecimentosEmpresa->id), 'class' => 'side-nav-item']
            ) ?>
    </div>

             <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            </div>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="estabelecimentosEmpresas form content">
            <?= $this->Form->create($estabelecimentosEmpresa) ?>
            <fieldset>
                <legend><?= __('Edit Estabelecimentos Empresa') ?></legend>
                <?php
                    echo $this->Form->control('empresa_nome');
                    echo $this->Form->control('logradouro');
                    echo $this->Form->control('numero');
                    echo $this->Form->control('bairro');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
