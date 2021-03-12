<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeederLeches extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('leches')->insert(
            array(
                'nombre' => 'Klin',
                'marca' => 100
            )
        );

        DB::table('leches')->insert(
            array(
                'nombre' => 'Nan',
                'marca' => 101
            )
        );
    }
}
