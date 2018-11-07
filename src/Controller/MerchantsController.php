<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Merchants Controller
 *
 * @property \App\Model\Table\MerchantsTable $Merchants
 *
 * @method \App\Model\Entity\Merchant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */

class MerchantsController extends AppController
{

  public function beforeFilter(Event $event){

    parent::beforeFilter($event);

    $this->Auth->allow('index','getevent');

    $itmarg = $this->request->getParams['pass'];

    $itpass = isset($itmarg[1]);
    if(!$itpass){
      $this->Auth->allow('profile');
    }
    // debug($itmarg[1]);exit;
  }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index($id = null)
    {
      /*
        $this->paginate = [
            'contain' => ['Users', 'Types', 'Themes']
        ];
        $merchants = $this->paginate($this->Merchants);

        $this->set(compact('merchants'));
      */
      $merchants = $this->Merchants->find('all')->toArray();
      $this->loadModel('Events');
      $wanted = $this->Events->find('all',
        array(
          'conditions' => array(
            'id' => 1,
          ),
          'contain' => ['Items', 'Items.Images', 'Items.Merchants']
        )
      )->toArray();

      $hot = $this->Events->find('all', array(
        'conditions' => array(
          'id' => 2
        ),
        'contain' => ['Items', 'Items.Images', 'Items.Merchants']
      ))->toArray();
      /*
      if(is_numeric($id)){
        $event = $this->Events->find('all', array( 'conditions' => array( 'id' => $id ) ))->toArray();
      }

      if(isset($event)) {
        $this->set(compact('event'));
      }*/
      $this->set(compact('merchants','wanted','hot'));

    }

    /**
     * View method
     *
     * @param string|null $id Merchant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $merchant = $this->Merchants->get($id, [
            'contain' => ['Users', 'Types', 'Themes', 'Items', 'Monthlymerchants', 'Photos']
        ]);

        $this->set('merchant', $merchant);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $merchant = $this->Merchants->newEntity();
        if ($this->request->is('post')) {
            $merchant = $this->Merchants->patchEntity($merchant, $this->request->getData());
            if ($this->Merchants->save($merchant)) {
                $this->Flash->success(__('The merchant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The merchant could not be saved. Please, try again.'));
        }
        $users = $this->Merchants->Users->find('list', ['limit' => 200]);
        $types = $this->Merchants->Types->find('list', ['limit' => 200]);
        $themes = $this->Merchants->Themes->find('list', ['limit' => 200]);
        $this->set(compact('merchant', 'users', 'types', 'themes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Merchant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $merchant = $this->Merchants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $merchant = $this->Merchants->patchEntity($merchant, $this->request->getData());
            if ($this->Merchants->save($merchant)) {
                $this->Flash->success(__('The merchant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The merchant could not be saved. Please, try again.'));
        }
        $users = $this->Merchants->Users->find('list', ['limit' => 200]);
        $types = $this->Merchants->Types->find('list', ['limit' => 200]);
        $themes = $this->Merchants->Themes->find('list', ['limit' => 200]);
        $this->set(compact('merchant', 'users', 'types', 'themes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Merchant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $merchant = $this->Merchants->get($id);
        if ($this->Merchants->delete($merchant)) {
            $this->Flash->success(__('The merchant has been deleted.'));
        } else {
            $this->Flash->error(__('The merchant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function profile($name,$item=null){
      $name = urldecode($name);
      $merchant = $this->Merchants->find('all',[
        'contain' => ['Themes'],
        'conditions' => ['Merchants.name' => $name]
      ])->firstOrFail();
      $user = $this->Auth->user();
      $this->loadModel('Themes');

      if($user && $user['id'] == $merchant->user_id || $user['group_id'] == 1){
        $mechantT = $this->Merchants->get($merchant->id);

        if($this->request->is(['post', 'put', 'patch'])){
          $mechantT->theme_id  = $this->request->getData()['theme_id'];

          if($this->Merchants->save($mechantT)){
            $this->Flash->success(__('The theme has been saved.'));
            return $this->redirect(['action'=>'profile', $mechantT->name]);
          } else {
            $this->Flash->error(__('The theme could not be saved. Please try again.'));
          }
        }
      }

      $id = $merchant->id;
      $this->loadModel('Items');

      $this->paginate = [
        'contain' => ['Images','Merchants', 'ItemsSizes'],
        'conditions' => ['merchant_id' => $id],
        'limit' => 9,
        'order' => ['modified' => 'desc']
      ];
      $items = $this->paginate($this->Items);

      $this->loadModel('Events');
      $events = $this->Events->Items->find('all', array('conditions' => array('Items.merchant_id' => $id)));
      $themes = $this->Themes->find('all');
      $theme = $this->Themes->findById($merchant->theme_id);

      if($merchant->type_id == 1){
        $themes = $this->Themes->find('all', array(
          'conditions' => array(
            'type_id' => 1
          )
        ));
      }

      if($merchant->type_id == NULL || $merchant->type_id == 1){
        $limit = 2;
      }

      if(!$item == null){
        $requested = $this->Items->find('all', [
          'contain' => ['Images'],
          'conditions' => ['id' => $item]
        ]);
        $this->loadModel('ItemsSizes');
        $isizes = $this->ItemsSizes->find('all', array(
          'contain' => ['Sizes'],
          'conditions' => array(
            'item_id' => $item
          )
        ));
        $this->set(compact('merchant','items','events','requested','isizes'));
      } else {
        $requested = null;
        $this->set(compact('merchant','items','events','requested'));
      }

      $this->set(compact('users', 'themes', 'user', 'items', 'theme'));
    }
}
