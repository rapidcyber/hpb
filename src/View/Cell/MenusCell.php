<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Menus cell
 */
class MenusCell extends Cell
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
    public function display($type = null)
    {
      $this->loadModel('Menus');
      $menus = $this->Menus->find('list')->toArray();
      $type = $type;
      $this->set(compact('menus','type'));

    }
    /**
     * topmenus method.
     *
     * @return void
     */
    public function topmenus()
    {
      $this->loadModel('Menus');
      $q = $this->Menus->find('list')->toArray();
      $this->set('menus',$q);
    }

    public function menucategories(){
      $this->loadModel('Categories');

      $categories = $this->Categories->find('all',['contain' => 'Menus'])->toArray();

      $this->loadModel('Menus');

      $menus = $this->Menus->find('list')->toArray();

      $this->set(compact('menus', 'categories'));
    }

    public function topcategories(){
      $this->loadModel('Categories');
      $categories = $this->Categories->find('all',['contain' => 'Menus'])->toArray();
      $this->set('categories',$categories);
    }
}
