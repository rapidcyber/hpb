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
                echo '<div class="flt-left img-box">';
                echo $this->Html->image("uploads/images/thumb/small/".$arr[$i]['images'][0]['img_file'],array("data-name" => $arr[$i]['name'], "data-price" => $arr[$i]['price'], "data-description" => $arr[$i]['description'], "data-id" => $arr[$i]['id'], "data-link" => $arr[$i]["merchant"]["name"]));
                echo '</div>';
              }
            ?>
        </div>
    </div>
    <div class="item-details clearfix">
        <div class="bazaar-name flt-left clearfix">
            <?php
              if($arr){
                echo $this->Html->link($arr[0]['name'], array('controller' => 'Merchants', 'action' => 'profile', $arr[0]['merchant']['name']));
              }
            ?>
        </div>
        <div class="item-detail flt-left clearfix">
            <span class="price flt-left">
                <a href="#get-it">P <?php echo !empty($arr) ? $arr[0]['price'] : null; ?></a>
            </span>
        </div>
        <?php
          if($arr) {
            echo $this->Html->link("GET IT!", array("controller"=>"Merchants","action" =>"profile",$arr[0]['merchant']['name'],$arr[0]['id']), array("class" => "get-item flt-right") );
          }
        ?>
    </div>
</section>
