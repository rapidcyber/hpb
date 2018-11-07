<?php $m = $this->requestAction('categories/shop/'.$param); ?>
<?php
  $i = $this->Helpers->getArrayFirstIndex($m);
  for($i=i;$i<(count($m)+i);$i++){
    if( $i==1 ): echo "<ul>"; endif;
?>
    <li><?php  echo $this->html->link($m[$i], '/'.strtolower($m[$i]), array('title' => $m[$i],'escape' => false)); ?></li>
<?php
    if( $i%5 <= 0 ): echo "</ul><ul>"; endif; 
    if( count($m) < 5 && $i == 5 ): echo "</ul>"; endif;
  } 
?>