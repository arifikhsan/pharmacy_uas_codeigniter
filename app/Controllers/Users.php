<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;
use Config\Services;

class Users extends BaseController
{
  public function index()
  {
    $users = $this->user->asObject()->findAll();

    return view('users/index', ['users' => $users]);
  }

  public function show($id)
  {
    $user = new User();
    $user = $this->user->asObject()->find($id);

    return view('users/show', ['user' => $user]);
  }

  function add()
  {
    return view('users/add', ['validation' => Services::validation()]);
  }

  function insert()
  {
    if (!$this->validate([
      'username' => 'alpha_numeric|min_length[4]|trim|required',
      'password' => 'min_length[4]|trim|required'
    ])) {
      $validation = Services::validation();
      return redirect()->to('/users/add')->withInput('validation', $validation);
    };

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $this->user->insert([
      'username' => $username,
      'password' => md5($password),
    ]);

    session()->setFlashdata('message', 'User created successfully!');
    return redirect()->to('/users');
  }

  function edit($id)
  {
    $user = $this->user->asObject()->find(intval($id));
    return view('users/edit', ['user' => $user, 'validation' => Services::validation()]);
  }

  function update($id)
  {
    if (!$this->validate([
      'username' => 'alpha_numeric|min_length[4]|trim|required',
      'password' => 'min_length[4]|trim|required'
    ])) {
      $validation = Services::validation();
      return redirect()->to('/users/edit/' . $id)->withInput('validation', $validation);
    };

    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $newUser = [
      'username' => $username,
      'password' => md5($password),
    ];

    if ($this->user->update(intval($id), $newUser)) {
      session()->setFlashdata('message', 'User updated successfully!');
    } else {
      session()->setFlashdata('message', 'Update user failed!');
    }

    return redirect()->to('/users');
  }

  function delete($id)
  {
    $user = $this->user->asObject()->find(intval($id));
    return view('users/delete', ['user' => $user]);
  }

  function destroy($id)
  {
    if ($this->user->delete(intval($id))) {
      session()->setFlashdata('message', 'User deleted successfully!');
    } else {
      session()->setFlashdata('message', 'Delete user failed!');
    }

    return redirect()->to('/users');
  }
}
