<?php
  $featured = $event;
  // debug($featured);exit;
  $firstItem = !empty($featured[0]['items']) ? $featured[0]['items'][0]: null;
  $firstBg = null;
  if(!empty($firstItem)){
    $firstBg = isset($firstItem['images'][1]) ? "uploads/images/".$firstItem['images'][1]['img_file'] : "img/prod-img/zaramc.jpg";
  }
  $heading = null;
  switch ($featured[0]['id']) {
    case '1':
      $heading = 'Most Wanted';
      break;
    case '2':
      $heading = 'What&apos;s Hot';
      break;
    case '3':
      $heading = 'ON SALE';
      break;
    case '4':
      $heading = 'FEATURED';
      break;
    default:
      $heading = '';
      break;
  }
?>
<section class="container featured-brands combo-box box-b">
  <div class="prod-box" style="background-image:url('<?php echo $firstBg; ?>')">
    <div class="clearfix heading">
      <h1 class="flt-left">
      <?php
        if(!empty($firstItem)){
          echo $this->html->link($firstItem['merchant']['name'] ,array('controller'=>'merchants','action'=>'profile',$firstItem['merchant']['name']));
        } else {
          echo 'No Featured Brands';
        }
      ?>
      </h1>
    </div>
  </div>
  <div class="prod-list clearfix">
    <h3 class="heading flt-left"><?php echo $heading;?> ONLY @ HPB</h3>
    <?php if(!empty($featured[0]['items'])): //debug($featured[0]['items']);exit;?>
    <ul class="flt-left clearfix">
    <?php
      $c = 0; $bg = null;
      foreach($featured[0]['items'] as $item):
    ?>
      <li class="flt-left">
      <?php
        $bg = isset($item['images'][0]) ?  $this->request->webroot."img/uploads/images/".$item['images'][0]['img_file'] : "img/prod-img/img2.jpg";
        echo $this->Html->link(
          $item['name'],
          array('controller' => 'merchants', 'action' => 'profile',$item['merchant']['name'],$item['id']),
          array('class' => $c == 0 ? "current" : "", 'data-link' => $item['merchant']['name'], 'data-price' => $item['price'], 'data-heading' => $item['brand'], 'data-description' => $item['description'], 'data-name' => $item['name'], 'data-bgphoto' => $bg)
        );
        $c++;
      ?>
      </li>
    <?php
      endforeach;
    ?>
    </ul>
    <?php else:?>
      <ul><li>No <?php echo $heading?> Items</li></ul>
    <?php endif?>
  </div>
</section>
