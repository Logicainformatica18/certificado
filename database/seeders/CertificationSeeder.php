<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certification;
class CertificationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       Certification::create([
                'course_id' => '1',
           'description' => 'Modelamiento de bases de datos',
            'note' => 'n1',
            'code' => 'code',
            'url_image' => 'certificate/python_datscience/',
            'detail' => 'detalle'

            ]);
              Certification::create([
                'course_id' => '5',
           'description' => 'Azure fundamentals',
            'code' => 'code',
                'note' => 'n1',
            'url_image' => 'certificate/azure_datscience/',
            'detail' => 'detalle'

            ]);
    }
}
