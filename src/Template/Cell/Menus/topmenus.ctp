<?php
  foreach($menus as $l){
    $c = $l == 'Womens' ? 'frs-icon-lnk' : '';
    echo $this->html->link('<span>'.$l.'</span>', array("controller" => "menus", "action" => "all",$l) , array('class' => 'main-lnk icon-lnk '.$c, 'title' => 'Home Philippines Bazaar - '.$l, 'escape' => false));
    // echo $this->html->link('<span>'.$l.'</span>', array("controller"=>"menus","action"=>"all",strtolower($l)),array('class' => 'main-lnk icon-lnk', 'title' => 'Home Philippines Bazaar - '.$l,'escape' => false));
	}
