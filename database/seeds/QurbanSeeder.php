<?php

use App\Qurban;
use Illuminate\Database\Seeder;

class QurbanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Qurban::create([
            'name' => 'Sapi'
        ]);
        
        Qurban::create([
            'name' => 'Kambing'
        ]);
    }
}
