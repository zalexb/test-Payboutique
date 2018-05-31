<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SecondTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('secondTable')->insert([

            'name'=>'second table test',
            'price'=>123,
            'num'=>1
        ]);
        DB::table('secondTable')->insert([

            'name'=>'second table test',
            'price'=>444,
            'num'=>1
        ]);
        DB::table('secondTable')->insert([

            'name'=>'second table test 3',
            'price'=>444,
            'num'=>123,

        ]);
    }
}
