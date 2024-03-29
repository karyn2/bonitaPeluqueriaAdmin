<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; 
use Illuminate\Support\Facades\Hash;


class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            ['identificacion'=>'108593627',   
            'name' => 'Angela Ceron',
            'email' => 'karynaceron@gmail.com',
            'password' => Hash::make('angela1234'),
            'celular' => '3107132031',
            'role' => 'admin'
            ]
        ];
        DB::table('users')->insert($datos);
    }
}
