<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Testimonio;

class TestimoniosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Testimonio::create([
            'nombre' => 'Norma Claudia Pineda',
            'titulo' => 'Excelente servicio',
            'contenido' => 'El servicio fue muy profesional y cumplió con todas mis expectativas.',
            'calificacion' => 5,
            'fecha' => now(),
            'estado' => 'Activo',
            'imagen' => 'https://merrash-proyecto-production.up.railway.app/images/Medicina-Alternativa.jpg', // ajusta esto según tus necesidades
            'video' => 'videos/Testimonio_1.mp4', // ajusta esto según tus necesidades
            'producto_servicio' => 'Medicina Alternativa',
        ]);
    }
}
