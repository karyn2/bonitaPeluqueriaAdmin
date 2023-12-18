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
            ['id_tipo'=>1,'nombre_tipo' => 'Cortes y Peinados Damas'],
            ['id_tipo'=>2,'nombre_tipo' => 'Coloración'],
            ['id_tipo'=>3,'nombre_tipo' => 'Lavados'],
            ['id_tipo'=>4,'nombre_tipo' => 'Manicure'],
            ['id_tipo'=>5,'nombre_tipo' => 'Maquillaje'],
            ['id_tipo'=>6,'nombre_tipo' => 'Tratamientos'],
        ];
        DB::table('tipos_procedimiento')->insert($tipo_procedimiento);
        $procedimiento = [
            // Cortes y Peinados Damas
            ['id_procedimiento'=>1, 'nombre_procedimiento' => 'Cortes', 'precio' => 15000, 'fk_id_tipo' => '1'],
            ['id_procedimiento'=>2, 'nombre_procedimiento' => 'Peinados novias', 'precio' => 35000, 'fk_id_tipo' => '1'],
            ['id_procedimiento'=>3, 'nombre_procedimiento' => 'Peinados Quinceañeras', 'precio' => 35000, 'fk_id_tipo' => '1'],
            ['id_procedimiento'=>4, 'nombre_procedimiento' => 'Peinados Infantiles', 'precio' => 25000, 'fk_id_tipo' => '1'],

            // Coloración
            ['id_procedimiento'=>5,'nombre_procedimiento' => 'Tintes Planos S-M', 'precio' => 70000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>6,'nombre_procedimiento' => 'Tintes Planos L-XL', 'precio' => 120000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>7,'nombre_procedimiento' => 'Rayitos S-M', 'precio' => 120000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>8,'nombre_procedimiento' => 'Rayitos L-XL', 'precio' => 180000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>9,'nombre_procedimiento' => 'Mechas S-M', 'precio' => 170000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>10, 'nombre_procedimiento' => 'Mechas L-XL', 'precio' => 220000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>11, 'nombre_procedimiento' => 'Camuflaje de Canas S-M', 'precio' => 120000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>12, 'nombre_procedimiento' => 'Camuflaje de Canas L-XL', 'precio' => 170000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>13, 'nombre_procedimiento' => 'Balayage S-M', 'precio' => 250000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>14, 'nombre_procedimiento' => 'Balayage L-XL', 'precio' => 300000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>15, 'nombre_procedimiento' => 'Tonos Fantasía S-M', 'precio' => 70000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>16, 'nombre_procedimiento' => 'Tonos Fantasía L-XL', 'precio' => 150000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>17, 'nombre_procedimiento' => 'Decoloración Global S-M', 'precio' => 180000, 'fk_id_tipo' => '2'],
            ['id_procedimiento'=>18, 'nombre_procedimiento' => 'Decoloración Global L-XL', 'precio' => 220000, 'fk_id_tipo' => '2'],

            // Lavados
            ['id_procedimiento'=>19, 'nombre_procedimiento' => 'Lavado L Oreal Serie Expert', 'precio' => 5000, 'fk_id_tipo' => '3'],
            ['id_procedimiento'=>20, 'nombre_procedimiento' => 'Lavado Moroccanoil', 'precio' => 5000, 'fk_id_tipo' => '3'],
            ['id_procedimiento'=>21, 'nombre_procedimiento' => 'Lavado Schwarzkopf', 'precio' => 5000, 'fk_id_tipo' => '3'],
            ['id_procedimiento'=>22, 'nombre_procedimiento' => 'Lavado Alfaparf', 'precio' => 5000, 'fk_id_tipo' => '3'],

            // MANICURE
            ['id_procedimiento'=>23, 'nombre_procedimiento' => 'Limpieza', 'precio' => 10000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>24, 'nombre_procedimiento' => 'Esmaltado Básico', 'precio' => 15000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>25, 'nombre_procedimiento' => 'Esmaltado Semipermanente', 'precio' => 35000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>26, 'nombre_procedimiento' => 'Uñas en acrílico Esculpidas', 'precio' => 120000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>27, 'nombre_procedimiento' => 'Uñas en acrílico con Tips', 'precio' => 90000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>28, 'nombre_procedimiento' => 'Uñas en Gel', 'precio' => 90000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>29, 'nombre_procedimiento' => 'Unas en Poligel', 'precio' => 90000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>30, 'nombre_procedimiento' => 'Uñas Press On', 'precio' => 70000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>31, 'nombre_procedimiento' => 'Recubrimiento de Acrílico', 'precio' => 60000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>32, 'nombre_procedimiento' => 'Extensiones de Uñas', 'precio' => 30000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>33, 'nombre_procedimiento' => 'Uñas Postizas', 'precio' => 30000, 'fk_id_tipo' => '4'],
            ['id_procedimiento'=>34, 'nombre_procedimiento' => 'Manicure para Caballero', 'precio' => 12000, 'fk_id_tipo' => '4'],

            // MAQUILLAJE
            ['id_procedimiento'=>35, 'nombre_procedimiento' => 'Maquillaje Día', 'precio' => 35000, 'fk_id_tipo' => '5'],
            ['id_procedimiento'=>36, 'nombre_procedimiento' => 'Maquillaje Noche', 'precio' => 40000, 'fk_id_tipo' => '5'],
            ['id_procedimiento'=>37, 'nombre_procedimiento' => 'Maquillaje Fiesta', 'precio' => 40000, 'fk_id_tipo' => '5'],
            ['id_procedimiento'=>38, 'nombre_procedimiento' => 'Maquillaje Novia y Quinceañera', 'precio' => 50000, 'fk_id_tipo' => '5'],

            // Tratamientos
            ['id_procedimiento'=>39, 'nombre_procedimiento' => 'Tratamiento Anti Frizz Keratina S-M', 'precio' => 25000, 'fk_id_tipo' => '6'],
            ['id_procedimiento'=>40, 'nombre_procedimiento' => 'Tratamiento Anti Frizz Botox S-M', 'precio' => 23500, 'fk_id_tipo' => '6'],
            ['id_procedimiento'=>41, 'nombre_procedimiento' => 'Tratamiento Anti Frizz Revitalizador S-M', 'precio' => 30000, 'fk_id_tipo' => '6'],
            ['id_procedimiento'=>42, 'nombre_procedimiento' => 'Traitment Alfa Células Madres', 'precio' => 15000, 'fk_id_tipo' => '6'],
            ['id_procedimiento'=>43, 'nombre_procedimiento' => 'Traitment Caviar Kerastase', 'precio' => 8000, 'fk_id_tipo' => '6'],
            ['id_procedimiento'=>44, 'nombre_procedimiento' => 'Ampoule Di Lino Alfaparf', 'precio' => 8000, 'fk_id_tipo' => '6'],
        ];
        DB::table('procedimiento')->insert($procedimiento);
    }
}
