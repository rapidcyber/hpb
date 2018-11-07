<?php 
  $mc = $this->requestAction('categories/show');
  $m = $this->requestAction('menus/topmenus');
  $c = 1;
  //debug($mc);exit;
  foreach($m as $lnk){
    echo "<div class='submenu-list clearfix' id='".strtolower($lnk)."'>";
    echo "<ul>";
	    foreach($mc as $data){
        if($data['Menu']['name'] == $lnk){
          echo "<li>";
          echo $this->html->link($data['Category']['name'], array("controller"=>"menus","action"=>"all",strtolower($data['Menu']['name']),strtolower($data['Category']['name'])));
          echo "</li>";
          
          if($c > 2){
						echo "</ul><ul>";
						$c = 0;
					}
          $c++;
				}
			}
    echo "</ul></div>";
	}
?>