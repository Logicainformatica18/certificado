<?php

namespace Database\Seeders;

use App\Models\RegistryDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RegistryDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
    RegistryDetail::create([
                'registry_id' => '1',

           'n1' => '0',
            'n2' => '0',
            'n3' => '0',
            'n4' => '0',
            'n5' => '0',
             'n6' => '0',
            'n7' => '0',

                'student_m' => '4',
                'student_t' => 'App\Models\User',
                'student_r' => '5',
                'url_certification' => '',
                'state_certification' => ''

            ]);
    }
}
