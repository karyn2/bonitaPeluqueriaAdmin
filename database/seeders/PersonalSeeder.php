<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $datos = [
            [
                'identificacion' => '1029384756',
                'nombres' => 'Ana',
                'apellidos' => 'Gutiérrez',
                'correo' => 'ana.gutierrez@example.com',
                'telefono' => '555-1234',
                'cargo' => 'Estilista',
                'porcentaje_pago' => 20,
            ],
            [
                'identificacion' => '9876543210',
                'nombres' => 'Mario',
                'apellidos' => 'Vargas',
                'correo' => 'mario.vargas@example.com',
                'telefono' => '555-5678',
                'cargo' => 'Barbero',
                'porcentaje_pago' => 18,
            ],
            [
                'identificacion' => '555666777',
                'nombres' => 'Sofía',
                'apellidos' => 'Rojas',
                'correo' => 'sofia.rojas@example.com',
                'telefono' => '555-4321',
                'cargo' => 'Asistente de Peluquería',
                'porcentaje_pago' => 25,
            ],
            [
                'identificacion' => '123098765',
                'nombres' => 'Luis',
                'apellidos' => 'Fernández',
                'correo' => 'luis.fernandez@example.com',
                'telefono' => '555-8765',
                'cargo' => 'Recepcionista',
                'porcentaje_pago' => 22,
            ],
            [
                'identificacion' => '111222333',
                'nombres' => 'Karla',
                'apellidos' => 'Sánchez',
                'correo' => 'karla.sanchez@example.com',
                'telefono' => '555-9876',
                'cargo' => 'Manicurista',
                'porcentaje_pago' => 19,
            ],
        ];

        DB::table('personal')->insert($datos);


    }
}
