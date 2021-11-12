<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 * @var \Cake\Collection\CollectionInterface|string[] $empresas
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 160px;"><div>
            <div class="container"> <br><br>
                <a href="http://localhost/vagascake/departamentos/">Exibir Departamentos</a> <br>
                <a href="http://localhost/vagascake/empresas/add">Criar Empresa</a> <br>
            </div>


    </aside>
    <div class="column-responsive column-80">
        <div class="departamentos form content">
            <?= $this->Form->create($departamento) ?>
            <fieldset>
                <legend><?= __('Criar Departamento') ?></legend>
                <?php
                    echo $this->Form->control('nome_departamento');
                    echo $this->Form->control('empresa_id', ['options' => $empresas, 'empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
