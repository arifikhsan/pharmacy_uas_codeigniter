<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Auth extends BaseController
{
	public function login()
	{
		return view('auth/login');
	}

  public function create() {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = new User();
    $user = $user->asObject()->where(['username' => $username, 'password' => md5($password)])->first();

    if ($user) {
      return redirect()->to('/admin');
    } else {
      return redirect()->to('/auth/login');
    }
  }

  public function destroy() {
    return redirect()->to('/auth/login');
  }
}
