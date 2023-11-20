<?php

namespace Database\Seeders;

use App\Models\Tareas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TareasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tareas::create([
            'name' => 'Tarea Principal',
            'description' => 'Tarea creada únicamente como ejemplo, para ver 	 como funcionan los seeder en laravel por Mau',
            'date' => now(),
            'course' => 'Curso  Principal',
            'state' => true,
        ]);

    }
}
