<section class="containter combo-box category-box box-d">
  <div class="item-details clearfix">
    <div class="bazaar-name flt-left clearfix"><a href="#bazaar-name">HPB</a></div>
    <div class="item-detail flt-left clearfix">
      <span class="price flt-left"><?php echo $title; ?></span>
    </div>
  </div>
</section>
<?php
  foreach($all as $data):
?>
  <section class="container complete-list combo-box box-a">
    <div class="clearfix heading">
      <h1 class="flt-left"><a><?php echo $data['name'] ?></a></h1>
    </div>
    <div class="item-submenu-list clearfix">
      <ul>
<?php
  foreach($under as $items):
    // debug();exit;
    if($data['name'] == $items['menu']['name']):
      echo "<li>";
      echo $this->Html->link($items['name'], array("controller"=>"menus","action"=>"all",strtolower($items['menu']['name']),strtolower($items['name'])));
      echo "</li>";
    endif;
  endforeach;
?>
      </ul>
    </div>
  </section>
<?php
  endforeach;
?>
