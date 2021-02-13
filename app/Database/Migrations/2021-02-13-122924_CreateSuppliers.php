<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateSuppliers extends Migration
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
      'name'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'address'    => [
        'type'       => 'TEXT'
      ],
      'city'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'phone_number'     => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp',
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('suppliers');
  }

  public function down()
  {
    $this->forge->dropTable('suppliers');
  }
}
