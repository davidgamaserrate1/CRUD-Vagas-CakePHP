<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VagasLog $vagasLog
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Vagas Logs'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="vagasLogs form content">
            <?= $this->Form->create($vagasLog) ?>
            <fieldset>
                <legend><?= __('Add Vagas Log') ?></legend>
                <?php
                    echo $this->Form->control('nome_vaga');
                    echo $this->Form->control('acao');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
