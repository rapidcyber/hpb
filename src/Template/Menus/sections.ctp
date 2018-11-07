<section class="containter combo-box category-box box-d">
  <div class="item-details clearfix">
    <div class="bazaar-name flt-left clearfix"><a href="#bazaar-name">HPB</a></div>
    <div class="item-detail flt-left clearfix">
      <span class="price flt-left"><?php echo ucfirst($title); ?></span>
    </div>
  </div>
</section>
<?php
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
          foreach($items as $item){
            if($ctr == 0){
              $firstData['id'] = $item['Item']['id'];
              $firstData['name'] = $item['Item']['name'];
              $firstData['price'] = $item['Item']['price'];
              $firstData['description'] = $item['Item']['description'];
              $firstData['merchant'] = $item['Merchant']['name'];
              $firstData['link'] = $item['Merchant']['name'].'/'.$item['Item']['name'];
            }
            if($item['Image']){
              echo '<span>';
              echo $this->html->image('uploads/images/thumb/small/'.$item['Image'][0]['img_file'],array('class'=>$ctr == 0 ? "current" : "",'data-name'=>$item['Item']['name'], 'data-price'=>$item['Item']['price'],'data-description'=>$item['Item']['description'],'data-link'=>$item['Merchant']['name'],'alt'=>$item['Item']['name'],'data-id'=>$item['Item']['id']));
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
          
          if(!empty($items[0]['Image'])){
            $img = 'uploads/images/thumb/large/'. $items[0]['Image'][0]['img_file'];
          }
          echo $this->html->image($img);
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
<?php endif;?>