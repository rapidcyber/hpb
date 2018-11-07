<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Monthlymerchant $monthlymerchant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Monthlymerchant'), ['action' => 'edit', $monthlymerchant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Monthlymerchant'), ['action' => 'delete', $monthlymerchant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monthlymerchant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Monthlymerchants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monthlymerchant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['controller' => 'Merchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['controller' => 'Merchants', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="monthlymerchants view large-9 medium-8 columns content">
    <h3><?= h($monthlymerchant->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Merchant') ?></th>
            <td><?= $monthlymerchant->has('merchant') ? $this->Html->link($monthlymerchant->merchant->name, ['controller' => 'Merchants', 'action' => 'view', $monthlymerchant->merchant->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($monthlymerchant->id) ?></td>
        </tr>
    </table>
</div>
