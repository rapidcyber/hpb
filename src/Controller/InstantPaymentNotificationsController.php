<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * InstantPaymentNotifications Controller
 *
 * @property \App\Model\Table\InstantPaymentNotificationsTable $InstantPaymentNotifications
 *
 * @method \App\Model\Entity\InstantPaymentNotification[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class InstantPaymentNotificationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Payers', 'Receivers', 'Auths', 'ParentTxns', 'Txns', 'AuctionBuyers', 'Subscrs', 'Cases']
        ];
        $instantPaymentNotifications = $this->paginate($this->InstantPaymentNotifications);

        $this->set(compact('instantPaymentNotifications'));
    }

    /**
     * View method
     *
     * @param string|null $id Instant Payment Notification id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $instantPaymentNotification = $this->InstantPaymentNotifications->get($id, [
            'contain' => ['Payers', 'Receivers', 'Auths', 'ParentTxns', 'Txns', 'AuctionBuyers', 'Subscrs', 'Cases', 'PaypalItems']
        ]);

        $this->set('instantPaymentNotification', $instantPaymentNotification);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $instantPaymentNotification = $this->InstantPaymentNotifications->newEntity();
        if ($this->request->is('post')) {
            $instantPaymentNotification = $this->InstantPaymentNotifications->patchEntity($instantPaymentNotification, $this->request->getData());
            if ($this->InstantPaymentNotifications->save($instantPaymentNotification)) {
                $this->Flash->success(__('The instant payment notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instant payment notification could not be saved. Please, try again.'));
        }
        $payers = $this->InstantPaymentNotifications->Payers->find('list', ['limit' => 200]);
        $receivers = $this->InstantPaymentNotifications->Receivers->find('list', ['limit' => 200]);
        $auths = $this->InstantPaymentNotifications->Auths->find('list', ['limit' => 200]);
        $parentTxns = $this->InstantPaymentNotifications->ParentTxns->find('list', ['limit' => 200]);
        $txns = $this->InstantPaymentNotifications->Txns->find('list', ['limit' => 200]);
        $auctionBuyers = $this->InstantPaymentNotifications->AuctionBuyers->find('list', ['limit' => 200]);
        $subscrs = $this->InstantPaymentNotifications->Subscrs->find('list', ['limit' => 200]);
        $cases = $this->InstantPaymentNotifications->Cases->find('list', ['limit' => 200]);
        $this->set(compact('instantPaymentNotification', 'payers', 'receivers', 'auths', 'parentTxns', 'txns', 'auctionBuyers', 'subscrs', 'cases'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Instant Payment Notification id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $instantPaymentNotification = $this->InstantPaymentNotifications->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $instantPaymentNotification = $this->InstantPaymentNotifications->patchEntity($instantPaymentNotification, $this->request->getData());
            if ($this->InstantPaymentNotifications->save($instantPaymentNotification)) {
                $this->Flash->success(__('The instant payment notification has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The instant payment notification could not be saved. Please, try again.'));
        }
        $payers = $this->InstantPaymentNotifications->Payers->find('list', ['limit' => 200]);
        $receivers = $this->InstantPaymentNotifications->Receivers->find('list', ['limit' => 200]);
        $auths = $this->InstantPaymentNotifications->Auths->find('list', ['limit' => 200]);
        $parentTxns = $this->InstantPaymentNotifications->ParentTxns->find('list', ['limit' => 200]);
        $txns = $this->InstantPaymentNotifications->Txns->find('list', ['limit' => 200]);
        $auctionBuyers = $this->InstantPaymentNotifications->AuctionBuyers->find('list', ['limit' => 200]);
        $subscrs = $this->InstantPaymentNotifications->Subscrs->find('list', ['limit' => 200]);
        $cases = $this->InstantPaymentNotifications->Cases->find('list', ['limit' => 200]);
        $this->set(compact('instantPaymentNotification', 'payers', 'receivers', 'auths', 'parentTxns', 'txns', 'auctionBuyers', 'subscrs', 'cases'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Instant Payment Notification id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $instantPaymentNotification = $this->InstantPaymentNotifications->get($id);
        if ($this->InstantPaymentNotifications->delete($instantPaymentNotification)) {
            $this->Flash->success(__('The instant payment notification has been deleted.'));
        } else {
            $this->Flash->error(__('The instant payment notification could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
