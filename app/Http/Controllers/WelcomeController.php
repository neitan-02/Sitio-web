<?php

namespace App\Http\Controllers;

use App\Models\Service; // Importa el modelo Service
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        // Obtener todos los servicios
        $services = Service::all();

        // Pasar los servicios a la vista
        return view('welcome', compact('services'));
    }

    public function Contacto()
    {
        return view('contact');
    }

    public function Acerca()
    {
        return view('about');
    }

    public function Testimonios()
    {
        return view('testimonios');
    }
}
