<?php
/**
 * Created by PhpStorm.
 * User: Sundar
 * Date: 12/10/2017
 * Time: 11:46 AM
 */
namespace App\Controller\Benziadmin;
use Cake\Event\Event;
use App\Controller\AppController;
use Cake\I18n\Time;
use Cake\ORM\Table;
use Excel\Controller\ExcelReaderController;

class CompaniesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->viewBuilder()->layout('backend');

        $this->loadModel('Users');
        $this->loadModel('Companies');
    }

    public function index() {

        if($this->request->is('post')) {
            if($this->request->getData('action') == 'addCompany') {
                $companyEntity = $this->Companies->newEntity();
                $comapnyPatch  = $this->Companies->patchEntity($companyEntity,$this->request->getData());
                $saveCompany   = $this->Companies->save($comapnyPatch);
                if($saveCompany) {
                    $this->Flash->success('Company addedd successful');
                    return $this->redirect(ADMIN_BASE_URL.'companies');
                }
            }
        }

        //get Company Details

        $companyDetails = $this->Companies->find('all', [
            'conditions' => [
                'id IS NOT NULL'
            ]
        ])->hydrate(false)->toArray();

        $this->set(compact('companyDetails'));

    }
}