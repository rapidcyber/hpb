<?php
  $m = $menus;
  $t = $type;
  if($t == 'topmenus'){
    foreach($m as $l){
      echo $this->html->link('<span>'.$l.'</span>', array("controller"=>"menus","action"=>"all",strtolower($l)),array('class' => 'main-lnk icon-lnk', 'title' => 'Home Philippines Bazaar - '.$l,'escape' => false));
    }
  } elseif($t == 'normalmenus'){
    foreach($m as $l){
      echo $this->html->link($l, array("controller"=>"menus","action"=>"all",strtolower($l)), array('title' => $l,'escape' => false));
    }
  } else {
    foreach($m as $l){
      $c = $l == 'Womens' ? 'frs-icon-lnk' : '';
      echo $this->html->link($l, array("controller" => "menus", "action" => "all",$l) , array('class' => 'main-lnk icon-lnk '.$c, 'title' => 'Home Philippines Bazaar - '.$l));
  	}
  }
