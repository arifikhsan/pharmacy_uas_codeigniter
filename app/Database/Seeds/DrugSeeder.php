<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DrugSeeder extends Seeder
{
	public function run()
	{
		$drug = model('Drug');

    for ($i = 0; $i < 5; $i++) {
      $drug->insert([
        'supplier_id' => static::faker()->numberBetween(1, 3),
        'name' => static::faker()->word,
        'price' => static::faker()->numberBetween(1, 10) * 1000,
        'quantity' => static::faker()->numberBetween(1, 10) * 100,
      ]);
    }
	}
}
