<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SupplierSeeder extends Seeder
{
  public function run()
  {
    $supplier = model('Supplier');

    for ($i = 0; $i < 5; $i++) {
      $supplier->insert([
        'name' => static::faker()->company,
        'address' => static::faker()->address,
        'city' => static::faker()->city,
        'phone_number' => static::faker()->phoneNumber,
      ]);
    }
  }
}
