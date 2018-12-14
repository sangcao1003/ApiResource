<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'name' => 'iphone X',
                'price' => '999',
                'quantity' => '100',
            ],
            [
                'name' => 'iphone XS',
                'price' => '199',
                'quantity' => '50',
            ],
            [
                'name' => 'Samsung Galaxy S9',
                'price' => '299',
                'quantity' => '300',
            ],
            [
                'name' => 'Smart tivi XR10',
                'price' => '12124',
                'quantity' => '123',
            ],
            [
                'name' => 'Tu lanh Sanyo',
                'price' => '999',
                'quantity' => '22',
            ],
            [
                'name' => 'MacBook Air',
                'price' => '1999',
                'quantity' => '346',
            ],
            [
                'name' => 'Dell core i7',
                'price' => '999',
                'quantity' => '100',
            ],
            [
                'name' => 'May giat Panasonic',
                'price' => '456',
                'quantity' => '167',
            ],
            [
                'name' => 'Asus Gaming',
                'price' => '1999',
                'quantity' => '100',
            ],[
                'name' => 'Nokia 1080',
                'price' => '999',
                'quantity' => '240',
            ],

        ]);
    }
}
