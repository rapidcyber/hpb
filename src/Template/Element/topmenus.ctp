<?php
  $m = $this->requestAction('menus/topmenus');
  foreach($m as $l){
    echo $this->html->link('<span>'.$l.'</span>', array("controller"=>"menus","action"=>"all",strtolower($l)),array('class' => 'main-lnk icon-lnk', 'title' => 'Home Philippines Bazaar - '.$l,'escape' => false));
  }
?>
