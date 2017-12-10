<?php
/**
 * Created by PhpStorm.
 * User: Sundar
 * Date: 12/10/2017
 * Time: 12:16 PM
 */
namespace App\Model\Table;

use App\Model\Entity\User;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;


class CustomersTable extends Table
{
    public function initialize(array $config)
    {
        $this->addBehavior('Timestamp');
    }
}