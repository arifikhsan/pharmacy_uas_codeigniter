<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class Suppliers extends BaseController
{
  public function index()
  {
    $suppliers = $this->supplier->asObject()->findAll();
    return view('suppliers/index', ['suppliers' => $suppliers]);
  }

  public function show($id)
  {
    $supplier = $this->supplier->asObject()->find($id);
    return view('suppliers/show', ['supplier' => $supplier]);
  }

  function add()
  {
    return view('suppliers/add', ['validation' => Services::validation()]);
  }

  function insert()
  {
    if (!$this->validate([
      'name' => 'trim|required',
      'city' => 'trim|required',
      'address' => 'trim|required',
      'phone_number' => 'min_length[4]|trim|required',
    ])) {
      $validation = Services::validation();
      return redirect()->to('/suppliers/add')->withInput('validation', $validation);
    };

    $name = $this->request->getPost('name');
    $address = $this->request->getPost('address');
    $city = $this->request->getPost('city');
    $phoneNumber = $this->request->getPost('phone_number');

    $result = $this->supplier->insert([
      'name' => $name,
      'address' => $address,
      'city' => $city,
      'phone_number' => $phoneNumber,
    ]);

    if ($result) {
      session()->setFlashdata('message', 'Supplier created successfully!');
    } else {
      session()->setFlashdata('message', 'Create supplier failed!');
    }

    return redirect()->to('/suppliers');
  }

  function edit($id)
  {
    $supplier = $this->supplier->asObject()->find(intval($id));
    return view('suppliers/edit', ['supplier' => $supplier, 'validation' => Services::validation()]);
  }

  function update($id)
  {
    if (!$this->validate([
      'name' => 'trim|required',
      'city' => 'trim|required',
      'address' => 'trim|required',
      'phone_number' => 'min_length[4]|trim|required',
    ])) {
      $validation = Services::validation();
      return redirect()->to('/suppliers/edit/' . $id)->withInput('validation', $validation);
    };

    $newSupplier = [
      'name' => $this->request->getPost('name'),
      'address' => $this->request->getPost('address'),
      'city' => $this->request->getPost('city'),
      'phone_number' => $this->request->getPost('phone_umber'),
    ];

    if ($this->supplier->update(intval($id), $newSupplier)) {
      session()->setFlashdata('message', 'Supplier updated successfully!');
    } else {
      session()->setFlashdata('message', 'Update supplier failed!');
    }

    return redirect()->to('/suppliers');
  }

  function delete($id)
  {
    $supplier = $this->supplier->asObject()->find(intval($id));
    return view('suppliers/delete', ['supplier' => $supplier]);
  }

  function destroy($id)
  {
    if ($this->supplier->delete(intval($id))) {
      session()->setFlashdata('message', 'Supplier deleted successfully!');
    } else {
      session()->setFlashdata('message', 'Delete supplier failed!');
    }

    return redirect()->to('/suppliers');
  }
}
