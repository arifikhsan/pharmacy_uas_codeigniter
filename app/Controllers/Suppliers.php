<?php

namespace App\Controllers;

use App\Controllers\BaseController;

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
    return view('suppliers/add');
  }

  function insert()
  {
    $name = $this->request->getPost('name');
    $address = $this->request->getPost('address');
    $city = $this->request->getPost('city');
    $phoneNumber = $this->request->getPost('phone_number');

    $this->supplier->insert([
      'name' => $name,
      'address' => $address,
      'city' => $city,
      'phone_number' => $phoneNumber,
    ]);

    session()->setFlashdata('message', 'Supplier created successfully!');
    return redirect()->to('/suppliers');
  }

  function edit($id)
  {
    $supplier = $this->supplier->asObject()->find(intval($id));

    return view('suppliers/edit', ['supplier' => $supplier]);
  }

  function update($id)
  {
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
    if ($this->supplier->delete(intval($id))) {
      session()->setFlashdata('message', 'Supplier deleted successfully!');
    } else {
      session()->setFlashdata('message', 'Delete supplier failed!');
    }

    return redirect()->to('/suppliers');
  }
}
