<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/10/2017
 * Time: 10:47 AM
 */
namespace App\Controller\Benziadmin;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\Table;
use Excel\Controller\ExcelReaderController;

class CustomersController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('backend');

        $this->loadModel('Users');
        $this->loadModel('Sitesettings');
        $this->loadModel('Customers');
    }

    public function beforeFilter(Event $event)
    {
        // Before Login , these are the function we can access
    }

    public function index($process = null) {

        $customerDetails = $this->Customers->find('all', [
            'conditions' => [
                'id IS NOT NULL',
                'delete_status' => 'No'
            ]
        ])->hydrate(false)->toArray();

        if($process == 'custManage') {
            $values = array($customerDetails);
            return $values;
        }

        $this->set(compact('customerDetails'));
    }

    public function add() {
        if($this->request->is('post')) {
            $companyEntity = $this->Customers->newEntity();
            $comapnyPatch  = $this->Customers->patchEntity($companyEntity,$this->request->getData());
            $saveCompany   = $this->Customers->save($comapnyPatch);
            if($saveCompany) {
                $this->Flash->success('Customer addedd successful');
                return $this->redirect(ADMIN_BASE_URL.'customers');
            }
        }
    }

    public function edit($id = null) {

        if($this->request->is('post')) {
            $companyEntity = $this->Customers->newEntity();
            $comapnyPatch  = $this->Customers->patchEntity($companyEntity,$this->request->getData());
            $comapnyPatch->id = $this->request->getData('editedId');
            $saveCompany   = $this->Customers->save($comapnyPatch);
            if($saveCompany) {
                $this->Flash->success('Update successful');
                return $this->redirect(ADMIN_BASE_URL.'customers');
            }
        }

        $customerEdit = $this->Customers->find('all', [
            'conditions' => [
                'id' => $id
            ]
        ])->hydrate(false)->first();

        $this->set(compact('customerEdit','id'));
    }

    public function checkCustomer() {

        if($this->request->getData('id') != '') {
            $conditions = [
                'id !=' => $this->request->getData('id'),
                'username' => $this->request->getData('username')
            ];

        }

        $userCount = $this->Customers->find('all', [
            'conditions' => $conditions
        ])->count();

        if($userCount == 0) {
            echo 'true';die();
        }else {
            echo 'false';exit;
        }
    }

    public function deletecust($mcatid = null){


        if($this->request->is('ajax')){
            if($this->request->getData('action') == 'customers' && $this->request->getData('id') != ''){

                $customer         = $this->Customers->newEntity();
                $customer         = $this->Customers->patchEntity($customer,$this->request->getData());
                $customer->id     = $this->request->getData('id');
                $customer->delete_status = 'Yes';
                $this->Customers->save($customer);

                list($customerList) = $this->index('customer');
                if($this->request->is('ajax')) {
                    $action         = 'custManage';
                    $this->set(compact('action', 'customerList'));
                    $this->render('ajaxaction');
                }
            }
        }
    }

    public function ajaxaction() {

        if($this->request->getData('action') == 'custstatuschange'){

            $usersEnty         = $this->Customers->newEntity();
            $usersEnty         = $this->Customers->patchEntity($usersEnty,$this->request->getData());
            $usersEnty->id     = $this->request->getData('id');
            $usersEnty->status = $this->request->getData('changestaus');
            $this->Customers->save($usersEnty);

            $this->set('id', $this->request->getData('id'));
            $this->set('action', 'custstatuschange');
            $this->set('field', $this->request->getData('field'));
            $this->set('status', (($this->request->getData('changestaus') == 0) ? 'deactive' : 'active'));
        }
    }

}