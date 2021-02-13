<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTransactions extends Migration
{
  public function up()
  {
    $this->forge->addField([
      'id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'auto_increment' => true,
        'constraint' => '11',
      ],
      'user_id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'customer_name'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'datetime'          => [
        'type'           => 'TIMESTAMP',
        'null'           => false,
      ],
      // 'subtotal'          => [
      //   'type'           => 'INT',
      //   'unsigned'       => true,
      //   'constraint'     => '11',
      // ],
      'total'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp',
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('user_id', 'users', 'id');
    $this->forge->createTable('transactions');
  }

  public function down()
  {
    $this->forge->dropTable('transactions');
  }
}
