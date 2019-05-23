<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IncidentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('incidents')->insert([
            'name' => 'Ninguna',
            'active' => 1,
        ]);

        DB::table('incidents')->insert([
            'name' => 'Baja Médica',
            'active' => 1,
        ]);

        DB::table('incidents')->insert([
            'name' => 'Horas Extras',
            'active' => 1,
        ]);

        DB::table('incidents')->insert([
            'name' => 'Permiso de Empresa',
            'active' => 1,
        ]);
    }
}
