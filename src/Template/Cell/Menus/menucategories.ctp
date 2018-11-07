<?php
  $mc = $categories;
  $m = $menus;
  $c = 1;

  // debug($m);exit;
  foreach($m as $lnk){

    echo "<div class='submenu-list clearfix' id='".strtolower($lnk)."'>";
    echo "<ul>";
	    foreach($mc as $data){
        // debug($data);
        if($data['menu']['name'] == $lnk){
          echo "<li>";
          echo $this->html->link($data['name'], array("controller"=>"menus","action"=>"all",strtolower($data['menu']['name']),strtolower($data['name'])));
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
