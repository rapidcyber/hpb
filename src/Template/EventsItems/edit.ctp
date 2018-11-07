<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\EventsItem $eventsItem
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $eventsItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $eventsItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Events Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Events'), ['controller' => 'Events', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Event'), ['controller' => 'Events', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="eventsItems form large-9 medium-8 columns content">
    <?= $this->Form->create($eventsItem) ?>
    <fieldset>
        <legend><?= __('Edit Events Item') ?></legend>
        <?php
            echo $this->Form->control('event_id', ['options' => $events]);
            echo $this->Form->control('item_id', ['options' => $items]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
