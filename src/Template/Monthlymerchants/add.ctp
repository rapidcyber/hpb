<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monthlymerchant $monthlymerchant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Monthlymerchants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="monthlymerchants form large-9 medium-8 columns content">
    <?= $this->Form->create($monthlymerchant) ?>
    <fieldset>
        <legend><?= __('Add Monthlymerchant') ?></legend>
        <?php
            echo $this->Form->control('merchant_id', ['options' => $merchants]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
