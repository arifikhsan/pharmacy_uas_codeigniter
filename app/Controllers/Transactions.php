<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;
use DateTime;

class Transactions extends BaseController
{
  public function index()
  {
    return view('transactions/index', ['transactions' => $this->transaction->getAll()]);
  }

  public function show($id)
  {
    $transaction = $this->transaction->getOne($id);
    return view('transactions/show', ['transaction' => $transaction]);
  }

  function add()
  {
    $suppliers = $this->supplier->asObject()->findAll();
    $users = $this->user->asObject()->findAll();

    return view('transactions/add', ['suppliers' => $suppliers, 'users' => $users, 'validation' => Services::validation()]);
  }

  function insert()
  {
    if (!$this->validate([
      'user_id' => 'trim|required',
      'customer_name' => 'trim|required',
      'total' => 'numeric|trim|required',
      'datetime' => 'trim|required',
    ])) {
      $validation = Services::validation();
      return redirect()->to('/transactions/add')->withInput('validation', $validation);
    };

    $user_id = intval($this->request->getPost('user_id'));
    $customer_name = intval($this->request->getPost('customer_name'));
    $total = intval($this->request->getPost('total'));
    $datetime = $this->request->getPost('datetime');

    $result = $this->transaction->insert([
      'user_id' => $user_id,
      'customer_name' => $customer_name,
      'total' => $total,
      'datetime' => $datetime,
    ]);

    if ($result) {
      session()->setFlashdata('message', 'Transaction created successfully!');
    } else {
      session()->setFlashdata('message', 'Create transaction failed!');
    }

    return redirect()->to('/transactions');
  }

  function edit($id)
  {
    $suppliers = $this->supplier->asObject()->findAll();
    $users = $this->user->asObject()->findAll();
    $transaction = $this->transaction->asObject()->find(intval($id));

    $datetime = new DateTime($this->transaction->datetime);

    return view('transactions/edit', [
      'transaction' => $transaction,
      'suppliers' => $suppliers,
      'users' => $users,
      'datetime' => $datetime,
      'validation' => Services::validation(),
    ]);
  }

  function update($id)
  {
    if (!$this->validate([
      'user_id' => 'trim|required',
      'customer_name' => 'trim|required',
      'total' => 'numeric|trim|required',
      'datetime' => 'trim|required',
    ])) {
      $validation = Services::validation();
      return redirect()->to('/transactions/edit/' . $id)->withInput('validation', $validation);
    };

    $user_id = intval($this->request->getPost('user_id'));
    $customer_name = $this->request->getPost('customer_name');
    $total = intval($this->request->getPost('total'));
    $datetime = $this->request->getPost('datetime');

    $newTransaction = [
      'user_id' => $user_id,
      'customer_name' => $customer_name,
      'total' => $total,
      'datetime' => $datetime,
    ];

    if ($this->transaction->update(intval($id), $newTransaction)) {
      session()->setFlashdata('message', 'Transaction updated successfully!');
    } else {
      session()->setFlashdata('message', 'Update transaction failed!');
    }
    return redirect()->to('/transactions');
  }

  function delete($id)
  {
    $transaction = $this->transaction->asObject()->find(intval($id));
    return view('transactions/delete', ['transaction' => $transaction]);
  }

  function destroy($id)
  {
    if ($this->transaction->delete(intval($id))) {
      session()->setFlashdata('message', 'Supplier deleted successfully!');
    } else {
      session()->setFlashdata('message', 'Delete supplier failed!');
    }

    return redirect()->to('/transactions');
  }
}
