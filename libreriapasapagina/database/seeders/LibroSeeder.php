<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Libro;

class Libros extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Libro::create(['titulo' => 'Libro 1','autor' => 'Autor 1', 'paginas' => 100, 'precio' => 10.50]);
        Libro::create(['titulo' => 'Libro 2','autor' => 'Autor 2', 'paginas' => 1010, 'precio' => 12.50]);
        Libro::create(['titulo' => 'Libro 3','autor' => 'Autor 3', 'paginas' => 500, 'precio' => 22.50]);
    }
}
