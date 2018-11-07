<?php $hot = $this->requestAction('merchants/index'); ?>
<section class="container whats-hot combo-box box-c">
  <div class="clearfix heading">
    <h1 class="flt-left"><a href="#whats-hot"><?php echo $hot[1][0]['Event']['name'];?></a></h1>
    <h2 class="flt-left">The most wanted and most visited bazaars around the Philippines! See them all here.</h2>
  </div>
  <div class="item-container no-slide clearfix">
    <?php
      $arr = $hot[1][0]['Item'];

      for($i=0; $i<(count($arr)); $i++):
    ?>
      <div class="flt-left img-box">
        <?php echo $this->html->image("uploads/images/thumb/small/".$arr[$i]['Image'][0]['img_file'],array("data-name" => $arr[$i]['name'], "data-price" => $arr[$i]['price'], "data-description" => $arr[$i]['description'], "data-id" => $arr[$i]['id'], "data-link" => $arr[$i]['Merchant']['name'] )); ?>
        <div class="button-hider"><?php echo $this->html->link("I WANT IT!",array("controller"=>"merchants","action"=>"profile",$arr[$i]['Merchant']['name'],$arr[$i]['id']), array("class" => "hover-button block")) ?></div>
      </div>
      
    <?php
      if($i == 5){
        break;
      }
      endfor;
    ?>
  </div>
  <div class="box-description">
    <p><a class="to-top">Return to top</a></p>
  </div>
</section>