<?php

namespace Database\Seeders;

use App\Models\MasterData\Consultation;
use Illuminate\Database\Seeder;

class ConsultationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create data here
        $consultation = [

            [

                'name' => 'Jantung Sesak',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],

            [

                'name' => 'Tekanan Darah Tinggi',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ],
            [
                'name' => 'Gangguan Irama jantung',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                ]
        ];
        // this array specialist will be insert to table 'specialist'
        Consultation::insert($consultation);
    }
}
