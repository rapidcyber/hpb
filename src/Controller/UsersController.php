<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 *
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
  public function initialize()
  {
    parent::initialize();
    $this->Auth->allow(['logout']);
  }
  public function beforeFilter(Event $event){

    parent::beforeFilter($event);
    $session = $this->getRequest()->getSession();
    $s = $session->read('Auth.User');
    $g = $s['group_id'];

    $this->Auth->allow('register', 'forgotPass', 'success', 'forgot', 'activate', 'logout');

    if ($g != 1){
      $this->Auth->deny('delete','edit','index');
    }

  }

  public function login() {
    $session = $this->getRequest()->getSession();
    $user = $session->read('Auth.User');
    if ($user) {
        $this->Flash->success('You are already logged in!');
        $this->redirect($this->Auth->redirectUrl());
    }

    if ($this->request->is('post')) {
      $user = $this->Auth->identify();
      if ($user) {
        $this->Auth->setUser($user);
        $user = $session->read('Auth.User');
        if($user['status'] == 1){
          $this->redirect($this->Auth->redirectUrl());
        } else {
            $link = $this->url(array('controller' => 'users', 'action' => 'activate', $user['id']), true);
            $this->Flash->error('Your account is not yet activated.' .$user['activation']. ' <a href="'.$link.'">Click here to activate your account.</a>');
            $this->redirect($this->Auth->logout());
        }

      } else {
          $this->Flash->error('Your username or password was incorrect.');
      }
    }
  }
  public function logout() {
    $this->Flash->success('Good-Bye');
    $this->redirect($this->Auth->logout());
  }

  public function register(){
    $email = new Email('default');
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $string = '';
    for ($i = 0; $i < 16; $i++) {
       $string .= $characters[rand(0, strlen($characters) - 1)];
    }
    $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user, $this->request->getData());

      $user['group_id'] = 3;
      $user['activation'] = $string;
      $user['status'] = 0;
      // debug($user);die();
      // $this->User->create();
      if ($this->Users->save($user)) {

        $url = $this->url(array('controller' => 'users', 'action' => 'success', $this->User->id, $string), true);

        $arg = array(
          'subject' => 'HPB Account Registration',
          'message' => "Thank you for signing up!\nTo activate your account, copy and paste this -> " . $url . ' to your address bar.'
        );

        $email
          ->subject($arg['subject'])
          ->message($arg['message'])
          ->to($user['email'])
          ->send();
        // $email($this->Users->id, $arg);



        $this->Flash->success(__('Your account has been created. Please check you email to cornfirm'));

        $this->redirect('/');
      } else {
        // debug($user);die();
         $this->Flash->error(__('Registration Faild. Please, try again.'));
      }
    }
  }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
      $session = $this->getRequest()->getSession();
      $s = $session->read('Auth.User');
      // debug($s);die();
        $this->paginate = [
            'contain' => ['Groups']
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Groups', 'Merchants', 'Orders', 'Transactions']
        ]);

        $this->set('user', $user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $groups = $this->Users->Groups->find('list', ['limit' => 200]);
        $this->set(compact('user', 'groups'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function isAuthorized($user){

      if($this->request->getParam('action') === 'index') {
        $session = $this->getRequest()->getSession();
        $s = $session->read('Auth.User');
        if($s['group_id'] == 1){
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
