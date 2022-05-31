<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Maintence extends Seeder
{
    public function run()
    {
        $data = [
            "computer_id" => "1",
            "description" => "abc",
            "resolved" => "Yes"
        ];

        $this->db->table('maintence')->insert($data);
    }
}
