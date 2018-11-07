<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Merchant $merchant
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Merchant'), ['action' => 'edit', $merchant->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Merchant'), ['action' => 'delete', $merchant->id], ['confirm' => __('Are you sure you want to delete # {0}?', $merchant->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Merchants'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Merchant'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Types'), ['controller' => 'Types', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Type'), ['controller' => 'Types', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Themes'), ['controller' => 'Themes', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Theme'), ['controller' => 'Themes', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Items'), ['controller' => 'Items', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Item'), ['controller' => 'Items', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Monthlymerchants'), ['controller' => 'Monthlymerchants', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Monthlymerchant'), ['controller' => 'Monthlymerchants', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Photos'), ['controller' => 'Photos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Photo'), ['controller' => 'Photos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="merchants view large-9 medium-8 columns content">
    <h3><?= h($merchant->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $merchant->has('user') ? $this->Html->link($merchant->user->id, ['controller' => 'Users', 'action' => 'view', $merchant->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Type') ?></th>
            <td><?= $merchant->has('type') ? $this->Html->link($merchant->type->name, ['controller' => 'Types', 'action' => 'view', $merchant->type->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Theme') ?></th>
            <td><?= $merchant->has('theme') ? $this->Html->link($merchant->theme->name, ['controller' => 'Themes', 'action' => 'view', $merchant->theme->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($merchant->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($merchant->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Contact') ?></th>
            <td><?= h($merchant->contact) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($merchant->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($merchant->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($merchant->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('About') ?></h4>
        <?= $this->Text->autoParagraph(h($merchant->about)); ?>
    </div>
    <div class="row">
        <h4><?= __('Interests') ?></h4>
        <?= $this->Text->autoParagraph(h($merchant->interests)); ?>
    </div>
    <div class="row">
        <h4><?= __('Likes') ?></h4>
        <?= $this->Text->autoParagraph(h($merchant->likes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Items') ?></h4>
        <?php if (!empty($merchant->items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Merchant Id') ?></th>
                <th scope="col"><?= __('Category Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Brand') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Product Code') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($merchant->items as $items): ?>
            <tr>
                <td><?= h($items->id) ?></td>
                <td><?= h($items->merchant_id) ?></td>
                <td><?= h($items->category_id) ?></td>
                <td><?= h($items->menu_id) ?></td>
                <td><?= h($items->name) ?></td>
                <td><?= h($items->brand) ?></td>
                <td><?= h($items->price) ?></td>
                <td><?= h($items->description) ?></td>
                <td><?= h($items->created) ?></td>
                <td><?= h($items->modified) ?></td>
                <td><?= h($items->product_code) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Items', 'action' => 'view', $items->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Items', 'action' => 'edit', $items->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Items', 'action' => 'delete', $items->id], ['confirm' => __('Are you sure you want to delete # {0}?', $items->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Monthlymerchants') ?></h4>
        <?php if (!empty($merchant->monthlymerchants)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Merchant Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($merchant->monthlymerchants as $monthlymerchants): ?>
            <tr>
                <td><?= h($monthlymerchants->id) ?></td>
                <td><?= h($monthlymerchants->merchant_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Monthlymerchants', 'action' => 'view', $monthlymerchants->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Monthlymerchants', 'action' => 'edit', $monthlymerchants->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Monthlymerchants', 'action' => 'delete', $monthlymerchants->id], ['confirm' => __('Are you sure you want to delete # {0}?', $monthlymerchants->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Photos') ?></h4>
        <?php if (!empty($merchant->photos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Merchant Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Img File') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($merchant->photos as $photos): ?>
            <tr>
                <td><?= h($photos->id) ?></td>
                <td><?= h($photos->merchant_id) ?></td>
                <td><?= h($photos->name) ?></td>
                <td><?= h($photos->img_file) ?></td>
                <td><?= h($photos->created) ?></td>
                <td><?= h($photos->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Photos', 'action' => 'view', $photos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Photos', 'action' => 'edit', $photos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Photos', 'action' => 'delete', $photos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $photos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
