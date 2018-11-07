<?php
  $this->Html->css(
    $merchant->theme->filename,
    ['block' => true]);
?>
<section class="containter
combo-box category-box box-d profile-box">
  <div class="item-details clearfix">
    <div class="bazaar-name flt-left clearfix">
      <a>Profile</a>
    </div>
    <div class="item-detail flt-left clearfix">
      <span class="price flt-left"><?php echo $merchant->name ?></span>
    </div>
    <?php
      $session = $this->request->getSession();
	    $logged = $session->read('Auth.User');
	    if($logged && $logged['id'] == $merchant->user_id || $logged['group_id'] == 1):
	  ?>
	    <div class="theme flt-right clearfix">
	      <?php
	        echo $this->Form->create('Merchants', array('url' => array('action' => 'profile', $merchant->name)));
        ?>
        <input type="hidden" value="POST" name="_method">
        <div class="input select">
          <label for="MerchantThemeId">Themes:&nbsp;</label>
          <select id="MerchantThemeId" name="theme_id" data-root="<?php echo $this->request->getAttribute('webroot')?>">
            <?php
              foreach($themes as $temp):
            ?>
            <option data-theme="<?php echo $temp->filename?>" value="<?php echo $temp->id ?>"<?php echo $merchant->theme->filename == $temp->filename ? 'selected' : '' ?>><?php echo $temp->name?></option>
            <?php endforeach?>
          </select>
        </div>
	      <?php
          echo $this->Form->button('Save', ['type' => 'submit']);
	        echo $this->Form->end();
	      ?>
	    </div>
		<?php endif;?>
  </div>
  <div class="profile-details clearfix">
    <div class="flt-left member-logo">
      <div class="member-logo-holder">
        <?php echo $this->Html->image("uploads/images/".$merchant->photo,array("title" => ($merchant->name . "'s logo"), "alt" => $merchant->name, "width" => 200, "height" => 200)); ?>
      </div>
    </div>
    <div class="flt-left member-details">
      <div class="member-details-container">
        <h1><?php echo $merchant->name ?></h1>
        <hr />
        <div class="clearfix">
          <h4 class="flt-left">About</h4>
          <p class="flt-left"><?php echo $merchant->about ?></p>
        </div>
        <div class="clearfix">
          <h4 class="flt-left">Interests</h4>
          <p class="flt-left"<?php echo $merchant->interests ?></p>
        </div>
        <div class="clearfix">
          <h4 class="flt-left">Contact us</h4>
          <p class="flt-left"><?php echo $merchant->contact ?></p>
        </div>
        <div class="clearfix">
          <h4 class="flt-left">Follow/Like us on:</h4>
          <p class="flt-left">
            <div class="fb-like" data-href="<?php echo $this->request->getAttribute('webroot') . $this->request->url;?>" data-send="false" data-layout="button_count" data-width="450" data-show-faces="false" data-font="arial"></div>
            <a href="https://twitter.com/share" class="twitter-share-button" data-lang="en"<?php echo $this->Html->image('twit.png') ?></a>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="container complete-list combo-box box-f">
  <div class="clearfix heading">
    <h1 class="flt-left"><a href="#whats-hot">Item List for <?php echo $merchant->name ?></a></h1>
  </div>
  <div class="clearfix split-box">
    <div class="item-container-b flt-left">
      <div id="item-list" class="item-inner-b clearfix">
        <?php
          $ctr=0;
          $firstData = [];
          $sz = NULL;
          foreach($items as $item){
            if($ctr == 0){
              $firstData['name'] = $item->name;
              $firstData['price'] = $item->price;
              $firstData['id'] = $item->id;
              $firstData['description'] = $item->description;
              $firstData['merchant'] = $item->merchant->name;
              $firstData['link'] = $item->merchant['name'].'/'.$item->name;
            }
            if($item['images']){
              echo '<span>';
              echo $this->html->image('uploads/images/thumb/small/'.$item->images[0]['img_file'],array('class'=>$ctr == 0 ? "current" : "",'data-name'=>$item->name, 'data-price'=>$item->price,'data-description'=>$item->description,'data-link'=>$item->merchant['name'],'alt'=>$item->name,'data-id'=>$item->id));
              $ctr++;
              if(!empty($item->items_sizes)){
                foreach ($item->items_sizes as $itemsize) {
                  switch ($itemsize['size_id']) {
                    case 1:
                      $sz = 'S';
                      break;
                    case 2:
                      $sz = 'M';
                      break;
                    case 3:
                      $sz = 'L';
                      break;
                    case 4:
                      $sz = 'XL';
                      break;
                    case 5:
                      $sz = 'XXL';
                      break;
                    case 6:
                      $sz = 'XXL';
                      break;
                    default:
                        $sz = NULL;
                      break;
                  }
                  echo $this->Form->control('', array('type'=>'hidden','value' => $sz));
                }
              }
              echo '</span>';
            }
          }
       ?>

      </div>
      <div class="paging">
        <?php
          echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
          echo $this->Paginator->numbers(array('separator' => ''));
          echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
      </div>
    </div>
    <div class="item-details-b clearfix flt-right">
      <div class="lrg-img">
        <?php
          $img = 'logo+bag-s.png';
          $items = $items->toArray();
          if(!empty($items[0]['images'])){
            $img = 'uploads/images/thumb/large/'. $items[0]['images'][0]['img_file'];
          }
          echo $this->Html->image($img);
        ?>
      </div>
      <div class="bazaar-name clearfix"><a><?php
        echo $firstData['name']
      ?></a></div>
      <div class="item-detail clearfix">
        <div class="sizes">
          <strong>Sizes: </strong>
          <?php


            $itemsSizes = $items[0]['items_sizes'];
            if(!empty($itemsSizes)){
              foreach ($itemsSizes as $itemsize) {
                switch ($itemsize['size_id']) {
                    case 1:
                      $sz = 'S';
                      break;
                    case 2:
                      $sz = 'M';
                      break;
                    case 3:
                      $sz = 'L';
                      break;
                    case 4:
                      $sz = 'XL';
                      break;
                    case 5:
                      $sz = 'XXL';
                      break;
                    case 6:
                      $sz = 'XXL';
                      break;
                    default:
                        $sz = NULL;
                      break;
                  }
                echo $this->Html->tag('span', $sz);
              }
            }else{
              echo '<span>Out of stock</span>';
            }
          ?>
        </div>
        <div class="price"><a href="#get-it">P <?php echo $firstData['price']; ?></a></div>
        <p><?php echo $firstData['description']; ?></p>
      </div>
      <div class="item-actions clearfix">
        <?php echo $this->Html->link('GET THIS!',array('controller'=>'merchants','action'=>'profile',$firstData['merchant'],$firstData['id']),array('class'=>'get-item flt-left')); ?>
        <?php
          echo $this->Html->link('Look closer!', '#', array('class'=>'zoom-item flt-left'));
        ?>
      </div>
    </div>
  </div>
</section>
<?php
  if(!$requested == null):
?>
<div class="buy-item-box">
  <div class="clearfix">
    <div class="flt-left">
      <div class="buy-pic">
      <?php
        $requested = $requested->toArray();
        $blownImage = isset($requested[0]['images'][1]['img_file']) ? $requested[0]['images'][1]['img_file'] : $requested[0]['images'][0]['img_file'];
        echo $this->Html->image('uploads/images/thumb/large/'.$blownImage);
      ?>
      </div>
    </div>
    <div class="flt-right">
      <div class="buy-details">
        <h1><?php echo $requested[0]['name']; ?></h1>
        <hr />
        <p><span class="brand"><?php echo $requested[0]['brand']; ?></span> -- <?php echo $requested[0]['description']; ?></p>
        <span class="hidden" id="orig-price"><?php echo $requested[0]['price']; ?></span>
        <h2>Price: P<span id="price"><?php echo $requested[0]['price']; ?></span></h2>
        <div class="item-actions clearfix">
          <?php
            $items = $requested[0];
            $user = $this->request->getSession()->read('Auth.User');
            $item = $items['id'];
            $price = $items['price'];
            $vat = $price * 0.12;
            $web = $price * 0.05;
            $ship = 0;
            if($price < 1000){
              $ship = 100;
            }
            $total = $price + $vat + $web + $ship;

						foreach ($isizes as $quants) {
							echo $this->Form->control('', array('id' => $quants->size['name'], 'value' => $quants->stocks, 'type' => 'hidden', 'label'=> false));
						}
          ?>
          <?php if(!empty($isizes->toArray())):?>
						<div class="input select">
							<label for="size">Size</label>
							<select id="size">
								<?php
									foreach ($isizes as $size) {
										echo '<option value="' . $size->size['id'] . '">'.$size->size['name'].'</option>';
									}
								?>
							</select>
						</div>
						<?php
              $isizes = $isizes->toArray();
              // debug($isizes);exit;
							$range = !empty($isizes[0]['stocks']) ? $isizes[0]['stocks'] : 0;
							$rng = $range;
							if ($range >= 10){
								$rng = 10;
							}
              echo $this->Form->control('', array('id' => 'quantity','type' => 'select','label' =>'Quantity', 'options' => array_combine(range(1, $rng), range(1, $rng))));
						?>
          <form method="post" id="TransactionProfileForm" action="<?php echo $this->Url->build(array('controller' => 'transactions', 'action' => 'checkout', $item))?>">
            <input type="hidden" value="POST" name="_method">
            <?php
              echo $this->Form->control('status', array('value' => 'Pending', 'type' => 'hidden'));
              echo $this->Form->control('orders.0.size', array('value'=>'Small', 'type' => 'hidden', 'class' => 'order-size'));
              echo $this->Form->control('orders.0.quantity', array('value'=>1, 'type' => 'hidden', 'class' => 'order-quantity'));
              echo $this->Form->control('orders.0.item_id', array('value' => $item, 'type' => 'hidden'));
              echo $this->Form->submit('CHECKOUT', array('class' => 'action-button'));
              // echo $this->Form->control('Orders.quantity', array('value'=> 1, 'type' => 'hidden', 'class' => 'order-quantity'));

            ?>
          </form>
          <form method="post" id="OrderProfileForm" action="<?php echo $this->Url->build(array('controller' => 'orders', 'action' => 'cart'))?>">
            <input type="hidden" value="POST" name="_method">
            <?php
              echo $this->Form->control('quantity', array('value'=> 1, 'type' => 'hidden', 'class' => 'order-quantity'));
              echo $this->Form->control('item_id', array('type' => 'hidden', 'value' => $item));
              echo $this->Form->control('user_id', array('type' => 'hidden', 'value' => $user['id']));
              echo $this->Form->control('status', array('type' => 'hidden', 'value' => 'Pending'));
              echo $this->Form->control('size', array('value'=> 'Small', 'type' => 'hidden', 'class' => 'order-size'));
              echo $this->Form->submit('Add to cart', array('class' => 'action-button'));
            ?>
          </form>
					<?php else: ?>
						<h1>Sorry, We donnot have stock for this item!</h1>
					<?php endif;?>

        </div>
      </div>
    </div>
  </div>
</div>
<?php endif;?>
<div id="fb-root"></div>
<?php
  $this->Html->script(array('orders','profile'), array('block' => 'script'));
?>
