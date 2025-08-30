<?php

// app/Http/Controllers/ContactController.php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('contact', compact('services'));
    }
}



