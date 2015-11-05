<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('email', 'An e-mail address is required')
            ->notEmpty('password', 'A password is required')
	    ->notEmpty('first_name', 'Please enter your first name')
	    ->notEmpty('last_name', 'Please enter your last name') 
           ]);
    }

}
