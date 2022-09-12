<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(Category::count()===0){
            $category_name=['Men','Women','Children'];
            for($i = 0;$i<3;$i++)
            {
                $category= new Category();
                $category->name =$category_name[$i];
                $category->save();
            }
        }
    }
}
