<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotto $lotto
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Lotto'), ['action' => 'edit', $lotto->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lotto'), ['action' => 'delete', $lotto->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lotto->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lotto'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lotto'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="lotto view large-9 medium-8 columns content">
    <h3><?= h($lotto->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('COMBINATIONS') ?></th>
            <td><?= h($lotto->COMBINATIONS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($lotto->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('JACKPOT') ?></th>
            <td><?= $this->Number->format($lotto->JACKPOT) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('WINNERS') ?></th>
            <td><?= $this->Number->format($lotto->WINNERS) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('DATE') ?></th>
            <td><?= h($lotto->DATE) ?></td>
        </tr>
    </table>
</div>
