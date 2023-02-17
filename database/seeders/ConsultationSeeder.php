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

                'name' => 'Jantung Sesak'
            ],

            [

                'name' => 'Tekanan Darah Tinggi'
            ],
            [
                'name' => 'Gangguan Irama jantung'
                ]
        ];
        // this array specialist will be insert to table 'specialist'
        Consultation::insert($consultation);
    }
}
