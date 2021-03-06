<?php

use App\People;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PeoplesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //method Model?
        /*
        People::create([
            [
               'name'=>"Tom Rensed",
               'position'=>"Chief Executive Officer",
               'images'=>"team_pic1.jpg",
               'text'=>"Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit.
                        Proin consequat sollicitudin cursus. 
                        Dolor sit amet, consectetur adipiscing 
                        elit proin consequat."
            ],
            [
                'name'=>"Kathren Mory",
                'position'=>"Vice President",
                'images'=>"team_pic2.jpg",
                'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Proin consequat sollicitudin cursus. Dolor sit amet, 
                         consectetur adipiscing elit proin consequat."
            ],
            [
                'name'=>"Lancer Jack",
                'position'=>"Senior Manager",
                'images'=>"team_pic3.jpg",
                'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Proin consequat sollicitudin cursus. Dolor sit amet, 
                         consectetur adipiscing elit proin consequat."
            ]
    ]);
        */
        DB::table('peoples')->insert([
            [
                'name'=>"Tom Rensed",
                'position'=>"Chief Executive Officer",
                'images'=>"team_pic1.jpg",
                'text'=>"Lorem ipsum dolor sit amet, 
                        consectetur adipiscing elit.
                        Proin consequat sollicitudin cursus. 
                        Dolor sit amet, consectetur adipiscing 
                        elit proin consequat."
            ],
            [
                'name'=>"Kathren Mory",
                'position'=>"Vice President",
                'images'=>"team_pic2.jpg",
                'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Proin consequat sollicitudin cursus. Dolor sit amet, 
                         consectetur adipiscing elit proin consequat."
            ],
            [
                'name'=>"Lancer Jack",
                'position'=>"Senior Manager",
                'images'=>"team_pic3.jpg",
                'text'=>"Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                         Proin consequat sollicitudin cursus. Dolor sit amet, 
                         consectetur adipiscing elit proin consequat."
            ]
        ]);
    }
}
