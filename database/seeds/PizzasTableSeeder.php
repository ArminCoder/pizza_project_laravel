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
                'name' => 'Margherita',
                'image' => '/images/margarita.png',
                'price' => '6',
                'description' => "I absolutely love Italian food, So pizza - like a margherita pizza, penne arbiota, a glass of wine. That's like my dream. ~Julianne Hough"
            ],
            [
                'name' => 'Capriciossa',
                'image' => '/images/capriciossa.png',
                'price' => '8',
                'description' => "You better cut the capriciossa in four pieces because I'm not hungry enough to eat six. ~Yogi Berra"
            ],
            [
                'name' => 'Funghi',
                'image' => '/images/funghi.png',
                'price' => '7',
                'description' => "I don't always take off my make-up before bed, and I like funghi at two in the morning. ~Katie Holmes"
            ],
            [
                'name' => 'Vegetariana',
                'image' => '/images/vegeteriana.png',
                'price' => '8',
                'description' => "I can't remember a Friday when I was younger when I wasn't eating a vegeteriana, flirting with the barman. ~Florence Pugh"
            ],
            [
                'name' => 'Mexicana',
                'image' => '/images/mexicana.png',
                'price' => '10',
                'description' => "I love mexicana. I want to marry it, but it would just be to eat her family at the wedding. ~Mike Birbiglia"
            ],
            [
                'name' => 'Tonno',
                'image' => '/images/tonno.png',
                'price' => '9',
                'description' => "I grew up with a Mediterranean diet, so I like clean, simple food. But if there's tonno on a menu, I always end up ordering it. I can't resist it. ~Sara Sampaio"
            ],
            [
                'name' => 'Pepperoni',
                'image' => '/images/pepperoni.png',
                'price' => '8',
                'description' => "It doesn't even matter if I don't win a self-gold after every meet, I have pizza. Peperoni pizza! ~Simone Biles"
            ],
            [
                'name' => 'Quattro formaggi',
                'image' => '/images/guattro_formaggi.png',
                'price' => '10',
                'description' => "I love Italian food; you can't go wrong with Rosebud, and of course, I like quattro formaggi pizza. ~Shanola Hampton"
            ]
         ]);
    }
}
