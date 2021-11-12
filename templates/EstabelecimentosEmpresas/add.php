<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EstabelecimentosEmpresa $estabelecimentosEmpresa
 */
?>
<div class="row">
    <aside class="column">
        <aside class="column">
            <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 160px;"><div>
                <div class="container"> <br><br>
                    <a href="http://localhost/vagascake/estabelecimentos-empresas/">Exibir Estabelecimentos</a> <br>

                </div>


        </aside>
    </aside>
    <div class="column-responsive column-80">
        <div class="estabelecimentosEmpresas form content">
            <?= $this->Form->create($estabelecimentosEmpresa) ?>
            <fieldset>
                <legend><?= __('Add Estabelecimentos Empresa') ?></legend>
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
