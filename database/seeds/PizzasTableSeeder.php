<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pizzas')->insert([
            [
                'name' => 'Margharita',
                'image' => '/images/margarita.png',
                'price' => '6',
                'description' => "Pizza Margherita (more commonly known in English as Margherita pizza) is a typical Neapolitan pizza, made with San Marzano tomatoes, mozzarella cheese, fresh basil, salt and extra-virgin olive oil. Traditionally, it is made with fior di latte (cow's milk mozzarella) rather than buffalo mozzarella."
            ],
            [
                'name' => 'Capricosa',
                'image' => '/images/margarita.png',
                'price' => '8',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Funghi',
                'image' => '/images/margarita.png',
                'price' => '7',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Vegetariana',
                'image' => '/images/margarita.png',
                'price' => '8',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Mexicana',
                'image' => '/images/margarita.png',
                'price' => '10',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Tonno',
                'image' => '/images/margarita.png',
                'price' => '9',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Pepperoni',
                'image' => '/images/margarita.png',
                'price' => '8',
                'description' => 'Lorem ipsum'
            ],
            [
                'name' => 'Quattro formaggi',
                'image' => '/images/margarita.png',
                'price' => '10',
                'description' => 'Lorem ipsum'
            ]
         ]);
    }
}
