<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class TransactionDetailSeeder extends Seeder
{
	public function run()
	{
		// 'transaction_id', 'drug_id', 'sub_total', 'total'

    $transaction = model('Transaction');
    $transactionDetail = model('TransactionDetail');

    $transactions = $transaction->asObject()->findAll();
    foreach ($transactions as $item) {
      for ($i = 0; $i < 3; $i++) {
        $transactionDetail->insert([
          'transaction_id' => $item->id,
          'drug_id' => static::faker()->numberBetween(1, 5),
          'sub_total' => static::faker()->numberBetween(1, 10) * 100,
          'total' => static::faker()->numberBetween(1, 10) * 1000,
        ]);
      }
    }
	}
}
