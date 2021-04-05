<?php

use App\Portfolio;
use Illuminate\Database\Seeder;

class PortfoliosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Portfolio::create([
            [
                'name'=>"Finance App",
                'images'=>"portfolio_pic2.jpg",
                'filter'=>"GPS",
            ],
            [
                'name'=>"Concept",
                'images'=>"portfolio_pic3.jpg",
                'filter'=>"design",
            ],
            [
                'name'=>"Shopping",
                'images'=>"portfolio_pic4.jpg",
                'filter'=>"android",
            ],
            [
                'name'=>"Managment",
                'images'=>"portfolio_pic5.jpg",
                'filter'=>"design",
            ],
            [
                'name'=>"iPhone",
                'images'=>"portfolio_pic6.jpg",
                'filter'=>"web",
            ],
            [
                'name'=>"Nexus
                         Phone",
                'images'=>"portfolio_pic7.jpg",
                'filter'=>"web",
            ],
            [
                'name'=>"Android",
                'images'=>"portfolio_pic8.jpg",
                'filter'=>"android"
            ]
        ]);

    }
}
