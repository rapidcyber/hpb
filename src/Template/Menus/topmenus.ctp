<?php
  $m = $this->viewVars['menus'];
  foreach($m as $l){
    $c = $l == 'Womens' ? 'frs-icon-lnk' : '';
    echo $this->html->link($l, array("controller" => "menus", "action" => "all",$l) , array('class' => 'main-lnk icon-lnk '.$c, 'title' => 'Home Philippines Bazaar - '.$l));
	}
?>