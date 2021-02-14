<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\User;

class Users extends BaseController
{
  public function index()
  {
    $user = new User();
    $users = $user->asObject()->findAll();

    return view('users/index', ['users' => $users]);
  }

  public function show($id)
  {
    $user = new User();
    $user = $user->asObject()->find($id);

    return view('users/show', ['user' => $user]);
  }

  function add()
  {
    return view('users/add');
  }

  function insert()
  {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $user = new User();
    $user->insert([
      'username' => $username,
      'password' => md5($password),
    ]);

    session()->setFlashdata('message', 'User created successfully!');
    return redirect()->to('/users');
  }

  function edit($id)
  {
    $user = new User();
    $user = $user->asObject()->find(intval($id));

    return view('users/edit', ['user' => $user]);
  }

  function update($id)
  {
    $username = $this->request->getPost('username');
    $password = $this->request->getPost('password');

    $newUser = [
      'name' => $username,
      'address' => md5($password),
    ];

    $user = new User();
    $user = $user->update(intval($id), $newUser);

    session()->setFlashdata('message', 'User updated successfully!');
    return redirect()->to('/users');
  }

  function delete($id)
  {
    $user = new User();
    $user->delete(intval($id));

    session()->setFlashdata('message', 'User deleted successfully!');
    return redirect()->to('/users');
  }
}
