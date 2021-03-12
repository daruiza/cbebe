<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class SeederBebesXLeches extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bebe_leche')->insert(
            array(
                'peso' => 1000,
                'estatura' => 10,
                'cantidad'=> 60,
                'bebe_id' => 1,
                'leche_id' => 1,
            )
        );
        DB::table('bebe_leche')->insert(
            array(
                'peso' => 1500,
                'estatura' => 15,
                'cantidad'=> 60,
                'bebe_id' => 1,
                'leche_id' => 2,
            )
        );
        DB::table('bebe_leche')->insert(
            array(
                'peso' => 500,
                'estatura' => 10,
                'cantidad'=> 60,
                'bebe_id' => 2,
                'leche_id' => 1,
            )
        );
    }
}
