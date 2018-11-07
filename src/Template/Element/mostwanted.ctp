<?php $wanted= $this->requestAction('merchants/index'); ?>
<section class="container most-wanted combo-box box-c">
  <div class="clearfix heading">
      <h1 class="flt-left">
          <a href="#most-wanted"><?php echo $wanted[0][0]['Event']['name'];?></a>
      </h1>
      <h2 class="flt-left">The most wanted and most visited bazaars around the Philippines! See them all here.</h2>
  </div>
  <div class="item-container no-slide clearfix">
      <?php $arr = $wanted[0][0]['Item'];
        for($i=0;$i<count($arr);$i++):
      ?>
      <div class="flt-left img-box">
        <?php echo $this->html->image("uploads/images/thumb/small/".$arr[$i]['Image'][0]['img_file'],array("data-name" => $arr[$i]['name'], "data-price" => $arr[$i]['price'], "data-description" => $arr[$i]['description'], "data-id" => $arr[$i]['id'], "data-link" => $arr[$i]["Merchant"]["name"]));?>
      </div>
      <?php
        if($i == 5){
          break;
        }
        endfor;
      ?>
  </div>
  <div class="box-description">
    <p><a href="#" class="to-top">Return to top</a></p>
  </div>
</section>
