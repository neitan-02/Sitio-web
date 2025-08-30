<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('testimonials.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'required|date',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'related_product_or_service' => 'required',
        ]);

        $testimonial = new Testimonial($request->all());

        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('images', 'public');
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial created successfully!');
    }

    public function show(Testimonial $testimonial)
    {
        return view('testimonials.show', compact('testimonial'));
    }

    public function edit(Testimonial $testimonial)
    {
        return view('testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $request->validate([
            'name' => 'required',
            'title' => 'required',
            'content' => 'required',
            'rating' => 'required|integer|min:1|max:5',
            'date' => 'required|date',
            'status' => 'required|boolean',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'related_product_or_service' => 'required',
        ]);

        $testimonial->fill($request->all());

        if ($request->hasFile('image')) {
            $testimonial->image = $request->file('image')->store('images', 'public');
        }

        $testimonial->save();

        return redirect()->route('testimonials.index')->with('success', 'Testimonial updated successfully!');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();
        return redirect()->route('testimonials.index')->with('success', 'Testimonial deleted successfully!');
    }
}
