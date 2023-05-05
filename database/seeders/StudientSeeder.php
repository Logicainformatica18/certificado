<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Studient;
class StudientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
             Studient::create([
            'detail' => '55555',
            'description' => '55555',
            'user_id' => '4',

        ]);
    }
}
