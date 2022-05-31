<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Computers extends Seeder
{
    public function run()
    {
        $data = [
            "departament_id" => "1",
            "codigo" => "1",
            "username" => "Matheus",
            "video" => "Onboard",
            "hd" => "500Gb",
            "memory" => "4Gb",
            "processor" => "i5"
        ];


            $this->db->table('computers')->insert($data);

    }
}
