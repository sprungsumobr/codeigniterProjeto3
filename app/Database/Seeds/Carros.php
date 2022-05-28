<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Carros extends Seeder
{
    public function run()
    {
       $placa = ['FWD3272','EKE2076','CTL7144','ERP2538','DRE0455','EVB4987'];
       $modelo = ['Vesta', 'Granta', 'Largus', 'Xray', 'Niva Travel', 'Niva Legend'];
        for($x = 0; $x < 6; $x++){
            $data = [
                'modelo' => $modelo[$x],
                'marca'    => 'Lada',
                'placa'=> $placa[$x]
            ];
            $this->db->table('tb_carros')->insert($data);
        }
    }
}