<?php
/**
 * Created by PhpStorm.
 * User: Sundar
 * Date: 29-09-2017
 * Time: 15:01
 */
namespace App\Controller\Benziadmin;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\Table;
use Excel\Controller\ExcelReaderController;

class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('backend');

        $this->loadModel('Users');
        $this->loadModel('Companies');
        $this->loadModel('Timezones');
    }
    public function beforeFilter(Event $event)
    {
        // Before Login , these are the function we can access
        $this->Auth->allow([
            'login'
        ]);
    }

    public function login() {


        if(!empty($this->Auth->user())){
            if($this->Auth->redirectUrl() == '/') {
                return $this->redirect(ADMIN_BASE_URL.'users/dashboard');
            }else {
                return $this->redirect($this->Auth->redirectUrl());
            }

        }else if($this->request->is('post')){
            $user = $this->Auth->identify();
            if(!empty($user) && ($user['role_id'] == 1)){

                $this->Auth->setUser($user);
                return $this->redirect(ADMIN_BASE_URL.'users/dashboard');
            }else{
                $this->Flash->error('Invalid username or password, try again');
            }
        }
    }

    public function dashboard() {


    }

    public function index() {
        echo 'come';die();
    }

    public function logout() {
        $this->Auth->logout();
        return $this->redirect(ADMIN_BASE_URL.'');
    }
}