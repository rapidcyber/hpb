<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Merchant[]|\Cake\Collection\CollectionInterface $merchants
 */
 // debug($wanted);
?>
<section class="containter combo-box category-box box-d">
  <div class="item-details clearfix">
    <div class="bazaar-name flt-left clearfix"><a href="#bazaar-name">HPB</a></div>
    <div class="item-detail flt-left clearfix">
      <span class="price flt-left">All Bazaars</span>
    </div>
  </div>
  <div class="item-container profile-listing clearfix">
    <?php foreach ($merchants as $item):?>
      <div class="profile-view flt-left">
        <?php echo $this->Html->image('uploads/images/'.$item['photo'], array('url' => array("controller" => "merchants", "action" => "profile", $item['name']), "width" => 100, "height" => "100") ); ?>
        <h5><?php echo $item['Merchant']['name'] ?></h5>
      </div>
    <?php endforeach ?>
  </div>
</section>
<!-- Most Wanted -->
<section class="container most-wanted combo-box box-c">
  <div class="clearfix heading">
      <h1 class="flt-left">
          <a href="#most-wanted"><?php echo $wanted[0]['name'];?></a>
      </h1>
      <h2 class="flt-left">The most wanted and most visited bazaars around the Philippines! See them all here.</h2>
  </div>
  <div class="item-container no-slide clearfix">
      <?php $arr = $wanted[0]['items'];
        // debug($wanted);exit;
        for($i=0;$i<count($arr);$i++):
      ?>

      <div class="flt-left img-box">
        <?php echo $this->html->image("uploads/images/thumb/small/".$arr[$i]['images'][0]['img_file'],array("data-name" => $arr[$i]['name'], "data-price" => $arr[$i]['price'], "data-description" => $arr[$i]['description'], "data-id" => $arr[$i]['id'], "data-link" => $arr[$i]["merchant"]["name"]));?>
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
<!-- What's Hot -->
<section class="container whats-hot combo-box box-c">
  <div class="clearfix heading">
    <h1 class="flt-left"><a href="#whats-hot"><?php echo $hot[0]['name'];?></a></h1>
    <h2 class="flt-left">The most wanted and most visited bazaars around the Philippines! See them all here.</h2>
  </div>
  <div class="item-container no-slide clearfix">
    <?php
      $arr = $hot[0]['items'];

      for($i=0; $i<(count($arr)); $i++):
    ?>
      <div class="flt-left img-box">
        <?php echo $this->Html->image("uploads/images/thumb/small/".$arr[$i]['images'][0]['img_file'],array("data-name" => $arr[$i]['name'], "data-price" => $arr[$i]['price'], "data-description" => $arr[$i]['description'], "data-id" => $arr[$i]['id'], "data-link" => $arr[$i]['merchant']['name'] )); ?>
        <div class="button-hider"><?php echo $this->Html->link("I WANT IT!",array("controller"=>"merchants","action"=>"profile",$arr[$i]['merchant']['name'],$arr[$i]['id']), array("class" => "hover-button block")) ?></div>
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
<?php //echo $this->cell('Content:whatshot'); ?>
<?php echo $this->cell('Content::newArrivals'); ?>
