<?php

namespace App\Validation;

class Auth
{
	public $login = [
    'username' => 'trim|required',
    'password' => 'trim|required'
  ];
}
