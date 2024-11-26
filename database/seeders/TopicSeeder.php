<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Topic::create([
            'course_id' => '1',
            'user_id' => '2',
            'description' => 'Sql Server',
            'detail' =>'detalles',
            'instruction' =>'Instrucciones',
                'video'=> 'https://www.youtube.com/watch?v=DFg1V-rO6Pg',
            'type' => 'video',
            
        ]);
        Topic::create([
            'course_id' => '1',
            'user_id' => '2',
            'description' => 'Python',
            'detail' =>'detalles',
            'instruction' =>'Instrucciones',
                'video'=> 'https://www.youtube.com/watch?v=DFg1V-rO6Pg',
            'type' => 'video',
            
        ]);
    }
}
