<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 *
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{

  public function beforeFilter(Event $event){
    parent::beforeFilter($event);

    $session = $this->getRequest()->getSession();
    $user = $session->read('Auth.user');
    if($user['group_id'] == 1) {
      $this->authAllow('index');
    }

  }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'Users', 'Transactions']
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }
    /**
     * Cart method
     *
     * @return \Cake\Http\Response|void
     */
    public function cart(){
      $user = $this->getRequest()->getSession()->read('Auth.User');
      $order = $this->Orders->newEntity();
      if($this->request->is('post')){
        $data = $this->request->getData();
        $item = $this->Orders->Items->findById($data['item_id'])->firstOrFail();
        $total = $item->price * $data['quantity'];
        $data['total_price'] = $total;
        $order = $this->Orders->patchEntity($order, $data);
        if($this->Orders->save($order)){
          $this->Flash->success(__('The order has been added to cart.'));
        } else {
          $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
      }



      $this->paginate = [
        'contain' => ['Items.Images'],
        'conditions' => [
          'user_id' => $user['id'],
          'status' => 'Pending'
        ]
      ];

      $orders = $this->paginate($this->Orders);
      $total_price = $this->Orders->find()
      ->select([
        'total' => 'sum(Orders.total_price)'
      ])->where([
        'Orders.user_id' => $user['id'],
        'Orders.status' => 'Pending'
      ])->firstOrFail();
      // debug($orders);exit;
      //debug($virtualFields);exit;
      $this->set(compact('orders','total_price'));
    }
    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Items', 'Users', 'Transactions']
        ]);

        $this->set('order', $order);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $items = $this->Orders->Items->find('list', ['limit' => 200]);
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $transactions = $this->Orders->Transactions->find('list', ['limit' => 200]);
        $this->set(compact('order', 'items', 'users', 'transactions'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The order has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The order could not be saved. Please, try again.'));
        }
        $items = $this->Orders->Items->find('list', ['limit' => 200]);
        $users = $this->Orders->Users->find('list', ['limit' => 200]);
        $transactions = $this->Orders->Transactions->find('list', ['limit' => 200]);
        $this->set(compact('order', 'items', 'users', 'transactions'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The order has been deleted.'));
        } else {
            $this->Flash->error(__('The order could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    public function isAuthorized($user){

      if($this->request->getParam('action') === 'cart') {
        $session = $this->getRequest()->getSession();
        $s = $session->read('Auth.User');
        if($s){
          return true;
        } else {
          return false;
        }
      }

      if (in_array($this->request->getParam('action'), ['edit', 'delete', 'view'])) {
          // Prior to 3.4.0 $this->request->params('pass.0')
          $userId = (int)$this->request->getParam('pass.0');
          if ($userId == $user['id']) {
            return true;
          }
      }
      return parent::isAuthorized($user);
    }
}
