<?php
namespace Database\Seeders;
use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Category::create(['description' => 'Programas','detail' =>'']);
        Category::create(['description' => 'Complementario','detail' =>'']);
        Category::create(['description' => 'Asicrónico','detail' =>'']);



    }
}
