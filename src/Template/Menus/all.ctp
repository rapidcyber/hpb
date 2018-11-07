<section class="containter combo-box category-box box-d">
  <div class="item-details clearfix">
    <div class="bazaar-name flt-left clearfix"><a href="#bazaar-name">HPB</a></div>
    <div class="item-detail flt-left clearfix">
      <span class="price flt-left"><?php echo ucfirst($title); ?></span>
    </div>
  </div>
</section>
<?php if($title == 'Brands'):?>
  <?php
    foreach($all as $groups):

  ?>
  <section class="container combo-box brands box-c">
    <div class="clearfix heading">
      <h1 class="flt-left"><a><?php echo $groups->brand;?></a></h1>
    </div>
    <div class="item-container clearfix">
      <?php
        foreach($under as $item):
          if($item->brand == $groups->brand):

      ?>
      <div class="flt-left img-box">
        <?php echo $this->Html->image("uploads/images/thumb/small/".$item->images[0]['img_file'],array("alt"=>$item->name,"data-name" => $item->name, "data-price" => $item->price, "data-description" => $item->description, "data-link" =>
        $item->merchant->name, "title" => $item->name, "data-id" => $item->id)); ?>
        <div class="button-hider"><?php echo $this->Html->link("I WANT IT!",array("controller"=>"merchants","action"=>"profile",$item->merchant->name,$item->id),array("class"=>"hover-button block")) ?></div>
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
<?php
else:
  // debug($items);die();
 if(count($items) > 0):
?>
<section class="container complete-list combo-box box-f">
  <div class="clearfix heading">
    <h1 class="flt-left"><a href="#whats-hot">Item list for <?php echo ucfirst($title); ?></a></h1>
  </div>
  <div class="clearfix split-box">
    <div class="item-container-b flt-left">
      <div class="item-inner-b clearfix">
        <?php
          $ctr=0; $firstData;
          // debug($items);die();
          foreach($items as $item){
            if($ctr == 0){
              $firstData['id'] = $item['id'];
              $firstData['name'] = $item['name'];
              $firstData['price'] = $item['price'];
              $firstData['description'] = $item['description'];
              $firstData['merchant'] = $item['merchant']['name'];
              $firstData['link'] = $item['merchant']['name'].'/'.$item['name'];
            }
            if($item['images']){
              echo '<span>';
              echo $this->Html->image('uploads/images/thumb/small/'.$item['images'][0]['img_file'],array('class'=>$ctr == 0 ? "current" : "",'data-name'=>$item['name'], 'data-price'=>$item['price'],'data-description'=>$item['description'],'data-link'=>$item['merchant']['name'],'alt'=>$item['name'],'data-id'=>$item['id']));
              $ctr++;
              if(!empty($item['ItemsSize'])){
                foreach ($item['ItemsSize'] as $itemsize) {
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
                  echo $this->Form->input('', array('type'=>'hidden','value' => $sz));
                }
              }
              echo '</span>';
            }
            $ctr++;
          }
        ?>
      </div>
    </div>
    <div class="item-details-b clearfix flt-right">
      <div class="lrg-img">
        <?php
          $img = 'logo+bag-s.png';

          if(!empty($items[0]['images'])){
            $img = 'uploads/images/thumb/large/'. $items[0]['images'][0]['img_file'];
          }
          echo $this->Html->image($img);
        ?>
      </div>
      <div class="bazaar-name clearfix"><a><?php echo $firstData['merchant'] ?></a></div>
      <div class="item-detail clearfix">
        <div class="price"><a href="#get-it">P <?php echo $firstData['price']; ?></a></div>
      </div>
      <div class="item-actions clearfix">
        <?php echo $this->Html->link('GET THIS!',array('controller'=>'merchants','action'=>'profile',$firstData['merchant'],$firstData['id']),array('class'=>'get-item flt-left')); ?>
        <a href="#see" class="zoom-item flt-left">Look closer!</a>
      </div>
      <div class="box-description">
        <p><?php echo $firstData['description']; ?></p>
      </div>
    </div>
  </div>
</section>
<?php
  else:
?>
<section class="container complete-list combo-box box-f">
  <div class="clearfix heading">
    <h1 class="flt-left"><a href="#whats-hot">Item list for <?php echo ucfirst($title); ?></a></h1>
  </div>
  <div class="no-queries">
    <h1>Sorry, We have nothing in here.. yet. :(</h1>
  </div>
</section>
<?php endif; endif;?>
