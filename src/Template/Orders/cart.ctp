<section class="container combo-box box-c">
  <div class="clearfix heading">
    <h1 class="flt-left"><a>Shopping Cart</a></h1>
    <h2 class="flt-left">
    <?php
      $res = $total_price['total'];
			$web = $res * 0.05;
      $vat = $res * 0.12;
			$ship = 0;
			if($res < 1000.00){
				$ship = 100;
			}

			$tres = $res + $vat + $web + $ship;
			if(!empty($res)){
				echo 'TOTAL:&nbsp;&nbsp;' . $this->Number->currency($tres, 'PHP');
			}
      // debug($this->Number->currency($tres, 'PHP'));exit;
    ?>

    </h2>
  </div>
  <div class="orders index">
    <div class="cart-details clearfix">
      <ul class="clearfix">

        <?php foreach($orders as $order): ?>
        <li class="clearfix user-container">
          <a href="<?php echo $this->request->webroot . 'img/uploads/images/thumb/large/' . $order['item']['images'][0]['img_file']; ?>" class="flt-left zoom-item">
            <?php echo $this->Html->image('uploads/images/thumb/small/' . $order['item']['images'][0]['img_file']);?>
          </a>

          <div class="item-details flt-right">
            <strong><?php echo $order['item']['name']?></strong><br />
            <span>Size: <?php echo $order['size']?></span><br />
            <span>Quantity: <?php echo $order['quantity']?></span><br />
            <span>Price: <?php echo 'P' . $order['item']['price'] * $order['quantity']?></span>
            <div class="item-actions clearfix">
              <?php echo $this->Form->postLink(__('Remove'), array('action' => 'delete', $order['id']), array('class' => 'action-btn-sml'), __('Are you sure you want to delete %s?', $order['item']['name'])); ?>
            </div>
          </div>
        </li>
        <?php
          endforeach;
        ?>
      </ul>
      <div class="item-details clearfix">
        <div class="bazaar-name flt-left clearfix"><a href="#bazaar-name"><?php echo count($orders)?> Items</a></div>
        <div class="item-detail flt-left clearfix">
          <span class="price flt-left"><a href="#get-it"><?php echo !empty($res) ? $this->Number->currency($tres, 'P') : ''; ?></a></span>
        </div>

        <form method="post" id="TransactionCartForm" action="<?php echo $this->Url->build(array('controller' => 'transactions', 'action' => 'checkout', 'all'));?>">
          <input type="hidden" value="POST" name="_method">
          <?php
            echo $this->Form->input('status',array('value'=>'Pending', 'type' => 'hidden'));
            echo $this->Form->submit('GET ALL', array('class' => 'get-item flt-right'));
          ?>
        </form>

      </div>
    </div>
  </div>
</section>
