<?php

use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('books')->insert([
            'name' => 'Мастер и маргарита',
            'page_count' => '355',
        ]);

        DB::table('books')->insert([
            'name' => '12 стульев',
            'page_count' => '500',
        ]);

        DB::table('books')->insert([
            'name' => 'Одноэтажная Америка',
            'page_count' => '333',
        ]);

        DB::table('books')->insert([
            'name' => 'За миллиард лет до конца света',
            'page_count' => '700',
        ]);

        DB::table('books')->insert([
            'name' => '451 градус по Фарингейту',
            'page_count' => '120',
        ]);
    }
}
