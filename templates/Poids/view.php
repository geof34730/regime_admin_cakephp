<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Poid $poid
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Poid'), ['action' => 'edit', $poid->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Poid'), ['action' => 'delete', $poid->id], ['confirm' => __('Are you sure you want to delete # {0}?', $poid->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Poids'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Poid'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="poids view content">
            <h3><?= h($poid->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($poid->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Userid') ?></th>
                    <td><?= $this->Number->format($poid->userid) ?></td>
                </tr>
                <tr>
                    <th><?= __('Kg') ?></th>
                    <td><?= $this->Number->format($poid->kg) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Datepesee') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($poid->datepesee)); ?>
                </blockquote>
            </div>
        </div>
    </div>
</div>
