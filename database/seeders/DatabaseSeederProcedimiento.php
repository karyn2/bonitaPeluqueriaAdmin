<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class DatabaseSeederProcedimiento extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('tipos_procedimiento')->truncate();
        DB::table('procedimiento')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');


        $tipo_procedimiento = [
            ['id_tipo' => 't1', 'nombre_tipo' => 'Cortes y Peinados Damas'],
            ['id_tipo' => 't2', 'nombre_tipo' => 'Coloración'],
            ['id_tipo' => 't3', 'nombre_tipo' => 'Lavados'],
            ['id_tipo' => 't4', 'nombre_tipo' => 'Manicure'],
            ['id_tipo' => 't5', 'nombre_tipo' => 'Maquillaje'],
            ['id_tipo' => 't6', 'nombre_tipo' => 'Tratamientos'],
        ];
        DB::table('tipos_procedimiento')->insert($tipo_procedimiento);
        $procedimiento = [
            // Cortes y Peinados Damas
            ['id_procedimiento' => 'p1', 'nombre_procedimiento' => 'Cortes', 'precio' => 15000, 'fk_id_tipo' => 't1'],
            ['id_procedimiento' => 'p2', 'nombre_procedimiento' => 'Peinados novias', 'precio' => 35000, 'fk_id_tipo' => 't1'],
            ['id_procedimiento' => 'p3', 'nombre_procedimiento' => 'Peinados Quinceañeras', 'precio' => 35000, 'fk_id_tipo' => 't1'],
            ['id_procedimiento' => 'p4', 'nombre_procedimiento' => 'Peinados Infantiles', 'precio' => 25000, 'fk_id_tipo' => 't1'],

            // Coloración
            ['id_procedimiento' => 'p5', 'nombre_procedimiento' => 'Tintes Planos S-M', 'precio' => 70000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p6', 'nombre_procedimiento' => 'Tintes Planos L-XL', 'precio' => 120000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p7', 'nombre_procedimiento' => 'Rayitos S-M', 'precio' => 120000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p8', 'nombre_procedimiento' => 'Rayitos L-XL', 'precio' => 180000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p9', 'nombre_procedimiento' => 'Mechas S-M', 'precio' => 170000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p10', 'nombre_procedimiento' => 'Mechas L-XL', 'precio' => 220000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p11', 'nombre_procedimiento' => 'Camuflaje de Canas S-M', 'precio' => 120000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p12', 'nombre_procedimiento' => 'Camuflaje de Canas L-XL', 'precio' => 170000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p13', 'nombre_procedimiento' => 'Balayage S-M', 'precio' => 250000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p14', 'nombre_procedimiento' => 'Balayage L-XL', 'precio' => 300000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p15', 'nombre_procedimiento' => 'Tonos Fantasía S-M', 'precio' => 70000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p16', 'nombre_procedimiento' => 'Tonos Fantasía L-XL', 'precio' => 150000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p17', 'nombre_procedimiento' => 'Decoloración Global S-M', 'precio' => 180000, 'fk_id_tipo' => 't2'],
            ['id_procedimiento' => 'p18', 'nombre_procedimiento' => 'Decoloración Global L-XL', 'precio' => 220000, 'fk_id_tipo' => 't2'],

            // Lavados
            ['id_procedimiento' => 'p19', 'nombre_procedimiento' => 'Lavado L Oreal Serie Expert', 'precio' => 5000, 'fk_id_tipo' => 't3'],
            ['id_procedimiento' => 'p20', 'nombre_procedimiento' => 'Lavado Moroccanoil', 'precio' => 5000, 'fk_id_tipo' => 't3'],
            ['id_procedimiento' => 'p21', 'nombre_procedimiento' => 'Lavado Schwarzkopf', 'precio' => 5000, 'fk_id_tipo' => 't3'],
            ['id_procedimiento' => 'p22', 'nombre_procedimiento' => 'Lavado Alfaparf', 'precio' => 5000, 'fk_id_tipo' => 't3'],

            // MANICURE
            ['id_procedimiento' => 'p23', 'nombre_procedimiento' => 'Limpieza', 'precio' => 10000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p24', 'nombre_procedimiento' => 'Esmaltado Básico', 'precio' => 15000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p25', 'nombre_procedimiento' => 'Esmaltado Semipermanente', 'precio' => 35000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p26', 'nombre_procedimiento' => 'Uñas en acrílico Esculpidas', 'precio' => 120000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p27', 'nombre_procedimiento' => 'Uñas en acrílico con Tips', 'precio' => 90000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p28', 'nombre_procedimiento' => 'Uñas en Gel', 'precio' => 90000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p29', 'nombre_procedimiento' => 'Unas en Poligel', 'precio' => 90000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p30', 'nombre_procedimiento' => 'Uñas Press On', 'precio' => 70000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p31', 'nombre_procedimiento' => 'Recubrimiento de Acrílico', 'precio' => 60000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p32', 'nombre_procedimiento' => 'Extensiones de Uñas', 'precio' => 30000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p33', 'nombre_procedimiento' => 'Uñas Postizas', 'precio' => 30000, 'fk_id_tipo' => 't4'],
            ['id_procedimiento' => 'p34', 'nombre_procedimiento' => 'Manicure para Caballero', 'precio' => 12000, 'fk_id_tipo' => 't4'],

            // MAQUILLAJE
            ['id_procedimiento' => 'p35', 'nombre_procedimiento' => 'Maquillaje Día', 'precio' => 35000, 'fk_id_tipo' => 't5'],
            ['id_procedimiento' => 'p36', 'nombre_procedimiento' => 'Maquillaje Noche', 'precio' => 40000, 'fk_id_tipo' => 't5'],
            ['id_procedimiento' => 'p37', 'nombre_procedimiento' => 'Maquillaje Fiesta', 'precio' => 40000, 'fk_id_tipo' => 't5'],
            ['id_procedimiento' => 'p38', 'nombre_procedimiento' => 'Maquillaje Novia y Quinceañera', 'precio' => 50000, 'fk_id_tipo' => 't5'],

            // Tratamientos
            ['id_procedimiento' => 'p39', 'nombre_procedimiento' => 'Tratamiento Anti Frizz Keratina S-M', 'precio' => 25000, 'fk_id_tipo' => 't6'],
            ['id_procedimiento' => 'p40', 'nombre_procedimiento' => 'Tratamiento Anti Frizz Botox S-M', 'precio' => 23500, 'fk_id_tipo' => 't6'],
            ['id_procedimiento' => 'p41', 'nombre_procedimiento' => 'Tratamiento Anti Frizz Revitalizador S-M', 'precio' => 30000, 'fk_id_tipo' => 't6'],
            ['id_procedimiento' => 'p42', 'nombre_procedimiento' => 'Traitment Alfa Células Madres', 'precio' => 15000, 'fk_id_tipo' => 't6'],
            ['id_procedimiento' => 'p43', 'nombre_procedimiento' => 'Traitment Caviar Kerastase', 'precio' => 8000, 'fk_id_tipo' => 't6'],
            ['id_procedimiento' => 'p44', 'nombre_procedimiento' => 'Ampoule Di Lino Alfaparf', 'precio' => 8000, 'fk_id_tipo' => 't6'],
        ];
        DB::table('procedimiento')->insert($procedimiento);
    }
}
