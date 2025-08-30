<?php

namespace App\Http\Controllers;

use App\Models\Testimonio;
use App\Http\Requests\TestimonioRequest;

/**
 * Class TestimonioController
 * @package App\Http\Controllers
 */
class TestimonioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $testimonios = Testimonio::paginate();

        return view('testimonio.index', compact('testimonios'))
            ->with('i', (request()->input('page', 1) - 1) * $testimonios->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $testimonio = new Testimonio();
        return view('testimonio.create', compact('testimonio'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TestimonioRequest $request)
    {
        Testimonio::create($request->validated());

        return redirect()->route('testimonios.index')
            ->with('success', 'Testimonio created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $testimonio = Testimonio::find($id);

        return view('testimonio.show', compact('testimonio'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $testimonio = Testimonio::find($id);

        return view('testimonio.edit', compact('testimonio'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TestimonioRequest $request, Testimonio $testimonio)
    {
        $testimonio->update($request->validated());

        return redirect()->route('testimonios.index')
            ->with('success', 'Testimonio updated successfully');
    }

    public function destroy($id)
    {
        Testimonio::find($id)->delete();

        return redirect()->route('testimonios.index')
            ->with('success', 'Testimonio deleted successfully');
    }

    public function testimonio()
    {
        $testimonios = Testimonio::all();
        return view('testimonios', compact('testimonios'));
    }

}
