<?php

namespace Database\Seeders;

use App\Models\MasterData\TypeUser;
use Illuminate\Database\Seeder;

class TypeUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type_user = [

            [

                'name' => 'Admin'
            ],

            [

                'name' => 'Dokter'
            ],
            [
                'name' => 'Pasien'
            ]
        ];
        // this array specialist will be insert to table 'specialist'
        TypeUser::insert($type_user);
    }
}
