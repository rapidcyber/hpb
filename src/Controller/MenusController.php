<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Menus Controller
 *
 * @property \App\Model\Table\MenusTable $Menus
 *
 * @method \App\Model\Entity\Menu[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MenusController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $menus = $this->paginate($this->Menus);

        $this->set(compact('menus'));
    }

    /**
     * View method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => ['Categories', 'Items']
        ]);

        $this->set('menu', $menu);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $menu = $this->Menus->newEntity();
        if ($this->request->is('post')) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
        $this->set(compact('menu'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $menu = $this->Menus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $menu = $this->Menus->patchEntity($menu, $this->request->getData());
            if ($this->Menus->save($menu)) {
                $this->Flash->success(__('The menu has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The menu could not be saved. Please, try again.'));
        }
        $this->set(compact('menu'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Menu id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $menu = $this->Menus->get($id);
        if ($this->Menus->delete($menu)) {
            $this->Flash->success(__('The menu has been deleted.'));
        } else {
            $this->Flash->error(__('The menu could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /**
     * Topmenus method
     *
     * @return \Cake\Http\Response|void
     */
    public function topmenus(){
      $q = $this->Menus->find('list')->toArray();
      //debug($q);die();
      //$this->set('menus',$q);
      if ($this->request->is('get')){
          //return $q;
      } else {
        $this->set('menus',$q);
      }
    }
    public function all($str=null,$str2=null,$str3=null,$str4=null){
      $catId = null; $id = null; $itemId = null; $merchName = null;
      $this->loadModel('Categories');
      $this->loadModel('Items');
      if(!$str == null){
        $query = $this->Menus->find('all',array("conditions" => array("name" => $str)));

        if(!empty($query->toArray())){
          $all = $query->first()->toArray();
          $id = $all['id'];
        }
      }

      if(!$str == null && !$str2 == null){
        $str2 = strtolower($str2);
        $query = $this->Categories->find('all',array("conditions" => array("name" => $str2)));
        $cat = $query->first()->toArray();
        $catId = $cat['id'];
      }

      if(!$catId == null){
        $items = $this->Categories->Items->find("all",array(
          "conditions" => array("menu_id" => $id, "category_id" => $catId),
          'contain'=>['Images','Merchants']
        ))->toArray();
        $parent = ucfirst($str);
        $title = ucfirst($str2);
        $this->set(compact('items','title','parent'));
      }

      if($str == null && $str2 == null){
        $all = $this->Menus->find('all');
        $under = $this->Categories->find('all');
        $items = $this->Items->find('all',['contain' => ['Images','Merchants']])->toArray();
        $title = "All";
        $this->set(compact('all','title','under','items'));
      } else {
        if(is_numeric($id) && $str2 == null){
          $items = $this->Menus->Items->find('all',array("conditions" => array("Items.menu_id" => $id), 'contain'=>['Images','Merchants']))->toArray();
          $title = $str;
          $this->set(compact('all','title','items'));
        } else {
          if($str == "brands" && $str2 == null){
            $title = "Brands";
            $all = $this->Items->find()
                      ->select('brand')
                      ->group('brand');

            $items = $this->Items->find('all',['contain' => ['Images','Merchants']])->toArray();
            $under = $this->Items->find('all', ['contain' => ['Images','Merchants']]);
            $this->set(compact('all','title','under','items'));
          }
          if($str == "new-arrivals" && $str2 == null){
            $items = $this->Items->find('all',['contain' => ['Images','Merchants']])->toArray();
            $title = "New Arrivals";
            $date = date('Y-m-d H:i:s', strtotime("-2 weeks"));
            $under = $this->Items->find('all', array( "conditions" => array( "created >" => $date  ) ) )->toArray();
            // debug($items);exit;
            $this->set(compact('items','title','under', 'all'));
          }
        }
      }
    }

    public function newArrivals(){
      $all = $this->Item->find('all');
      $title = "New Arrivals";
      $date = date('Y-m-d H:i:s', strtotime("-2 weeks"));
      $under = $this->Item->find('all', array( "conditions" => array( "Item.created >" => $date  ) ) );
      //$under = $this->Item->find('all');
      if($this->request->is('requested')){
        return array($all,$title,$under);
      } else {
        $this->set(compact('all','title','under'));
        $this->render('../Elements/newArrivals');
      }
    }
    public function recent(){
      $all = $this->Menus->find('all')->toArray();
      $this->loadModel('Categories');
      $under = $this->Categories->find('all',array("order"=>array('Categories.modified DESC'),'contain' =>['Menus']))->toArray();
      // debug($under);exit;
      $title = "Hot Categories";
      $this->set(compact('all','title','under'));
      // $this->render('../Elements/viewall');
    }
}
