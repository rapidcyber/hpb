<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Monthlymerchants Controller
 *
 * @property \App\Model\Table\MonthlymerchantsTable $Monthlymerchants
 *
 * @method \App\Model\Entity\Monthlymerchant[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MonthlymerchantsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Merchants']
        ];
        $monthlymerchants = $this->paginate($this->Monthlymerchants);

        $this->set(compact('monthlymerchants'));
    }

    /**
     * View method
     *
     * @param string|null $id Monthlymerchant id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $monthlymerchant = $this->Monthlymerchants->get($id, [
            'contain' => ['Merchants']
        ]);

        $this->set('monthlymerchant', $monthlymerchant);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $monthlymerchant = $this->Monthlymerchants->newEntity();
        if ($this->request->is('post')) {
            $monthlymerchant = $this->Monthlymerchants->patchEntity($monthlymerchant, $this->request->getData());
            if ($this->Monthlymerchants->save($monthlymerchant)) {
                $this->Flash->success(__('The monthlymerchant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monthlymerchant could not be saved. Please, try again.'));
        }
        $merchants = $this->Monthlymerchants->Merchants->find('list', ['limit' => 200]);
        $this->set(compact('monthlymerchant', 'merchants'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Monthlymerchant id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $monthlymerchant = $this->Monthlymerchants->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $monthlymerchant = $this->Monthlymerchants->patchEntity($monthlymerchant, $this->request->getData());
            if ($this->Monthlymerchants->save($monthlymerchant)) {
                $this->Flash->success(__('The monthlymerchant has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The monthlymerchant could not be saved. Please, try again.'));
        }
        $merchants = $this->Monthlymerchants->Merchants->find('list', ['limit' => 200]);
        $this->set(compact('monthlymerchant', 'merchants'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Monthlymerchant id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $monthlymerchant = $this->Monthlymerchants->get($id);
        if ($this->Monthlymerchants->delete($monthlymerchant)) {
            $this->Flash->success(__('The monthlymerchant has been deleted.'));
        } else {
            $this->Flash->error(__('The monthlymerchant could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
