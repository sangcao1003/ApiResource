<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [ 'name' => 'Điện thoại' ],
            [ 'name' => 'Laptop' ],
            [ 'name' => 'Tivi' ],
            [ 'name' => 'Tủ lạnh' ],
            [ 'name' => 'Máy giặt' ],
        ]);
    }
}
