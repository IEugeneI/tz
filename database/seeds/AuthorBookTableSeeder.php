<?php

use Illuminate\Database\Seeder;

class AuthorBookTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('author_book')->insert([
            'book_id' => '1',
            'author_id' => '5',
        ]);
        DB::table('author_book')->insert([
            'book_id' => '2',
            'author_id' => '1',
        ]);
        DB::table('author_book')->insert([
            'book_id' => '2',
            'author_id' => '2',
        ]);
        DB::table('author_book')->insert([
            'book_id' => '3',
            'author_id' => '1',
        ]);
        DB::table('author_book')->insert([
            'book_id' => '3',
            'author_id' => '2',
        ]);
        DB::table('author_book')->insert([
            'book_id' => '4',
            'author_id' => '3',
        ]);
        DB::table('author_book')->insert([
            'book_id' => '4',
            'author_id' => '4',
        ]);
        DB::table('author_book')->insert([
            'book_id' => '5',
            'author_id' => '6',
        ]);
    }
}
