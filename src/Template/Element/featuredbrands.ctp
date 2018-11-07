<?php 
  $featured = $this->requestAction('merchants/index/4');
  //debug($featured);exit;
  $firstItem = !empty($featured[0][0]['Item']) ? $featured[0][0]['Item'][0]: null;
  $firstBg = null;
  if(!empty($firstItem)){
    $firstBg = isset($firstItem['Image'][1]) ? "uploads/images/".$firstItem['Image'][1]['img_file'] : "img/prod-img/zaramc.jpg"; 
  }
  
?> 
<section class="container featured-brands combo-box box-b">
  <div class="prod-box" style="background-image:url('<?php echo $firstBg; ?>')">
    <div class="clearfix heading">
      <h1 class="flt-left">
      <?php
        echo $this->html->link($firstItem['Merchant']['name'] ,array('controller'=>'merchants','action'=>'profile',$firstItem['Merchant']['name']));
      ?>
      </h1>
    </div>
  </div>
  <div class="prod-list clearfix">
    <h3 class="heading flt-left">FEATURED ONLY @ HPB</h3>
    <ul class="flt-left clearfix">
    <?php
      $c = 0; $bg = null;
      foreach($featured[0][0]['Item'] as $item):
      
    ?>
      <li class="flt-left">
      <?php
        $bg = isset($item['Image'][1]) ? "uploads/images/".$item['Image'][1]['img_file'] : "img/prod-img/img2.jpg";
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
