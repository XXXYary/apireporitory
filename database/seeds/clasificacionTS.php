<?php

use Illuminate\Database\Seeder;

class clasificacionTS extends Seeder
{
   
    public function run()
    {
        for($i=1;$i<6;$i++){
            DB::table('clasificacion')->insert([
                'nombre' => 'clasificacion '.$i,
            ]);
        }
    }
}
