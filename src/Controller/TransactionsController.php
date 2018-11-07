<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Transactions Controller
 *
 * @property \App\Model\Table\TransactionsTable $Transactions
 *
 * @method \App\Model\Entity\Transaction[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TransactionsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $transactions = $this->paginate($this->Transactions);

        $this->set(compact('transactions'));
    }
    /**
     * View method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => ['Users', 'Orders']
        ]);

        $this->set('transaction', $transaction);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $transaction = $this->Transactions->newEntity();
        if ($this->request->is('post')) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->getData());
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success(__('The transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
        }
        $users = $this->Transactions->Users->find('list', ['limit' => 200]);
        $this->set(compact('transaction', 'users'));
    }
    /**
     * Edit method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $transaction = $this->Transactions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $transaction = $this->Transactions->patchEntity($transaction, $this->request->getData());
            if ($this->Transactions->save($transaction)) {
                $this->Flash->success(__('The transaction has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
        }
        $users = $this->Transactions->Users->find('list', ['limit' => 200]);
        $this->set(compact('transaction', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Transaction id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $transaction = $this->Transactions->get($id);
        if ($this->Transactions->delete($transaction)) {
            $this->Flash->success(__('The transaction has been deleted.'));
        } else {
            $this->Flash->error(__('The transaction could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
    /**
     * checkout method
     * @throws NotFoundException
     * @param string $arg
     * @return void
     */
  	public function checkout($arg) {
      $user = $this->Auth->user();

  		$characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
  	 	$string = '';
  	 	for ($i = 0; $i < 3; $i++) {
  	 		 $string .= $characters[rand(0, strlen($characters) - 1)];
  	 	}
      $transaction = $this->Transactions->newEntity();
      $code = $string . '-' . $user['id'];
  		if ($this->request->is('post')) {
        $data = $this->request->getData();
  			if($arg !== 'all'){
          $quan = $data['orders'][0]['quantity'];
  				$itm = $this->Transactions->Orders->Items->findById($arg)->firstOrFail();
  				$itmprice = $itm->price;
  				$total = $itmprice * $quan;
  				$web = $total * 0.05;
  				$vat = $total * 0.12;
  				$ship = 0;

  				if($total < 1000){
  					$ship = 100;
  				}

  				$final = $total + $web + $ship;
          // Transactions data
          $data['total_price'] = $final;
          $data['vat'] = $vat;
          $data['web_fee'] = $web;
          $data['shipping'] = $ship;
          $data['transaction_code'] = $code;
          $data['user_id'] = $user['id'];
          // Oders data
  				$data['orders'][0]['user_id'] = $user['id'];
  				$data['orders'][0]['item_id'] = $arg;
  				$data['orders'][0]['status'] = 'Processing';
  	      $data['orders'][0]['total_price'] = $total;

          $transaction = $this->Transactions->patchEntity($transaction, $data, [
            'associated' => ['Orders']
          ]);

          $savedTransaction = $this->Transactions->save($transaction);
          if($savedTransaction){
            $code = $code . $arg . $savedTransaction->id;
            $tran = $this->Transactions->get($savedTransaction->id);
            $tran->transaction_code = $code;
            if($this->Transactions->save($tran)){
              $this->Flash->success(__('The transaction has been saved.'));
              return $this->redirect(['action' => 'index']);
            } else {
              $this->Transactions->delete($tran);
              $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
            }

          }
  			} else {
          $tto = $this->Transactions->Orders->find();
          $tto->select(['total' => $tto->func()->sum('total_price')])
          ->where(['user_id' => $user['id'],'status' => 'Pending']);
          $tto = $tto->firstOrFail();
  				$total = $tto->total;
  	      $web = $total * 0.05;
  	      $vat = $total * 0.12;
  	      $ship = 0;

  	      if($total < 1000){
  	        $ship = 100;
  	      }

  	      $final = $total + $web + $ship;

  			}

  			$data['user_id'] = $user['id'];
  			$data['total_price'] = $final;
  			$data['web_fee'] = $web;
  			$data['vat'] = $vat;
  			$data['shipping'] = $ship;
  			$data['status'] = 'Processing';
        $data['transaction_code'] = $code;

        $transaction = $this->Transactions->patchEntity($transaction, $data);
        $savedTransaction = $this->Transactions->save($transaction);
        if ($savedTransaction) {
          $code = $code.$savedTransaction->id;
          $tran = $this->Transactions->get($savedTransaction->id);
          $tran->transaction_code = $code;
          if($this->Transactions->save($tran)){
            $this->Transactions->Orders->updateAll(
              array('transaction_id' => $savedTransaction->id, 'status' => 'Processing'),
              array(
                'user_id' => $user['id'],
                'status' => 'Pending'
              )
            );
            $this->Flash->success(__('The transaction has been saved'));
            return $this->redirect(array('controller' => 'orders', 'action' => 'cart'));
          }

        }

        $this->Flash->error(__('The transaction could not be saved. Please, try again.'));
        return $this->redirect($this->referer(['action' => 'index']));
  		}
  	}

    public function isAuthorized($user){
      if($this->request->getParam('action') == 'checkout'){
        return true;
      }
      return parent::isAuthorized($user);
    }
}
