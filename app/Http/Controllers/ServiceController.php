<?php

namespace App\Http\Controllers;

use App\Models\Service;
use App\Http\Requests\ServiceRequest;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('can:services.create')->only('edit', 'update', 'destroy', 'create');
        $this->middleware('can:services.index')->only('show', 'index');
    }
    public function showdetail($id)
{
    $service = Service::find($id);
    if (!$service) {
        abort(404);
    }

    return view('detail', compact('service'));
}
    
    public function Offer()
    {
        $services = Service::all();
        return view('offer', compact('services'));
    }
    public function availableServices()
    {
        $services = Service::all();
        return view('services', compact('services'));
    }

    public function index()
    {
        $services = Service::paginate();
        return view('service.index', compact('services'))
            ->with('i', (request()->input('page', 1) - 1) * $services->perPage());
    }

    public function create()
    {
        $service = new Service();
        return view('service.create', compact('service'));
    }

    public function store(ServiceRequest $request)
    {
        Service::create($request->validated());
        return redirect()->route('services.index')->with('success', 'Servicio Creado Correctamente');
    }

    public function show($id)
    {
        $service = Service::findOrFail($id);
        return view('service.show', compact('service'));
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('service.edit', compact('service'));
    }

    public function update(ServiceRequest $request, $id)
    {
        $service = Service::findOrFail($id);
        $service->update($request->validated());
        return redirect()->route('services.index')->with('success', 'Servicio Editado Correctamente');
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        $service->delete();
        return redirect()->route('services.index')->with('success', 'Servicio Eliminado Correctamente');
    }
}
