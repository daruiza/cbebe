<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SeederBebes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bebes')->insert(
            array(
                'nombre' => 'Juan',
                'identificacion' => 10,
                'fecha_nacimiento' => Carbon::parse('2021-02-15'),
            )
        );

        DB::table('bebes')->insert(
            array(
                'nombre' => 'Pedro',
                'identificacion' => 11,
                'fecha_nacimiento' => Carbon::parse('2021-02-01'),
            )
        );
    }
}
