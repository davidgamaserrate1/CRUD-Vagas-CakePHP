<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Empresa $empresa
 * @var \Cake\Collection\CollectionInterface|string[] $estabelecimentosEmpresas
 */
?>
<div class="row">
<aside class="column">
        <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 160px;"><div>
            <div class="container"> <br><br>
                <a href="http://localhost/vagascake/empresas/">Exibir Empresas</a> <br>
                <a href="http://localhost/vagascake/estabelecimentos-empresas/add">Criar Estabelecimento</a> <br></div>


    </aside>
    <div class="column-responsive column-80">
        <div class="empresas form content">
            <?= $this->Form->create($empresa) ?>
            <fieldset>
                <legend><?= __('Add Empresa') ?></legend>
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
