<section class="containter combo-box category-box box-d">
  <div class="item-details clearfix">
    <div class="bazaar-name flt-left clearfix"><a href="#bazaar-name">HPB</a></div>
    <div class="item-detail flt-left clearfix">
      <span class="price flt-left"><?php echo ucfirst($title); ?></span>
    </div>
  </div>
</section>
<?php
  foreach($all as $groups):
?>
<section class="container combo-box brands box-c">
  <div class="clearfix heading">
    <h1 class="flt-left"><a><?php echo $groups['Item']['brand']; ?></a></h1>
  </div>
  <div class="item-container clearfix">
    <?php 
      foreach($under as $item):
        if($item['Item']['brand'] == $groups['Item']['brand']):
    ?>
    <div class="flt-left img-box">
      <?php echo $this->html->image("uploads/images/thumb/small/".$item['Image'][0]['img_file'],array("alt"=>$item['Item']['name'],"data-name" => $item['Item']['name'], "data-price" => $item['Item']['price'], "data-description" => $item['Item']['description'], "data-link" => $item["Merchant"]["name"], "title" => $item['Item']['name'], "data-id" => $item['Item']['id'])); ?>
      <div class="button-hider"><?php echo $this->html->link("I WANT IT!",array("controller"=>"merchants","action"=>"profile",$item['Merchant']['name'],$item['Item']['id']),array("class"=>"hover-button block")) ?></div>
    </div>
    <?php 
        endif;
      endforeach;
    ?>   
  </div>
  <div class="box-description">
    <p><a class="to-top">Return to top</a></p>
  </div>
</section>
<?php endforeach; ?>