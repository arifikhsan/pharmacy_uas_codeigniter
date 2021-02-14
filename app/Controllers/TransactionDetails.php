<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class TransactionDetails extends BaseController
{
  public function index()
  {
    return view('transactiondetails/index', ['transactionDetails' => $this->transactionDetail->getAll()]);
  }

  public function show($id)
  {
    $transactionDetail = $this->transactionDetail->getOne($id);
    return view('transactiondetails/show', ['transaction' => $transactionDetail]);
  }

  function add()
  {
    $suppliers = $this->supplier->asObject()->findAll();
    $drugs = $this->drug->asObject()->findAll();

    return view('transactiondetails/add', ['suppliers' => $suppliers, 'drugs' => $drugs, 'validation' => Services::validation()]);
  }

  function insert()
  {
    if (!$this->validate([
      'transaction_id' => 'numeric|required',
      'drug_id' => 'numeric|required',
      'sub_total' => 'numeric|required',
      'total' => 'numeric|required',
    ])) {
      $validation = Services::validation();
      return redirect()->to('/transactiondetails/add')->withInput('validation', $validation);
    };

    $transaction_id = intval($this->request->getPost('transaction_id'));
    $drug_id = intval($this->request->getPost('drug_id'));
    $sub_total = intval($this->request->getPost('sub_total'));
    $total = intval($this->request->getPost('total'));

    $result = $this->transaction->insert([
      'transaction_id' => $transaction_id,
      'drug_id' => $drug_id,
      'sub_total' => $sub_total,
      'total' => $total,
    ]);

    if ($result) {
      session()->setFlashdata('message', 'Transaction detail created successfully!');
    } else {
      session()->setFlashdata('message', 'Create transaction detail failed!');
    }

    return redirect()->to('/transactiondetails');
  }

  function edit($id)
  {
    $transactions = $this->transaction->asObject()->findAll();
    $drugs = $this->drug->asObject()->findAll();
    $transactionDetail = $this->transactionDetail->asObject()->find(intval($id));

    return view('transactiondetails/edit', [
      'transactions' => $transactions,
      'drugs' => $drugs,
      'transactionDetail' => $transactionDetail,
      'validation' => Services::validation(),
    ]);
  }

  function update($id)
  {
    if (!$this->validate([
      'transaction_id' => 'numeric|required',
      'drug_id' => 'numeric|required',
      'sub_total' => 'numeric|required',
      'total' => 'numeric|required',
    ])) {
      $validation = Services::validation();
      return redirect()->to('/transactiondetails/edit/' . $id)->withInput('validation', $validation);
    };

    $transaction_id = intval($this->request->getPost('transaction_id'));
    $drug_id = intval($this->request->getPost('drug_id'));
    $sub_total = intval($this->request->getPost('sub_total'));
    $total = intval($this->request->getPost('total'));

    $newTransactionDetail = [
      'transaction_id' => $transaction_id,
      'drug_id' => $drug_id,
      'sub_total' => $sub_total,
      'total' => $total,
    ];

    if ($this->transactionDetail->update(intval($id), $newTransactionDetail)) {
      session()->setFlashdata('message', 'Transaction detail updated successfully!');
    } else {
      session()->setFlashdata('message', 'Update transaction detail failed!');
    }
    return redirect()->to('/transactiondetails');
  }

  function delete($id)
  {
    $transactionDetail = $this->transactionDetail->asObject()->find(intval($id));
    return view('transactiondetails/delete', ['transactionDetail' => $transactionDetail]);
  }

  function destroy($id)
  {
    if ($this->transactionDetail->delete(intval($id))) {
      session()->setFlashdata('message', 'Transaction detail deleted successfully!');
    } else {
      session()->setFlashdata('message', 'Delete transaction detail failed!');
    }

    return redirect()->to('/transactiondetails');
  }
}
