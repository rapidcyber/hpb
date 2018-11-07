<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Items Controller
 *
 * @property \App\Model\Table\ItemsTable $Items
 *
 * @method \App\Model\Entity\Item[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Merchants', 'Categories', 'Menus']
        ];
        $items = $this->paginate($this->Items);

        $this->set(compact('items'));
    }

    /**
     * View method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Merchants', 'Categories', 'Menus', 'Images', 'Events', 'Sizes', 'Orders']
        ]);

        $this->set('item', $item);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $item = $this->Items->newEntity();
        if ($this->request->is('post')) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $merchants = $this->Items->Merchants->find('list', ['limit' => 200]);
        $categories = $this->Items->Categories->find('list', ['limit' => 200]);
        $menus = $this->Items->Menus->find('list', ['limit' => 200]);
        $images = $this->Items->Images->find('list', ['limit' => 200]);
        $events = $this->Items->Events->find('list', ['limit' => 200]);
        $sizes = $this->Items->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('item', 'merchants', 'categories', 'menus', 'images', 'events', 'sizes'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $item = $this->Items->get($id, [
            'contain' => ['Images', 'Events', 'Sizes']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $item = $this->Items->patchEntity($item, $this->request->getData());
            // debug($item);exit;
            if ($this->Items->save($item)) {
                $this->Flash->success(__('The item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The item could not be saved. Please, try again.'));
        }
        $merchants = $this->Items->Merchants->find('list', ['limit' => 200]);
        $categories = $this->Items->Categories->find('list', ['limit' => 200]);
        $menus = $this->Items->Menus->find('list', ['limit' => 200]);
        $images = $this->Items->Images->find('list', ['limit' => 200]);
        $events = $this->Items->Events->find('list', ['limit' => 200]);
        $sizes = $this->Items->Sizes->find('list', ['limit' => 200]);
        $this->set(compact('item', 'merchants', 'categories', 'menus', 'images', 'events', 'sizes'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $item = $this->Items->get($id);
        if ($this->Items->delete($item)) {
            $this->Flash->success(__('The item has been deleted.'));
        } else {
            $this->Flash->error(__('The item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
