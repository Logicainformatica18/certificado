<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Exam;
class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             Exam::create([
                'certification_id' => '1',
           'ask' => '¿Qué es SQL?',
            'alternative1' => 'cod',
            'alternative2' => 'cod',
            'alternative3' => 'cod',
            'alternative4' => 'cod',
        'answer' => '1'

            ]);
              Exam::create([
                'certification_id' => '1',
           'ask' => '¿Qué es una base de datos?',
            'alternative1' => 'cod',
            'alternative2' => 'cod',
            'alternative3' => 'cod',
            'alternative4' => 'cod',
        'answer' => '1'

            ]);
    }
}
