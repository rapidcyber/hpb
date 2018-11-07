<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ItemsImages Controller
 *
 * @property \App\Model\Table\ItemsImagesTable $ItemsImages
 *
 * @method \App\Model\Entity\ItemsImage[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ItemsImagesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Imgs', 'Items']
        ];
        $itemsImages = $this->paginate($this->ItemsImages);

        $this->set(compact('itemsImages'));
    }

    /**
     * View method
     *
     * @param string|null $id Items Image id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $itemsImage = $this->ItemsImages->get($id, [
            'contain' => ['Imgs', 'Items']
        ]);

        $this->set('itemsImage', $itemsImage);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $itemsImage = $this->ItemsImages->newEntity();
        if ($this->request->is('post')) {
            $itemsImage = $this->ItemsImages->patchEntity($itemsImage, $this->request->getData());
            if ($this->ItemsImages->save($itemsImage)) {
                $this->Flash->success(__('The items image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The items image could not be saved. Please, try again.'));
        }
        $imgs = $this->ItemsImages->Imgs->find('list', ['limit' => 200]);
        $items = $this->ItemsImages->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemsImage', 'imgs', 'items'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Items Image id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $itemsImage = $this->ItemsImages->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $itemsImage = $this->ItemsImages->patchEntity($itemsImage, $this->request->getData());
            if ($this->ItemsImages->save($itemsImage)) {
                $this->Flash->success(__('The items image has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The items image could not be saved. Please, try again.'));
        }
        $imgs = $this->ItemsImages->Imgs->find('list', ['limit' => 200]);
        $items = $this->ItemsImages->Items->find('list', ['limit' => 200]);
        $this->set(compact('itemsImage', 'imgs', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Items Image id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $itemsImage = $this->ItemsImages->get($id);
        if ($this->ItemsImages->delete($itemsImage)) {
            $this->Flash->success(__('The items image has been deleted.'));
        } else {
            $this->Flash->error(__('The items image could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
