<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class Auth extends BaseController
{
  public function login()
  {
    return view('auth/login', ['validation' => Services::validation()]);
  }

  public function create()
  {
    if (!$this->validate([
      'username' => 'alpha_numeric|min_length[4]|trim|required',
      'password' => 'min_length[4]|trim|required'
    ])) {
      $validation = Services::validation();
      return redirect()->to('/auth/login')->withInput('validation', $validation);
    };

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');


    $user = $this->user->asObject()->where(['username' => $username, 'password' => md5($password)])->first();

    if ($user) {
      return redirect()->to('/admin');
    } else {
      return redirect()->to('/auth/login');
    }
  }

  public function destroy()
  {
    return redirect()->to('/auth/login');
  }
}
