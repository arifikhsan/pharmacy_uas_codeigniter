<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDetailTransactions extends Migration
{
	public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'auto_increment' => true,
        'constraint'     => '11',
      ],
      'transaction_id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'drug_id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'subtotal'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'total'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp',
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('transaction_id', 'transactions', 'id');
    $this->forge->addForeignKey('drug_id', 'drugs', 'id');
    $this->forge->createTable('transaction_details');
  }

  public function down()
  {
    $this->forge->dropTable('transaction_details');
  }
}
