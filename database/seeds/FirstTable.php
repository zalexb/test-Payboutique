<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FirstTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('firstTable')->insert([

            'name'=>'first table test',
            'price'=>123,
            'num'=>12
        ]);
        DB::table('firstTable')->insert([

            'name'=>'first table test 2',
            'price'=>123,
            'num'=>12
        ]);
        DB::table('firstTable')->insert([

            'name'=>'first table test ',
            'price'=>321,
            'num'=>12
        ]);
    }
}
