<?php
  $m = $this->requestAction('menus/topmenus');
  foreach($m as $l){
    echo $this->html->link($l, array("controller"=>"menus","action"=>"all",strtolower($l)), array('title' => $l,'escape' => false));
  }
?>