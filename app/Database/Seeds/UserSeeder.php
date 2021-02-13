<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
  public function run()
  {
    $user = model('UserModel');

    $user->insert([
      'username' => 'admin',
      'password' => md5('admin'),
    ]);
  }
}
