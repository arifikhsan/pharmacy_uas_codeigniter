<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Supplier;

class Suppliers extends BaseController
{
  public function index()
  {
    $supplier = new Supplier();
    $suppliers = $supplier->asObject()->findAll();

    return view('suppliers/index', ['suppliers' => $suppliers]);
  }

  public function show($id)
  {
    $supplier = new Supplier();
    $supplier = $supplier->asObject()->find($id);

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

    $supplier = new Supplier();
    $supplier->insert([
      'name' => $name,
      'address' => $address,
      'city' => $city,
      'phone_number' => $phoneNumber,
    ]);

    return redirect()->to('/suppliers');
  }

  function edit($id)
  {
    $supplier = new Supplier();
    $supplier = $supplier->asObject()->find(intval($id));

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

    $supplier = new Supplier();
    $supplier = $supplier->update(intval($id), $newSupplier);

    return redirect()->to('/suppliers');
  }

  function delete($id)
  {
    $supplier = new Supplier();
    $supplier->delete(intval($id));

    return redirect()->to('/suppliers');
  }
}
