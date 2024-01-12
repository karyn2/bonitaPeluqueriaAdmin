<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class EgresoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement( 'SET FOREIGN_KEY_CHECKS=0' );

        DB::table( 'tipos_egreso' )->truncate();
        DB::table( 'egreso' )->truncate();

        DB::statement( 'SET FOREIGN_KEY_CHECKS=1' );

        $tipo_egreso = [
            ['nombre_tipo' => 'Pago de arriendo' ],
            ['nombre_tipo' => 'Pago de servicios' ],
            ['nombre_tipo' => 'Pago de sueldos' ],
            ['nombre_tipo' => 'Pago de insumos' ],
            ['nombre_tipo' => 'Pago de impuestos' ],
            ['nombre_tipo' => 'Pago de créditos' ],
            ['nombre_tipo' => 'Pago de seguros' ],
            ['nombre_tipo' => 'Pago de otros' ],
        ];
        DB::table('tipos_egreso')->insert($tipo_egreso);

        $egreso = [
            ['fk_tipo_egreso' => 1, 'descripcion_egreso' => 'Pago de arriendo del local', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Arrendador', 'valor' => 500000],
            ['fk_tipo_egreso' => 2, 'descripcion_egreso' => 'Pago de luz', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Enel', 'valor' => 50000],
            ['fk_tipo_egreso' => 3, 'descripcion_egreso' => 'Pago de sueldo de peluquero', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Peluquero', 'valor' => 300000],
            ['fk_tipo_egreso' => 4, 'descripcion_egreso' => 'Pago de shampoo', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Distribuidora', 'valor' => 50000],
            ['fk_tipo_egreso' => 5, 'descripcion_egreso' => 'Pago de impuesto de patente', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Municipalidad', 'valor' => 50000],
            ['fk_tipo_egreso' => 6, 'descripcion_egreso' => 'Pago de crédito de vehículo', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Banco', 'valor' => 500000],
            ['fk_tipo_egreso' => 7, 'descripcion_egreso' => 'Pago de seguro de vehículo', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Seguros Falabella', 'valor' => 50000],
            ['fk_tipo_egreso' => 8, 'descripcion_egreso' => 'Pago de otros', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Otro', 'valor' => 50000],
            ['fk_tipo_egreso' => 1, 'descripcion_egreso' => 'Pago de arriendo del local', 'fecha_hora' => '2023-01-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Arrendador', 'valor' => 500000],
            ['fk_tipo_egreso' => 2, 'descripcion_egreso' => 'Pago de luz', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Enel', 'valor' => 50000],
            ['fk_tipo_egreso' => 3, 'descripcion_egreso' => 'Pago de sueldo de peluquero', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Peluquero', 'valor' => 300000],
            ['fk_tipo_egreso' => 4, 'descripcion_egreso' => 'Pago de shampoo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Distribuidora', 'valor' => 50000],
            ['fk_tipo_egreso' => 5, 'descripcion_egreso' => 'Pago de impuesto de patente', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Municipalidad', 'valor' => 50000],
            ['fk_tipo_egreso' => 6, 'descripcion_egreso' => 'Pago de crédito de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Banco', 'valor' => 500000],
            ['fk_tipo_egreso' => 7, 'descripcion_egreso' => 'Pago de seguro de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Seguros Falabella', 'valor' => 50000],
            ['fk_tipo_egreso' => 8, 'descripcion_egreso' => 'Pago de otros', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Otro', 'valor' => 50000],
            ['fk_tipo_egreso' => 1, 'descripcion_egreso' => 'Pago de arriendo del local', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Arrendador', 'valor' => 500000],
            ['fk_tipo_egreso' => 2, 'descripcion_egreso' => 'Pago de luz', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Enel', 'valor' => 50000],
            ['fk_tipo_egreso' => 3, 'descripcion_egreso' => 'Pago de sueldo de peluquero', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Peluquero', 'valor' => 300000],
            ['fk_tipo_egreso' => 4, 'descripcion_egreso' => 'Pago de shampoo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Distribuidora', 'valor' => 50000],
            ['fk_tipo_egreso' => 5, 'descripcion_egreso' => 'Pago de impuesto de patente', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Municipalidad', 'valor' => 50000],
            ['fk_tipo_egreso' => 6, 'descripcion_egreso' => 'Pago de crédito de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Banco', 'valor' => 500000],
            ['fk_tipo_egreso' => 7, 'descripcion_egreso' => 'Pago de seguro de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Seguros Falabella', 'valor' => 50000],
            ['fk_tipo_egreso' => 8, 'descripcion_egreso' => 'Pago de otros', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Otro', 'valor' => 50000],
            ['fk_tipo_egreso' => 1, 'descripcion_egreso' => 'Pago de arriendo del local', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Arrendador', 'valor' => 500000],
            ['fk_tipo_egreso' => 2, 'descripcion_egreso' => 'Pago de luz', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Enel', 'valor' => 50000],
            ['fk_tipo_egreso' => 3, 'descripcion_egreso' => 'Pago de sueldo de peluquero', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Peluquero', 'valor' => 300000],
            ['fk_tipo_egreso' => 4, 'descripcion_egreso' => 'Pago de shampoo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Distribuidora', 'valor' => 50000],
            ['fk_tipo_egreso' => 5, 'descripcion_egreso' => 'Pago de impuesto de patente', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Municipalidad', 'valor' => 50000],
            ['fk_tipo_egreso' => 6, 'descripcion_egreso' => 'Pago de crédito de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Banco', 'valor' => 500000],
            ['fk_tipo_egreso' => 7, 'descripcion_egreso' => 'Pago de seguro de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Seguros Falabella', 'valor' => 50000],
            ['fk_tipo_egreso' => 8, 'descripcion_egreso' => 'Pago de otros', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Otro', 'valor' => 50000],
            ['fk_tipo_egreso' => 1, 'descripcion_egreso' => 'Pago de arriendo del local', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Arrendador', 'valor' => 500000],
            ['fk_tipo_egreso' => 2, 'descripcion_egreso' => 'Pago de luz', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Enel', 'valor' => 50000],
            ['fk_tipo_egreso' => 3, 'descripcion_egreso' => 'Pago de sueldo de peluquero', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Peluquero', 'valor' => 300000],
            ['fk_tipo_egreso' => 4, 'descripcion_egreso' => 'Pago de shampoo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Distribuidora', 'valor' => 50000],
            ['fk_tipo_egreso' => 5, 'descripcion_egreso' => 'Pago de impuesto de patente', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Municipalidad', 'valor' => 50000],
            ['fk_tipo_egreso' => 6, 'descripcion_egreso' => 'Pago de crédito de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Banco', 'valor' => 500000],
            ['fk_tipo_egreso' => 7, 'descripcion_egreso' => 'Pago de seguro de vehículo', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Seguros Falabella', 'valor' => 50000],
            ['fk_tipo_egreso' => 8, 'descripcion_egreso' => 'Pago de otros', 'fecha_hora' => '2023-02-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Otro', 'valor' => 50000],
            ['fk_tipo_egreso' => 1, 'descripcion_egreso' => 'Pago de arriendo del local', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Arrendador', 'valor' => 500000],
            ['fk_tipo_egreso' => 2, 'descripcion_egreso' => 'Pago de luz', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Enel', 'valor' => 50000],
            ['fk_tipo_egreso' => 3, 'descripcion_egreso' => 'Pago de sueldo de peluquero', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Peluquero', 'valor' => 300000],
            ['fk_tipo_egreso' => 4, 'descripcion_egreso' => 'Pago de shampoo', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Distribuidora', 'valor' => 50000],
            ['fk_tipo_egreso' => 5, 'descripcion_egreso' => 'Pago de impuesto de patente', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Municipalidad', 'valor' => 50000],
            ['fk_tipo_egreso' => 6, 'descripcion_egreso' => 'Pago de crédito de vehículo', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Banco', 'valor' => 500000],
            ['fk_tipo_egreso' => 7, 'descripcion_egreso' => 'Pago de seguro de vehículo', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Seguros Falabella', 'valor' => 50000],
            ['fk_tipo_egreso' => 8, 'descripcion_egreso' => 'Pago de otros', 'fecha_hora' => '2023-03-01 00:00:00', 'fk_users' => 1, 'a_quien_se_dio' => 'Otro', 'valor' => 50000],        
            

        ];
        DB::table('egreso')->insert($egreso);

    }
}
