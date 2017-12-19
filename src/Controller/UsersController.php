<?php
/**
 * Created by PhpStorm.
 * User: Sundar
 * Date: 10/15/2017
 * Time: 7:57 PM
 */
namespace App\Controller;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\Table;
use Cake\Network\Session;

class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('default');
    }

    public function beforeFilter(Event $event)
    {
        // Before Login , these are the function we can access
        $this->Auth->allow([
            'index'
        ]);
    }

    public function index() {

    }

}