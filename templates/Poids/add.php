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
            <?= $this->Html->link(__('List Poids'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="poids form content">
            <?= $this->Form->create($poid) ?>
            <fieldset>
                <legend><?= __('Add Poid') ?></legend>
                <?php
                    echo $this->Form->control('userid');
                    echo $this->Form->control('datepesee');
                    echo $this->Form->control('kg');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
