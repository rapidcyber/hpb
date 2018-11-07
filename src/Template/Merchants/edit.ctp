<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Merchant $merchant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $merchant->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $merchant->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Merchants'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Themes'), ['controller' => 'Themes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Theme'), ['controller' => 'Themes', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Monthlymerchants'), ['controller' => 'Monthlymerchants', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Monthlymerchant'), ['controller' => 'Monthlymerchants', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="merchants form large-9 medium-8 columns content">
    <?= $this->Form->create($merchant) ?>
    <fieldset>
        <legend><?= __('Edit Merchant') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('type_id', ['options' => $types]);
            echo $this->Form->control('theme_id', ['options' => $themes]);
            echo $this->Form->control('photo');
            echo $this->Form->control('name');
            echo $this->Form->control('about');
            echo $this->Form->control('interests');
            echo $this->Form->control('likes');
            echo $this->Form->control('contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
