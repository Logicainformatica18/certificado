<?php
namespace Database\Seeders;
use Illuminate\Database\Seeder;
use App\Models\Type;
class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        type::create(['description' => 'Programas','detail' =>'']);
        type::create(['description' => 'Complementario','detail' =>'']);
        type::create(['description' => 'Asicrónico','detail' =>'']);
    }
}
