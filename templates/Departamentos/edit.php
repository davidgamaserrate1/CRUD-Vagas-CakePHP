<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Departamento $departamento
 * @var string[]|\Cake\Collection\CollectionInterface $empresas
 */
?>
<div class="row">
    <aside class="column">
    <div class="side-nav" style="background-color: white; border-radius: 15px; width:260px; height: 160px;">      <div>
        <div class="container"> <br>
            <?= $this->Html->link(__('Listar Departamentos'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $departamento->id],
                ['confirm' => __('Deseja realmente excluir a vaga # {0}?', $departamento->id), 'class' => 'side-nav-item']
            ) ?>
        </div>
        <div style="text-align:center;  background-color:#8BD3DE ;margin-left: 20px;margin-right: 20px; margin-top:10px;border-radius: 10px; backgroud-color:white">
                <?= $this->Html->link(__('voltar'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>

        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="departamentos form content">
            <?= $this->Form->create($departamento) ?>
            <fieldset>
                <legend><?= __('Edit Departamento') ?></legend>
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
