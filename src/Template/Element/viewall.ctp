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
      <h1 class="flt-left"><a><?php echo $data['Menu']['name'] ?></a></h1>
    </div>
    <div class="item-submenu-list clearfix">
      <ul>
<?php 
  foreach($under as $items):
    if($data['Menu']['name'] == $items['Menu']['name']):
      echo "<li>";
      echo $this->html->link($items['Category']['name'], array("controller"=>"menus","action"=>"all",strtolower($items['Menu']['name']),strtolower($items['Category']['name'])));
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