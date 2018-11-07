<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * EventsItems Controller
 *
 * @property \App\Model\Table\EventsItemsTable $EventsItems
 *
 * @method \App\Model\Entity\EventsItem[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EventsItemsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Events', 'Items']
        ];
        $eventsItems = $this->paginate($this->EventsItems);

        $this->set(compact('eventsItems'));
    }

    /**
     * View method
     *
     * @param string|null $id Events Item id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $eventsItem = $this->EventsItems->get($id, [
            'contain' => ['Events', 'Items']
        ]);

        $this->set('eventsItem', $eventsItem);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $eventsItem = $this->EventsItems->newEntity();
        if ($this->request->is('post')) {
            $eventsItem = $this->EventsItems->patchEntity($eventsItem, $this->request->getData());
            if ($this->EventsItems->save($eventsItem)) {
                $this->Flash->success(__('The events item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The events item could not be saved. Please, try again.'));
        }
        $events = $this->EventsItems->Events->find('list', ['limit' => 200]);
        $items = $this->EventsItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('eventsItem', 'events', 'items'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Events Item id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $eventsItem = $this->EventsItems->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $eventsItem = $this->EventsItems->patchEntity($eventsItem, $this->request->getData());
            if ($this->EventsItems->save($eventsItem)) {
                $this->Flash->success(__('The events item has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The events item could not be saved. Please, try again.'));
        }
        $events = $this->EventsItems->Events->find('list', ['limit' => 200]);
        $items = $this->EventsItems->Items->find('list', ['limit' => 200]);
        $this->set(compact('eventsItem', 'events', 'items'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Events Item id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $eventsItem = $this->EventsItems->get($id);
        if ($this->EventsItems->delete($eventsItem)) {
            $this->Flash->success(__('The events item has been deleted.'));
        } else {
            $this->Flash->error(__('The events item could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
