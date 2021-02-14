<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Admin extends BaseController
{
  public function index()
  {
    $drugCount = $this->drug->countAll();
    $supplierCount = $this->supplier->countAll();
    $transactionCount = $this->transaction->countAll();
    $transactionDetailCount = $this->transactionDetail->countAll();
    $userCount = $this->user->countAll();

    return view('admin/index', [
      'drugCount' => $drugCount,
      'supplierCount' => $supplierCount,
      'transactionCount' => $transactionCount,
      'transactionDetailCount' => $transactionDetailCount,
      'userCount' => $userCount,
    ]);
  }
}
