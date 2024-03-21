<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Curso;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*for($i=0; $i<3; $i++){
            $curso = new Curso();

            $curso->name = "Laravel ".($i + 1);
            $curso->descripcion = "El mejor framework de PHP";
            $curso->categoria = "Desarrollo Web";

            $curso->save();
        }*/
        Curso::factory(50)->create();
    }
}
