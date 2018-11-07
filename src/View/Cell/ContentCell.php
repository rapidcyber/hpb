<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Content cell
 */
class ContentCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Initialization logic run at the end of object construction.
     *
     * @return void
     */
    public function initialize()
    {
    }

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
    }

    public function newArrivals(){
      $this->loadModel('Items');
      $all = $this->Items->find('all',['contain'=>['Images','Merchants']])->toArray();
      $title = "New Arrivals";
      $date = date('Y-m-d H:i:s', strtotime("-2 weeks"));
      $under = $this->Items->find('all', array( "conditions" => array( "Items.created >" => $date ) ) )->toArray();
      $wanted = array($all,$title,$under);
      $this->set('wanted', $wanted);
    }

    public function featuredbrands($id = null){
      $this->loadModel('Events');
      $event = array();
      if(isset($id) && is_numeric($id)){
        $event = $this->Events->find('all')
        ->contain(['Items.Merchants','Items.Images'])
        ->where(['Events.id' => $id])
        ->toArray();
      }
      $this->set('event', $event);
    }
}
