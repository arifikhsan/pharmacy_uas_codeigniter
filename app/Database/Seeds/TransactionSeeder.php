<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionSeeder extends Seeder
{
	public function run()
	{
    $transaction = model('Transaction');

    for ($i = 0; $i < 5; $i++) {
      $transaction->insert([
        'user_id' => 1, // admin
        'customer_name' => static::faker()->word,
        'datetime' => static::faker()->dateTime()->format('Y-m-d\TH:i:s'),
        'total' => static::faker()->numberBetween(5, 10) * 1000,
      ]);
    }
	}
}
