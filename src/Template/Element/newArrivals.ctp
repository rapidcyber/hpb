<?php
	$wanted = $this->requestAction('menus/newArrivals');
	//debug($wanted);exit;
?>
    <section class="container new-arrivals combo-box box-a">
        <div class="clearfix heading">
            <h1 class="flt-left">
                <a href="#new-arrivals">New Arrivals</a>
            </h1>
            <h2 class="flt-left">The most wanted and most visited bazaars around the Philippines! See them all here.</h2>
        </div>
        <div class="item-slider">
            <a href="#" class="item-slider-nav item-slider-left">Previous</a>
            <a href="#" class="item-slider-nav item-slider-right">Next</a>
            <div class="item-slider-container clearfix">
                <?php
                	$arr = $wanted[0];
                  for($i=0;$i<count($arr);$i++){
                    echo $this->html->image("uploads/images/thumb/small/".$arr[$i]['Image'][0]['img_file'],array("data-name" => $arr[$i]['Item']['name'], "data-price" => $arr[$i]['Item']['price'], "data-description" => $arr[$i]['Item']['description'], "data-id" => $arr[$i]['Item']['id'], "data-link" => $arr[$i]["Merchant"]["name"]));
                  }
                ?>
            </div>
        </div>
        <div class="item-details clearfix">
            <div class="bazaar-name flt-left clearfix">
                <?php
                  if($arr){
                    echo $this->Html->link($arr[0]['Item']['name'], array('controller' => 'merchants', 'action' => 'profile', $arr[0]['Merchant']['name']));
                  }
                ?>
            </div>
            <div class="item-detail flt-left clearfix">
                <span class="price flt-left">
                    <a href="#get-it">P <?php echo !empty($arr) ? $arr[0]['Item']['price'] : null; ?></a>
                </span>
            </div>
            <?php
            	if($arr) {
            		echo $this->html->link("GET IT!", array("controller"=>"merchants","action" =>"profile",$arr[0]['Merchant']['name'],$arr[0]['Item']['id']), array("class" => "get-item flt-right") );
            	}
            ?>
        </div>
    </section>
