<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use Config\Services;

class Drugs extends BaseController
{
  public function index()
  {
    $drugs = $this->drug->getAll();
    return view('drugs/index', ['drugs' => $drugs]);
  }

  public function show($id)
  {
    $drug = $this->drug->getOne($id);
    return view('drugs/show', ['drug' => $drug]);
  }

  function add()
  {
    $suppliers = $this->supplier->asObject()->findAll();
    return view('drugs/add', ['suppliers' => $suppliers, 'validation' => Services::validation()]);
  }

  function insert()
  {
    if (!$this->validate([
      'supplier_id' => 'trim|required',
      'name' => 'trim|required',
      'producer' => 'trim|required',
      'price' => 'numeric|trim|required',
      'quantity' => 'numeric|trim|required',
      'drug_image' => 'uploaded[drug_image]|max_size[drug_image,8512]|is_image[drug_image]|mime_in[drug_image,image/jpg,image/jpeg,image/png]',
    ])) {
      // $validation = Services::validation();
      // return redirect()->to('/drugs/add')->withInput('validation', $validation);
      return redirect()->to('/drugs/add')->withInput();
    };

    $supplier_id = intval($this->request->getPost('supplier_id'));
    $name = $this->request->getPost('name');
    $producer = $this->request->getPost('producer');
    $price = intval($this->request->getPost('price'));
    $quantity = intval($this->request->getPost('quantity'));
    $image = $this->request->getFile('drug_image');

    // dd($image);

    if ($image->isValid() && !$image->hasMoved()) {

      $result = $this->drug->insert([
        'supplier_id' => $supplier_id,
        'name' => $name,
        'producer' => $producer,
        'price' => $price,
        'quantity' => $quantity,
        'image' => $image->getName(),
      ]);

      $image->move('uploads');
    }

    if ($result) {
      session()->setFlashdata('message', 'Drug created successfully!');
    } else {
      session()->setFlashdata('message', 'Create drug failed!');
    }

    return redirect()->to('/drugs');
  }

  function edit($id)
  {
    $suppliers = $this->supplier->asObject()->findAll();
    $drug = $this->drug->asObject()->find(intval($id));
    // dd($drug);
    return view('drugs/edit', ['drug' => $drug, 'suppliers' => $suppliers, 'validation' => Services::validation()]);
  }

  function update($id)
  {
    if (!$this->validate([
      'supplier_id' => 'trim|required',
      'name' => 'trim|required',
      'producer' => 'trim|required',
      'price' => 'numeric|trim|required',
      'quantity' => 'numeric|trim|required',
    ])) {
      $validation = Services::validation();
      return redirect()->to('/drugs/edit/' . $id)->withInput('validation', $validation);
    };

    $supplier_id = intval($this->request->getPost('supplier_id'));
    $name = $this->request->getPost('name');
    $producer = $this->request->getPost('producer');
    $price = intval($this->request->getPost('price'));
    $quantity = intval($this->request->getPost('quantity'));
    // $image = $this->request->getFile('image');

    $newDrug = [
      'supplier_id' => $supplier_id,
      'name' => $name,
      'producer' => $producer,
      'price' => $price,
      'quantity' => $quantity,
      // 'image' => $image->getName(),
    ];

    if (!empty($_FILES["image"]["name"])) {
      $image = $this->request->getFile('image');
      $newDrug['image'] = $image->getName();
      $oldDrug = $this->drug->asObject()->find($id);
      if ($oldDrug->image) {
        unlink('uploads/' . $oldDrug->image);
      }
      $result = $this->drug->update(intval($id), $newDrug);
      $image->move('uploads');
    } else {
      $result = $this->drug->update(intval($id), $newDrug);
    }

    if ($result) {
      session()->setFlashdata('message', 'Drug updated successfully!');
    } else {
      session()->setFlashdata('message', 'Update drug failed!');
    }

    return redirect()->to('/drugs');
  }

  function delete($id)
  {
    $drug = $this->drug->asObject()->find(intval($id));
    return view('drugs/delete', ['drug' => $drug]);
  }

  function destroy($id)
  {
    $drug = $this->drug->asObject()->find(intval($id));
    unlink('uploads/' . $drug->image);
    $this->drug->delete(intval($id));
    return redirect()->to('/drugs');
  }
}
