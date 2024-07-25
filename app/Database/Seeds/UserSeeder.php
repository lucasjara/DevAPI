<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $default_value = env('MY_DEFAULT_PASS');
        $password = password_hash($default_value, PASSWORD_DEFAULT);
        $data = [
            'email' => 'admin@default.cl',
            'password' => $password
        ];
        $this->db->table('user')->insert($data);
    }
}
