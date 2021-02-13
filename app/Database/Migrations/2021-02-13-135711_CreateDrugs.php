<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateDrugs extends Migration
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
      'supplier_id'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'name'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'producer'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'price'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'quantity'          => [
        'type'           => 'INT',
        'unsigned'       => true,
        'constraint'     => '11',
      ],
      'image'          => [
        'type'           => 'VARCHAR',
        'constraint'     => '255',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp',
    ]);
    $this->forge->addKey('id', true);
    $this->forge->addForeignKey('supplier_id', 'suppliers', 'id');
    $this->forge->createTable('drugs');
  }

  public function down()
  {
    $this->forge->dropTable('drugs');
  }
}
