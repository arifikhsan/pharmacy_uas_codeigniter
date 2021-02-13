<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateUsers extends Migration
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
      'username'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'password'       => [
        'type'       => 'VARCHAR',
        'constraint' => '100',
      ],
      'created_at datetime default current_timestamp',
      'updated_at datetime default current_timestamp on update current_timestamp',
    ]);
    $this->forge->addKey('id', true);
    $this->forge->createTable('users');
  }

  public function down()
  {
    $this->forge->dropTable('users');
  }
}