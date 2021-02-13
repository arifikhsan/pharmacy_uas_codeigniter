<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class DatabaseSeeder extends Seeder
{
	public function run()
	{
		$this->call('UserSeeder');
		$this->call('SupplierSeeder');
		$this->call('DrugSeeder');
		$this->call('TransactionSeeder');
		$this->call('TransactionDetailSeeder');
	}
}
