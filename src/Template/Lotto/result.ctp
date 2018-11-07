<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Lotto[]|\Cake\Collection\CollectionInterface $lotto
 */
?>

<div class="lotto index large-12 medium-12 columns content">
  <h3><?= __('Lotto 6/42') ?></h3>
  <table cellpadding="0" cellspacing="0">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">number</th>
                <th scope="col">Occurences</th>

            </tr>
        </thead>
        <tbody>
          <?php foreach ($lotto as $key => $value): ?>
            <tr>
                <td><?php echo $key?></td>
                <td><?php echo $value?></td>
            </tr>
          <?php endforeach;?>
        </tbody>
  </table>
</div>
<div class="lotto index large-12 medium-12 columns content">
  <h3><?= __('Ultra Lotto 6/58') ?></h3>
  <table cellpadding="0" cellspacing="0">
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col">number</th>
                <th scope="col">Occurences</th>

            </tr>
        </thead>
        <tbody>
          <?php foreach ($ultraLotto as $key => $value): ?>
            <tr>
                <td><?php echo $key?></td>
                <td><?php echo $value?></td>
            </tr>
          <?php endforeach;?>
        </tbody>
  </table>
</div>
