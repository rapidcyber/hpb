<?php
  $c = $categories;
  foreach($c as $data):
    echo $this->html->link($data['name'], array("controller"=>"menus","action"=>"all",strtolower($data['menu']['name']),strtolower($data['name'])) );
  endforeach;
?>
