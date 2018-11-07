<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * PaypalItems Controller
 *
 * @property \App\Model\Table\PaypalItemsTable $PaypalItems
 *
 * @method \App\Model\Entity\PaypalItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PaypalItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['InstantPaymentNotifications']
        ];
        $paypalItems = $this->paginate($this->PaypalItems);

        $this->set(compact('paypalItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Paypal Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $paypalItem = $this->PaypalItems->get($id, [
            'contain' => ['InstantPaymentNotifications']
        ]);

        $this->set('paypalItem', $paypalItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $paypalItem = $this->PaypalItems->newEntity();
        if ($this->request->is('post')) {
            $paypalItem = $this->PaypalItems->patchEntity($paypalItem, $this->request->getData());
            if ($this->PaypalItems->save($paypalItem)) {
                $this->Flash->success(__('The paypal item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paypal item could not be saved. Please, try again.'));
        }
        $instantPaymentNotifications = $this->PaypalItems->InstantPaymentNotifications->find('list', ['limit' => 200]);
        $this->set(compact('paypalItem', 'instantPaymentNotifications'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Paypal Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $paypalItem = $this->PaypalItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $paypalItem = $this->PaypalItems->patchEntity($paypalItem, $this->request->getData());
            if ($this->PaypalItems->save($paypalItem)) {
                $this->Flash->success(__('The paypal item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The paypal item could not be saved. Please, try again.'));
        }
        $instantPaymentNotifications = $this->PaypalItems->InstantPaymentNotifications->find('list', ['limit' => 200]);
        $this->set(compact('paypalItem', 'instantPaymentNotifications'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Paypal Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $paypalItem = $this->PaypalItems->get($id);
        if ($this->PaypalItems->delete($paypalItem)) {
            $this->Flash->success(__('The paypal item has been deleted.'));
        } else {
            $this->Flash->error(__('The paypal item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
