<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Departaments extends Seeder
{
    public function run()
    {

        $data = [
            ["description" => "ti"],
            ["description" => "marketing"],
            ["description" => "comercial"],
            ["description" => "felbi"],
            ["description" => "industrial"]
        ];

        foreach ($data as $key => $value) {
            $this->db->table('departaments')->insert($value);
        }
        
       
    }
}
