<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\VagasLog $vagasLog
 */
?>
<div class="row">

    <div class="column-responsive column-80" style="margin-left:100px">
        <div class="vagasLogs view content">
            <h3><?= h($vagasLog->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($vagasLog->id) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Nome Vaga') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($vagasLog->nome_vaga)); ?>
                </blockquote>
            </div>
            <div class="text">
                <strong><?= __('Acao') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($vagasLog->acao)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
