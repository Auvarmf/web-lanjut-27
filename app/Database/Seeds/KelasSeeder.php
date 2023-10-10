<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;
use App\Models\KelasModel;

class KelasSeeder extends Seeder
{
    public function run()
    {
        $kelasModel = new KelasModel();

        $kelasModel->save([
            'nama_kelas' => 'A'
        ]);
        $kelasModel->save([
            'nama_kelas' => 'B'
        ]);
        $kelasModel->save([
            'nama_kelas' => 'C'
        ]);
        $kelasModel->save([
            'nama_kelas' => 'D'
        ]);
    }
}
