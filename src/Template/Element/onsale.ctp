<?php 
  $onsale = $this->requestAction('merchants/index/3');
  $firstItem = $onsale[0][0]['Item'][0];
  $firstBg = isset($firstItem['Image'][1]) ? "uploads/images/".$firstItem['Image'][1]['img_link'] : "img/prod-img/img2.jpg";
?>
<section class="container on-sale combo-box box-b">
  <div class="prod-box" style="background-image:url('<?php echo $firstBg; ?>')">
    <div class="clearfix heading">
      <h1 class="flt-left">
      <?php
        echo $this->html->link('P '.$firstItem['price'].' on SALE @ HPB!',array('controller'=>'merchants','action'=>'profile',$firstItem['Merchant']['name'],$firstItem['id']));
      ?>
      </h1>
      <h2 class="flt-right"><?php echo $firstItem['description']; ?></h2>
    </div>
  </div>
  <div class="prod-list clearfix">
    <h3 class="heading flt-left">ON SALE ONLY @ HPB</h3>
    <ul class="flt-left clearfix">
    <?php
      $c = 0; $bg = null;
      foreach($onsale[0][0]['Item'] as $item):
      $bg = isset($item['Image'][1]) ? "uploads/images/".$item['Image'][1]['img_file'] : "img/prod-img/img2.jpg";
    ?>
      <li class="flt-left">
      <?php
        echo $this->html->link(
          $item['name'],
          array('controller' => 'merchants', 'action' => 'profile',$item['Merchant']['name'],$item['id']),
          array('class' => $c == 0 ? "current" : "", 'data-link' => $item['Merchant']['name'], 'data-price' => $item['price'], 'data-heading' => $item['brand'], 'data-description' => $item['description'], 'data-name' => $item['name'], 'data-bgphoto' => $bg)
        );
        $c++;
      ?>
      </li>
    <?php
      endforeach;
    ?>    
    </ul>
  </div>
</section>
