<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Drug;

class Drugs extends BaseController
{
	public function index()
  {
    $drug = new Drug();
    $drugs = $drug->asObject()->findAll();

    return view('drugs/index', ['drugs' => $drugs]);
  }

  function add()
  {
    return view('drugs/add');
  }

  function insert()
  {
    $name = $this->request->getPost('name');
    $price = intval($this->request->getPost('price'));

    $drug = new Drug();
    $drug->insert(['name' => $name, 'price' => $price]);

    return redirect()->to('/drugs');
  }

  function edit($id)
  {
    $drug = new Drug();
    $drug = $drug->asObject()->find(intval($id));

    return view('drugs/edit', ['drug' => $drug]);
  }

  function update($id)
  {
    $newDrug = [
      'name' => $this->request->getPost('name'),
      'price' => intval($this->request->getPost('price')),
    ];

    $drug = new Drug();
    $drug = $drug->update(intval($id), $newDrug);

    return redirect()->to('/drugs');
  }

  function delete($id)
  {
    $drug = new Drug();
    $drug->delete(intval($id));

    return redirect()->to('/drugs');
  }
}
