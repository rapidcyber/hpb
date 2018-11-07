<?php
  $this->assign('title','HPB: Home Philippines Bazaar -- Home');
  echo $this->cell('Content::newArrivals');
  // echo $this->cell('Content::featuredbrands',['4']);

  echo $this->cell('Content::featuredbrands',['3']);
  echo $this->element('hpbag');
  //echo $this->element('whatshot');
  //echo $this->element('mostwanted');
?>
