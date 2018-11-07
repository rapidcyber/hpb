<?php
  $c = $this->requestAction('categories/show');
  foreach($c as $data):
    echo $this->html->link($data['Category']['name'], array("controller"=>"menus","action"=>"all",strtolower($data['Menu']['name']),strtolower($data['Category']['name'])) );
  endforeach;
?>