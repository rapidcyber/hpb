<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotto $lotto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Lotto'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="lotto form large-9 medium-8 columns content">
    <?= $this->Form->create($lotto) ?>
    <fieldset>
        <legend><?= __('Add Lotto') ?></legend>
        <?php
            echo $this->Form->control('COMBINATIONS');
            echo $this->Form->control('DATE');
            echo $this->Form->control('JACKPOT');
            echo $this->Form->control('WINNERS');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
