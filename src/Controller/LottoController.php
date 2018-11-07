<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
/**
 * Lotto Controller
 *
 * @property \App\Model\Table\LottoTable $Lotto
 *
 * @method \App\Model\Entity\Lotto[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LottoController extends AppController
{

    public function beforeFilter(Event $event){
      parent::beforeFilter($event);

      $this->Auth->allow('index', 'result');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $lotto = $this->paginate($this->Lotto);

        $this->set(compact('lotto'));
    }

    /**
     * View method
     *
     * @param string|null $id Lotto id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $lotto = $this->Lotto->get($id, [
            'contain' => []
        ]);

        $this->set('lotto', $lotto);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $lotto = $this->Lotto->newEntity();
        if ($this->request->is('post')) {
            $lotto = $this->Lotto->patchEntity($lotto, $this->request->getData());
            if ($this->Lotto->save($lotto)) {
                $this->Flash->success(__('The lotto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lotto could not be saved. Please, try again.'));
        }
        $this->set(compact('lotto'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Lotto id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $lotto = $this->Lotto->get($id, [
            'contain' => []
        ]);

        if ($this->request->is(['patch', 'post', 'put'])) {

            $lotto = $this->Lotto->patchEntity($lotto, $this->request->getData());
            if ($this->Lotto->save($lotto)) {
                $this->Flash->success(__('The lotto has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The lotto could not be saved. Please, try again.'));
        }
        $this->set(compact('lotto'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Lotto id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $lotto = $this->Lotto->get($id);
        if ($this->Lotto->delete($lotto)) {
            $this->Flash->success(__('The lotto has been deleted.'));
        } else {
            $this->Flash->error(__('The lotto could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function result(){
      // $combination = $this->Lotto->find('all');

      $combination = $this->Lotto->find()
                      ->select('combinations')
                      ->where(['game' => 'Lotto 6/42']);
      $ultraCombo = $this->Lotto->find()
                      ->select('combinations')
                      ->where(['game' => 'Ultra Lotto 6/58']);

      $winningNumbers = [];
      $winningUltra = [];

      foreach ($combination as $value) {
        /*
        $lotto = $this->Lotto->patchEntity($value, ['GAME' => 'Lotto 6/42']);
        if($this->Lotto->save($lotto)){
            $this->Flash->success(__('The lotto has been saved.'));
        } else {
          $this->Flash->error(__('The lotto could not be saved. Please, try again.'));
        }
*/
        $arr = explode('-', $value->combinations);
        foreach ($arr as $key=>$val) {
          array_push($winningNumbers, intval($val));
        }
      }

      foreach($ultraCombo as $value){
        $arr = explode('-', $value->combinations);
        foreach ($arr as $key=>$val) {
          array_push($winningUltra, intval($val));
        }
      }

      $winningNumbers = array_count_values($winningNumbers);
      $winningUltra = array_count_values($winningUltra);
      arsort($winningNumbers);
      arsort($winningUltra);
      // $winningNumbers = array_slice($winningNumbers, 0, 6, true);
      $lotto = array_slice($winningNumbers, 0, 6, true);
      $ultraLotto = array_slice($winningUltra, 0, 6, true);
      // debug($winningUltra);exit;
      $this->set(compact('lotto','ultraLotto'));
    }

}
