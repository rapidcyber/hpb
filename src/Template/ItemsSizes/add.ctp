<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ItemsSize $itemsSize
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Items Sizes'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sizes'), ['controller' => 'Sizes', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Size'), ['controller' => 'Sizes', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="itemsSizes form large-9 medium-8 columns content">
    <?= $this->Form->create($itemsSize) ?>
    <fieldset>
        <legend><?= __('Add Items Size') ?></legend>
        <?php
            echo $this->Form->control('item_id', ['options' => $items]);
            echo $this->Form->control('size_id', ['options' => $sizes]);
            echo $this->Form->control('stocks');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
