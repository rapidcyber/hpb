<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemsSizes Controller
 *
 * @property \App\Model\Table\ItemsSizesTable $ItemsSizes
 *
 * @method \App\Model\Entity\ItemsSize[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsSizesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Items', 'Sizes']
        ];
        $itemsSizes = $this->paginate($this->ItemsSizes);

        $this->set(compact('itemsSizes'));
    }

    /**
     * View method
     *
     * @param string|null $id Items Size id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemsSize = $this->ItemsSizes->get($id, [
            'contain' => ['Items', 'Sizes']
        ]);

        $this->set('itemsSize', $itemsSize);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemsSize = $this->ItemsSizes->newEntity();
        if ($this->request->is('post')) {
            $itemsSize = $this->ItemsSizes->patchEntity($itemsSize, $this->request->getData());
            if ($this->ItemsSizes->save($itemsSize)) {
                $this->Flash->success(__('The items size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The items size could not be saved. Please, try again.'));
        }
        $items = $this->ItemsSizes->Items->find('list', ['limit' => 200]);
        $sizes = $this->ItemsSizes->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('itemsSize', 'items', 'sizes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Items Size id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemsSize = $this->ItemsSizes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemsSize = $this->ItemsSizes->patchEntity($itemsSize, $this->request->getData());
            if ($this->ItemsSizes->save($itemsSize)) {
                $this->Flash->success(__('The items size has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The items size could not be saved. Please, try again.'));
        }
        $items = $this->ItemsSizes->Items->find('list', ['limit' => 200]);
        $sizes = $this->ItemsSizes->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('itemsSize', 'items', 'sizes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Items Size id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemsSize = $this->ItemsSizes->get($id);
        if ($this->ItemsSizes->delete($itemsSize)) {
            $this->Flash->success(__('The items size has been deleted.'));
        } else {
            $this->Flash->error(__('The items size could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
