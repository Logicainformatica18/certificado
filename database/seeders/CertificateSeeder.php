<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Certificate;
class CertificateSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
            Certificate::create([
                'registry_detail_id' => '1',
           'description' => 'a',
            'code' => 'code',
            'url_image' => 'certificate/python_datscience/',
            'detail' => 'detalle'

            ]);
    }
}
