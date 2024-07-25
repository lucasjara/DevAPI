<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class ClientSeeder extends Seeder
{
    public function run()
    {
        $data = [
            'identification' => '11.111.111-1',
            'name' => 'John Doe',
            'email' => 'jhon@default.cl',
        ];
        $this->db->table('client')->insert($data);
    }
}
