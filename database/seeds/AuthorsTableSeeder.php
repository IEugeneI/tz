<?php

use Illuminate\Database\Seeder;

class AuthorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('authors')->insert([
            'name' => 'Илья',
            'surname' => 'Арнольдович',
            'lastname' => 'Ильиф',
        ]);

        DB::table('authors')->insert([
            'name' => 'Евгений',
            'surname' => 'Петрович',
            'lastname' => 'Петров',
        ]);

        DB::table('authors')->insert([
            'name' => 'Аркадий',
            'surname' => 'Натанович',
            'lastname' => 'Стругацкий',
        ]);

        DB::table('authors')->insert([
            'name' => 'Борис',
            'surname' => 'Натанович',
            'lastname' => 'Стругацкий',
        ]);

        DB::table('authors')->insert([
            'name' => 'Михаил',
            'surname' => 'Афанасьевич',
            'lastname' => 'Булгаков',
        ]);
        DB::table('authors')->insert([
            'name' => 'Рей',
            'surname' => 'Дуглас',
            'lastname' => 'Бредбери',
        ]);



    }
}
